<?php

namespace App\Controllers;

use App\Models\MatkulModel;
use CodeIgniter\Controller;

class Matkul extends Controller
{
  public function __construct()
  {
    $this->matkul = new MatkulModel();
  }

  public function index()
  {
    $data['title'] = 'Halaman Matkul BINUS';
    $data['matkul'] = $this->matkul->getMatkul();
    return view('matkul/index', $data);
  }

  public function tambah()
  {
    $data['title'] = 'Tambah Data Mata Kuliah | BINUS';
    return view('matkul/tambah', $data);
  }

  public function store()
  {
    // ambil value dari form dengan method post
    $nm_matkul = $this->request->getPost('nm_matkul');
    $ruang_matkul = $this->request->getPost('ruang_matkul');
    $dosen_matkul = $this->request->getPost('dosen_matkul');

    // membuat array collection yang disiapkan untuk insert ke database
    $data = [
      'nm_matkul' =>   $nm_matkul,
      'ruang_matkul' => $ruang_matkul,
      'dosen_matkul' => $dosen_matkul
    ];

    $simpan = $this->matkul->insert_matkul($data);

    // validasi simpan
    if ($simpan) {
      // deklarasikan session flashdata dengna tipe success 
      session()->setFlashdata('success', 'Tambah matkul successfully');
      // redirect halaman product 
      return redirect()->to(base_url('matkul'));
    }
  }

  public function ubah($id_matkul)
  {
    $data['title'] = 'Ubah Data matkul | BINUS';
    $data['matkul'] = $this->matkul->getMatkul($id_matkul);
    return view('matkul/ubah', $data);
  }

  public function update($id_matkul)
  {
    $nm_matkul = $this->request->getPost('nm_matkul');
    $ruang_matkul = $this->request->getPost('ruang_matkul');
    $dosen_matkul = $this->request->getPost('dosen_matkul');

    $data = [
      'nm_matkul' => $nm_matkul,
      'ruang_matkul' => $ruang_matkul,
      'dosen_matkul' => $dosen_matkul
    ];
    $ubah = $this->matkul->update_matkul($data, $id_matkul);

    if ($ubah) {
      // deklarasikan session flashdata dengan tipe success 
      session()->setFlashdata('info', 'Ubah Mata Kuliah successfully');
      // redirect halaman product 
      return redirect()->to(base_url('matkul'));
    }
  }
}
