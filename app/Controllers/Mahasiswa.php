<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{
  public function __construct()
  {
    $this->mahasiswa = new MahasiswaModel();
  }

  public function index()
  {
    $data['title'] = 'Halaman Utama BINUS';
    $data['mahasiswa'] = $this->mahasiswa->getMhs();
    return view('mahasiswa/index', $data);
  }

  public function tambah()
  {
    $data['title'] = 'Tambah Data Mahasiswa | BINUS';
  }

  public function store()
  {
  }

  public function ubah()
  {
    $data['title'] = 'Ubah Data Mahasiswa | BINUS';
  }
}
