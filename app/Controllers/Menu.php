<?php

namespace App\Controllers;

use App\Models\menuModel;
use CodeIgniter\Encryption\Exceptions\EncryptionException;

class Menu extends BaseController
{
    protected $menuModel;
    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index()
    {
        $datas = [
            "select" => "id, title, deskripsi, gambar, tipe, harga, stok",
            "getreturn" => "data",
            "order_by" => [
                "column" => "",
                "order" => "DESC"
            ],
            "limit" => [
                "lenght" => -1,
                "start" => ""
            ],
            "whereclause" => ""
        ];
        $datas = $this->menuModel->menu(encrypt_url(1), $datas, "get");
        // $data = $datas;
        return view('/menu/menu_view', $datas);
    }

    public function delete($id)
    {
        $datas = [
            "select" => "id, title, deskripsi, gambar, tipe, harga, stok",
            "getreturn" => "data",
            "order_by" => [
                "column" => "",
                "order" => "DESC"
            ],
            "limit" => [
                "lenght" => -1,
                "start" => ""
            ],
            "whereclause" => ""
        ];
        $data = $this->menuModel->menu($id, $datas, "delete");
        return redirect()->to('menu');
    }

    public function edit($id = '')
    {
        $ret = [];
        if (empty($id)) {
            $validation = $this->validate([
                'title' => [
                    'rules'  => 'required',
                    'errors' => [
                        'required' => 'Masukkan Judul Post.'
                    ]
                ]
            ]);
            $data = $this->request->getPost();
            if (!$validation) {
                return view('/menu/editmenu_view', [
                    'validation' => $this->validator
                ]);
            } elseif ($validation) {
                $tambah = $this->request->getPost(['title', 'deskripsi', 'gambar', 'tipe', 'harga', 'stok']);
                if ($this->menuModel->exists() === true) {
                } else {
                    $tambah = $this->menuModel->menu(0, $tambah, "post");
                }
                return redirect()->to(base_url('menu'));
            }
        } else {
            if (!empty($this->request->getPost())) {
                $dt_post = $this->request->getPost();
                $update = $this->menuModel->menu($id, $dt_post, "patch");
                if ($update['response']) {
                    return redirect()->to(base_url('menu'));
                }
            }
            $data = $this->menuModel->detailed($id);
            $ret = [
                'data' => $data
            ];
        }
        return view('/menu/editmenu_view', $ret);
    }
}
