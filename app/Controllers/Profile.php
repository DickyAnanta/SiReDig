<?php

namespace App\Controllers;

use App\Models\profileModel;
use CodeIgniter\Encryption\Exceptions\EncryptionException;

class Profile extends BaseController
{
  protected $profileModel;

  public function __construct()
  {
    $this->profileModel = new profileModel();
  }

  public function index($alert = '')
  {
    $datas = [
      "select" => "id, user_id, nama, kelamin, tanggal_lahir, telepon, alamat",
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
    $ret = $this->profileModel->profile(0, $datas, "get");
    if (!empty($alert['alert'])) {
      $ret['alert'] = $alert['alert'];
    }
    return view('profile/profile_view', $ret);
  }

  public function delete($id)
  {
    $ret = [];
    $datas = [
      "select" => "id, user_id, nama, kelamin, tanggal_lahir, telepon, alamat",
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
      $data = $this->profileModel->profile($id, $datas, "delete");
      if ($data) {
        $ret['alert'] = [
          'title' => 'Succsess',
          'type' => 'success',
          'message' => 'Data berhasil dihapus',
          'cobtn' => false,
          'redirect' => true,
          'redirect_to' => 'profile/index'
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
      $exists = $this->profileModel->exists($dt_post['nama']);
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
          $sv_data = @$this->profileModel->profile(0, $dt_post, "post");
          if ($sv_data['response']) {
            $ret['alert'] = [
              'title' => 'Success',
              'type' => 'success',
              'message' => 'Data berhasil ditambahkan',
              'cobtn' => false,
              'redirect' => true,
              'redirect_to' => 'profile/index'
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
          $sv_data = $this->profileModel->profile($id, $dt_post, "patch");
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
      $data = $this->profileModel->detailed($id);
    }

    if (empty($data)) {
      if (@$ret['alert']['type'] != 'success') {
        $ret['data'] = @$dt_post;
      }
    } else {
      $ret['data'] = @$data;
    }

    return view('/profile/editprofile_view', $ret);
  }
}
