<?php

namespace App\Controllers;

<<<<<<< HEAD
use App\Controllers\BaseController;
use App\Models\userModel;

class Login extends BaseController
{
  public function index()
  {
    return view('login.php');
  }

  public function Login()
  {
    $username = $this->request->getVar('username');
    dd($username);
    $password = $this->request->getVar('password');

    $user = new userModel();
    $data = $user->where('username', $username)->first();
    dd($data);
    if ($data) {
      $session = session();
      if (password_verify($password, $data['password'])) {
        //create session
        $login = [
          'islogin' => true,
          'username' => $data['username'],
          'name' => $data['name']
        ];
        $session->set($login);
        return redirect()->to('/home');
      } else {
        $session->setFlashdata('msg', 'Email/Password invalid');
        return redirect()->to('/login');
      }
    }
  }

  public function logout()
  {
    $session = session();
    $session->destroy();
    return redirect()->to('/login');
  }
=======
class Login extends BaseController
{
    public function index()
    {
        return view('/login/login_view');
    }
>>>>>>> 3f95e3b82e37b4e5eb95cda882480d1ca7fc6439
}
