<?php

namespace App\Controllers;

use App\Models\menuModel;
use CodeIgniter\Encryption\Exceptions\EncryptionException;

class BerandaUser extends BaseController
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
        $ret = $this->menuModel->menu(0, $datas, "get");
        return view('/user/beranda/index', $ret);
    }
}
