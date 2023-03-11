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
            "whereclause" => "tipe ='minuman'"
        ];
        $ret = $this->menuModel->menu(0, $datas, "get");
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
        return view('/user/menu/detailmenu', $data);
    }
}
