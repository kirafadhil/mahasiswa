<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
  protected $table = 'mahasiswa';
  protected $primaryKey = 'id_mhs';
  public function getMhs($id_mhs = false)
  {
    if ($id_mhs === false) {
      return $this->table('mahasiswas')->get()->getResultArray();
    } else {
      return $this->table('mahasiswas')
        ->where('id_mhs', $id_mhs)
        ->get()
        ->getRowArray();
    }
  }
  // insert data ke database 
  public function insert_mahasiswa($data)
  {
    return $this->db->table($this->table)->insert($data);
  }

  public function update_mahasiswa($data, $id_mhs)
  {
    return $this->db->table($this->table)->update($data, ['id_mhs' => $id_mhs]);
  }
}
