<?php

namespace App\Controllers;

class OrderUser extends BaseController
{
    public function index()
    {
        return view('/user/order/pilihmenu');
    }

    public function pilihmenu()
    {
        return view('/user/order/pilihmenu');
    }

    public function pembayaran()
    {
        return view('/user/order/metodepembayaran');
    }
}
