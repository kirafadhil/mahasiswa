<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
  protected $table = 'matkul';
  protected $primaryKey = 'id_maktul';
  public function getMatkul($id_matkul = false)
  {
    if ($id_matkul === false) {
      return $this->table('matkuls')->get()->getResultArray();
    } else {
      return $this->table('matkuls')
        ->where('id_matkul', $id_matkul)
        ->get()
        ->getRowArray();
    }
  }
  // insert data ke database 
  public function insert_matkul($data)
  {
    return $this->db->table($this->table)->insert($data);
  }

  public function update_matkul($data, $id_matkul)
  {
    return $this->db->table($this->table)->update($data, ['id_matkul' => $id_matkul]);
  }
}
