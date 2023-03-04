<?php

namespace App\Models;

use CodeIgniter\Model;

class menuModel extends Model
{
  protected $table1      = 'menu';
  protected $primary_column = 'title';

  protected function whereclause_system()
  {
    $ret = '';
    return $ret;
  }

  public function exists($item = 0)
  {
    $ret = false;
    $query = "SELECT * FROM " . $this->table1;
    if (empty($this->primary_column)) {
      return "primary column be not empty";
    }
    $query .= " WHERE $this->primary_column = '" . $item . "'";
    $data = $this->db->query($query)->getRowArray();
    if (!empty($data)) {
      $ret = $data;
    }
    return $ret;
  }

  public function detailed($id)
  {
    $ret = false;
    if (!empty($id)) {
      $query = "SELECT * FROM " . $this->table1;
      $query .= " WHERE id = " . decrypt_url($id);
      $data = $this->db->query($query)->getRowArray();
      if (!empty($data)) {
        $ret = $data;
      }
      return $ret;
    }
  }

  public function menu($id = 0, $datas = "", $type = "")
  {
    $ret = false;
    if (empty($type)) {
      $type = $_SERVER["REQUEST_METHOD"];
    }

    if (empty($datas)) {
      $datas = $this->request->getPost('PropertyName');
    }

    if (strtoupper($type) === "POST") {
      $colum = "";
      $values = "";
      foreach ($datas as $key => $value) {
        if ($value === 0 || !empty($value)) {
          $colum .= $key . " , ";
          $values .= "'" . $value . "' , ";
        }
      }

      $colum = "(" . substr($colum, 0, -2) . ")";
      $values = "(" . substr($values, 0, -2) . ")";

      $sql = "INSERT INTO " . $this->table1 . " " . $colum . "VALUE" . $values;
      if ($this->db->query($sql)) {
        $ret = [
          "response" => true,
          "response_message" => "Sucses To Insert Data."
        ];
      } else {
        $ret = [
          "response" => false,
          "response_message" => "Failde to insert data. (" . $this->db->error()["message"] . ") . Query : (" . $sql . ")"
        ];
      }
      // dd($type);
    } elseif (strtoupper($type) === "PUT") {
      if (!empty($id)) {
        $id = decrypt_url($id);
        $patch_column = "";
        foreach ($datas as $key => $value) {
          if ($value === 0 || !empty($value)) {
            $patch_column .= $key . " =' " . $value . "' , ";
          }
        }

        $sql = "INSERT INTO" . $this->table1 . "SET" . substr($patch_column, 0, 2) . "WHERE id = " . $id;
        if ($this->db->query($sql)) {
          $ret = [
            "response" => true,
            "response_message" => "Sucses to update data"
          ];
        } else {
          $ret = [
            "response" => false,
            "response_message" => "Failed to insert data. (" . $this->db->error()["message"] . "). Query : (" . $sql . ")"
          ];
        }
      } else {
        $ret = [
          "response" => false,
          "response_message" => "ID not empty"
        ];
      }
    } elseif (strtoupper($type) === "PATCH") {
      if (!empty($id)) {
        $id = decrypt_url($id);
        $patch_column = "";
        foreach ($datas as $key => $value) {
          if ($value === 0 || !empty($value)) {
            $patch_column .= $key . " = '" . $value . "', ";
          }
        }
        $sql = "UPDATE " . $this->table1 . " SET " . substr($patch_column, 0, -2) . " WHERE id = " . $id;
        if ($this->db->query($sql)) {
          $ret = [
            "response" => true,
            "response_message" => "Sucses to set data"
          ];
        } else {
          [
            "response" => false,
            "response_message" => "Failed to insert data. (" . $this->db->error()["message"] . "). Query : (" . $sql . ")"
          ];
        }
      }
    } elseif (strtoupper($type) === "GET") {
      // required datas
      // -!select
      // !getreturn
      // -?order_by [!column !order (ASC, DSC)]
      // -?limit [!lenght & !start]
      // -?whereclause

      $query = '';
      $query .= "SELECT " . @$datas["select"] . " FROM " . $this->table1;
      if (!empty($this->whereclause_system())) {
        $query .= " WHERE ";
      }
      $query .= $this->whereclause_system();

      if (@$datas["getreturn"] == "data") {
        $all_record = $this->db->query($query)->getNumRows();
      }
      // dd($datas);

      if (!empty($datas["whereclause"])) {
        if (empty($this->whereclause_system())) {
          $query .= ' WHERE ' . $datas["whereclause"];
        } else {
          $query .= ' AND (' . $datas["whereclause"] . ')';
        }
      }

      if (!empty($datas["order_by"]["column"])) {
        $query = ' ORDER BY ' . $datas["order_by"]["column"] . ' ' . $datas["order_by"]["order"];
      }

      if (@$datas["getreturn"] == "data") {
        $filterd = $this->db->query($query)->getNumRows();
      }

      if (@$datas["limit"]["lenght"] > 0) {
        $query .= ' LIMIT ' . $datas["limit"]["lenght"] . ' OFSET ' . $datas["limit"]["start"];
      } elseif (@$datas["limit"]["lenght"] < 0) {
        $query .= '';
      } else {
        $query .= ' LIMIT 10';
      }

      if (@$datas["getreturn"] == "query") {
        $ret = $query;
      } elseif (@$datas["getreturn"] == "data") {
        $ret = [
          "data" => $this->db->query($query)->getResultArray(),
          "all_record" => $all_record,
          "filtered_record" => $filterd
        ];
      }
    } elseif (strtoupper($type) === "DELETE") {
      $query = '';
      // if ($datas == 1) {
      //   $query .= "UPDATE" . $this->table1 . "SET row_status = 2, updated_by = " . 1 . "WHERE id =" . decrypt_url($id);
      // } elseif ($datas == 2) {
      //   $query .= "DELETE FROM" . $this->table1 . "WHERE id = " . decrypt_url($id) ;
      // }
      $query .=   " DELETE FROM " . $this->table1 . " WHERE id = " . decrypt_url($id);

      if ($this->db->query($query)) {
        $ret = true;
      }
    }
    return $ret;
  }

  public function next_previous_edit()
  {
    $ret = [];
    $query_next = "";
    $next = false;
    $query_prev = "";
    $prev = false;

    if (!empty($id)) {
      $id = decrypt_url($id);
      $query_next = "SELECT" . $this->table1 . " id.FROM " . $this->table1 . "WHERE" . $this;
    }
  }
}
