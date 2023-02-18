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

    public function index()
    {
        $datas = [
            "select" => "id, username, password, email, status, role",
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
        $ret = $this->userModel->user(0, $datas, "get");
        return view('/user/user_view', $ret);
    }

    public function edit($id = '')
    {
        $ret = [];
        $dt_post = @$this->request->getPost();
        if (!empty($dt_post)) {
            $exists = $this->userModel->exists($dt_post['username']);
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
                    $sv_data = @$this->userModel->user(0, $dt_post, "post");
                    if ($sv_data['response']) {
                        $ret['alert'] = [
                            'title' => 'Success',
                            'type' => 'success',
                            'message' => 'Data berhasil ditambahkan',
                            'cobtn' => false,
                            'redirect' => true,
                            'redirect_to' => 'user/user_view'
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
                    $sv_data = $this->userModel->user($id, $dt_post, "patch");
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
            $data = $this->userModel->detailed($id);
        }

        if (empty($data)) {
            if (@$ret['alert']['type'] != 'success') {
                $ret['data'] = @$dt_post;
            }
        } else {
            $ret['data'] = @$data;
        }

        return view('/user/edituser_view', $ret);
    }
}
