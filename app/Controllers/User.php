<?php

namespace App\Controllers;

use App\Models\userModel;
use CodeIgniter\Encryption\Exceptions\EncryptionException;

class User extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new userModel();
    }
}
