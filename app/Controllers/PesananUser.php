<?php

namespace App\Controllers;

class PesananUser extends BaseController
{
    public function index()
    {
        return view('/user/pesanan/pesanan');
    }
}
