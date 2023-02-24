<?php

namespace App\Models;

use CodeIgniter\Model;

class loginModel extends Model
{
  protected $table = 'user';
  protected $primary_column = 'username';
  protected $allowedFields = ['username', 'password'];
}
