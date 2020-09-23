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
    $data['title'] = ['Halaman Matkul BINUS'];
    $data['matkul'] = $this->matkul->getMatkul();
    return view('matkul/index', $data);
  }
}
