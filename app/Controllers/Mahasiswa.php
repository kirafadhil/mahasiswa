<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use CodeIgniter\Controller;

class Mahasiswa extends Controller
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

  public function tentang()
  {
    $data['title'] = 'Tentang Kami';
    return view('mahasiswa/tentang', $data);
  }

  public function tambah()
  {
    $data['title'] = 'Tambah Data Mahasiswa | BINUS';
    return view('mahasiswa/tambah', $data);
  }

  public function store()
  {
    // ambil value dari form dengan method post
    $nm_mhs = $this->request->getPost('nm_mhs');
    $nim_mhs = $this->request->getPost('nim_mhs');
    $jurusan = $this->request->getPost('jurusan');

    // membuat array collection yang disiapkan untuk insert ke database
    $data = [
      'nm_mhs' =>   $nm_mhs,
      'nim_mhs' => $nim_mhs,
      'jurusan' => $jurusan
    ];

    $simpan = $this->mahasiswa->insert_mahasiswa($data);

    // validasi simpan
    if ($simpan) {
      // deklarasikan session flashdata dengna tipe success 
      session()->setFlashdata('success', 'Tambah Mahasiswa successfully');
      // redirect halaman product 
      return redirect()->to(base_url('mahasiswa'));
    }
  }

  public function ubah($id_mhs)
  {
    $data['title'] = 'Ubah Data Mahasiswa | BINUS';
    $data['mahasiswa'] = $this->mahasiswa->getMhs($id_mhs);
    return view('mahasiswa/ubah', $data);
  }

  public function update($id_mhs)
  {
    $nm_mhs = $this->request->getPost('nm_mhs');
    $nim_mhs = $this->request->getPost('nim_mhs');
    $jurusan = $this->request->getPost('jurusan');

    $data = [
      'nm_mhs' => $nm_mhs,
      'nim_mhs' => $nim_mhs,
      'jurusan' => $jurusan
    ];
    $ubah = $this->mahasiswa->update_mahasiswa($data, $id_mhs);

    if ($ubah) {
      // deklarasikan session flashdata dengan tipe success 
      session()->setFlashdata('info', 'Ubah Mahasiswa successfully');
      // redirect halaman product 
      return redirect()->to(base_url('mahasiswa'));
    }
  }
}
