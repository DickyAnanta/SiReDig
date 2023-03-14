<?php

namespace App\Controllers;

use App\Models\orderModel;
use App\Models\pelangganModel;
use App\Models\menuModel;

class OrderUser extends BaseController
{
    protected $menuModel;
    public function __construct()
    {
        $this->menuModel = new menuModel;
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
            "whereclause" => "tipe = 'minuman'"
        ];
        $ret = $this->menuModel->menu(0, $datas, "get");
        return view('/user/order/pilihmenu', $ret);
    }

    public function add($id = '')
    {
        $ret = [];
        $dt_post = $this->request->getPost('paket');
        dd($dt_post);
    }

    public function pilihmenu()
    {

        return view('/user/order/pilihmenu');
    }

    public function pembayaran()
    {
        return view('/user/order/metodepembayaran');
    }

    public function svorder()
    {
        // Ambil data dri form
        $metodepembayaran = $this->request->getPost('pembayaran');

        // pelanggan
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $telepon = $this->request->getPost('telepon');


        // Simpan ke database
        $orderModel = new pelangganModel;
        $orderModel->save([
            'nama' => $nama,
            'telepon' => $telepon,
        ]);

        return view('user/order/metodepembayaran');
    }

    function simpanpesanan()
    {
        $title = $this->request->getpost('paket');
        dd($title);
    }

    public function submit()
    {
        // Terima data dari form pemesanan
        $nama = $this->request->getPost('nama');
        $alamat = $this->request->getPost('alamat');
        $telepon = $this->request->getPost('telepon');
        $pembayaran = $this->request->getPost('pembayaran');
        // dd($alamat, $telepon, $pembayaran);

        // Hitung total harga
        $jumlah_produk = 4;
        $harga_produk = 100000; // contoh harga produk
        $total_harga = $jumlah_produk * $harga_produk;
        // Simpan data ke dalam database atau melakukan hal lain yang diperlukan

        // Tampilkan detail pemesanan ke div yang sudah dibuat
        $data['nama'] = $nama;
        $data['alamat'] = $alamat;
        $data['telepon'] = $telepon;
        $data['pembayaran'] = $pembayaran;
        $data['total_harga'] = $total_harga;

        return view('/user/order/metodepembayaran', $data);
    }
}
