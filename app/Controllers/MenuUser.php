<?php

namespace App\Controllers;

use App\Models\menuModel;
use CodeIgniter\Encryption\Exceptions\EncryptionException;

class MenuUser extends BaseController
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
        return view('/user/menu/menu', $ret);
    }

    public function detailed($id = '')
    {
        $ret = [];
        $ret = $this->menuModel->detailed($id);
        $data = [
            'gambar' => $ret['gambar'],
            'title' => $ret['title'],
            'deskripsi' => $ret['deskripsi'],
            'harga' => $ret['harga'],
            'stok' => $ret['stok']
        ];
        // dd($data);
        return view('/user/menu/detailmenu', $data);
    }
}
