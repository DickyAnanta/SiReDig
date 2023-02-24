<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\loginModel;

class Login extends Controller
{
    protected $loginModel;
    public function __construct()
    {
        $this->loginModel = new loginModel();
    }
    public function index()
    {
        return view('/login/login_view');
    }

    public function auth($username = "", $password = "")
    {
        $session = session();
        $model = new loginModel();
        $username = $this->loginModel->request->getVar('username');
        $password = $this->loginModel->request->getVar('password');
        // dd($password);
        $data = $model->where('username', $username)->first();
        if ($data) {
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            // dd($verify_pass);
            if ($verify_pass) {
                $ses_data = [
                    'username'     => $data['username'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('/menu');
            } else {
                $session->setFlashdata('msg', 'Password salah');
                return redirect()->to('/login');
            }
        } else {
            $session->setFlashdata('msg', 'Username tidak ada');
            return redirect()->to('/login');
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/login');
    }
}
