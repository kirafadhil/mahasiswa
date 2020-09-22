<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 mb-5 text-center">
  <div class="row">
    <div class="col">
      <h3>Tampilan Mahasiswa BINUS</h3>
      <table class="table table-sm table-dark">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">NIM</th>
            <th scope="col">Jurusan</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($mahasiswa as $key => $data) : ?>
            <tr>
              <th scope="row"><?= $key + 1; ?></th>
              <td><?= $data['nm_mhs']; ?></td>
              <td><?= $data['nim_mhs']; ?></td>
              <td><?= $data['jurusan']; ?></td>
              <td><a href="" class="btn-sm btn-warning">Edit</a><a href="" class="btn-sm btn-danger">Hapus</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
      <?= $this->endSection(); ?>