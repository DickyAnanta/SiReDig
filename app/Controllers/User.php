<?php

namespace App\Controllers;

use App\Models\userModel;
use App\Models\profileModel;
use CodeIgniter\Encryption\Exceptions\EncryptionException;

class User extends BaseController
{
  protected $userModel;
  protected $profileModel;

  public function __construct()
  {
    $this->userModel = new userModel();
    $this->profileModel = new profileModel();
  }

  public function index($alert = '')
  {
    $datas = [
      "select" => "user.id, username, nama, password, email, kelamin, tanggal_lahir, telepon, alamat, status, role",
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
    if (!empty($alert['alert'])) {
      $ret['alert'] = $alert['alert'];
    }
    return view('/user/user_view', $ret);
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
      $data = $this->userModel->user($id, $datas, "delete");
      if ($data) {
        $ret['alert'] = [
          'title' => 'Succsess',
          'type' => 'success',
          'message' => 'Data berhasil dihapus',
          'cobtn' => false,
          'redirect' => true,
          'redirect_to' => 'user/index'
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
    // dd($id);
    $ret = [];
    $dt_post = @$this->request->getPost();
    // dd($dt_post);
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
          $password = password_hash($dt_post['password'], PASSWORD_DEFAULT);
          $data = [
            'username' => $dt_post['username'],
            'password' => $password,
            'email' => $dt_post['email'],
            'status' => 0,
            'role' => $dt_post['role']
          ];
          // dd($data);
          $sv_data = @$this->userModel->user(0, $data, "post");
          if ($sv_data['response']) {
            $data = [
              'user_id' => $sv_data['last_insert_id'],
              'nama' => $dt_post['nama'],
              'kelamin' => $dt_post['kelamin'],
              'tanggal_lahir' => $dt_post['tanggal_lahir'],
              'telepon' => $dt_post['telepon'],
              'alamat' => $dt_post['alamat']
            ];
            $sql2 = $this->profileModel->profile(0, $data, "post");
            $ret['alert'] = [
              'title' => 'Success',
              'type' => 'success',
              'message' => 'Data berhasil ditambahkan',
              'cobtn' => false,
              'redirect' => true,
              'redirect_to' => 'user/index'
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
        if (decrypt_url($id) == @$exists['id'] || ($exists == false)) {
          $data = [
            'username' => $dt_post['username'],
            'password' => $dt_post['password'],
            'email' => $dt_post['email'],
            'status' => 0,
            'role' => $dt_post['role']
          ];
          $sv_data2 = @$this->userModel->user($id, $data, "patch");
          // dd($sv_data2);
          if ($sv_data2['response']) {
            $data = [
              'nama' => $dt_post['nama'],
              'kelamin' => $dt_post['kelamin'],
              'tanggal_lahir' => $dt_post['tanggal_lahir'],
              'telepon' => $dt_post['telepon'],
              'alamat' => $dt_post['alamat']
            ];
            $sql2 = $this->profileModel->profile($id, $data, "patch");
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
