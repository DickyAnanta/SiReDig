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

    public function index($alert = '')
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
        $ret = $this->menuModel->menu(encrypt_url(1), $datas, "get");
        if (!empty($alert['alert'])) {
            $ret['alert'] = $alert['alert'];
        }
        return view('/menu/menu_view', $ret);
    }

    public function delete($id)
    {
        $ret = [];
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
        if (empty($id)) {
            $ret['alert'] = [
                'title' => 'Error',
                'type' => 'error',
                'message' => 'ID is null',
                'cobtn' => true,
                'redirect' => false,
                'redirect_to' => ''
            ];
        } else {
            $data = $this->menuModel->menu($id, $datas, "delete");
            if ($data) {
                $ret['alert'] = [
                    'title' => 'Succsess',
                    'type' => 'success',
                    'message' => 'Data berhasil dihapus',
                    'cobtn' => false,
                    'redirect' => true,
                    'redirect_to' => 'menu/menu_view'
                ];
            } else {
                $ret['alert'] = [
                    'title' => 'Failed',
                    'type' => 'error',
                    'message' => 'Data gagal dihapus',
                    'cobtn' => true,
                    'redirect' => false,
                    'redirect_to' => ''
                ];
            }
        }
        return $this->index($ret);
    }

    public function edit($id = '')
    {
        $ret = [];
        $dt_post = @$this->request->getPost();
        if (!empty($dt_post)) {
            $exists = $this->menuModel->exists($dt_post['title']);
            if (empty($id)) {
                if ($exists) {
                    $ret['alert'] = [
                        'title' => 'Error Exists',
                        'type' => 'error',
                        'message' => 'Data sudah ada',
                        'cobtn' => true,
                        'redirect' => false,
                        'redirect_to' => ''
                    ];
                } else {
                    $sv_data = $this->menuModel->menu(0, $dt_post, "post");
                    if ($sv_data['response']) {
                        $ret['alert'] = [
                            'title' => 'Succsess',
                            'type' => 'success',
                            'message' => 'Data berhasil ditambahkan',
                            'cobtn' => false,
                            'redirect' => true,
                            'redirect_to' => 'menu/menu_view'
                        ];
                    } else {
                        $ret['alert'] = [
                            'title' => 'Failed',
                            'type' => 'error',
                            'message' => 'Data gagal ditambahkan',
                            'cobtn' => true,
                            'redirect' => false,
                            'redirect_to' => ''
                        ];
                    }
                }
            } else {
                if ((decrypt_url($id) == @$exists['id']) || ($exists == false)) {
                    $sv_data = $this->menuModel->menu($id, $dt_post, "patch");
                    if ($sv_data['response']) {
                        $ret['alert'] = [
                            'title' => 'Succsess',
                            'type' => 'success',
                            'message' => 'Data berhasil edit',
                            'cobtn' => false,
                            'redirect' => false,
                            'redirect_to' => ''
                        ];
                    } else {
                        $ret['alert'] = [
                            'title' => 'Failed',
                            'type' => 'error',
                            'message' => 'Data gagal diedit',
                            'cobtn' => true,
                            'redirect' => false,
                            'redirect_to' => ''
                        ];
                    }
                } else {
                    $ret['alert'] = [
                        'title' => 'Error Exists',
                        'type' => 'error',
                        'message' => 'Data sudah ada',
                        'cobtn' => true,
                        'redirect' => false,
                        'redirect_to' => ''
                    ];
                }
            }
        }

        if (!empty($id)) {
            $data = $this->menuModel->detailed($id);
        }

        if (empty($data)) {
            if (@$ret['alert']['type'] != 'success') {
                $ret['data'] = @$dt_post;
            }
        } else {
            $ret['data'] = @$data;
        }

        return view('/menu/editmenu_view', $ret);
    }
}
