<?php

namespace App\Models;

use CodeIgniter\Model;

class uploadModel extends Model
{
  protected $table = 'menu';

  public function getGambar()
  {
    return $this->findAll();
  }
  public function simpan_gambar($data)
  {
    $query = $this->db->table($this->table)->insert($data);
    return $query;
  }
}
