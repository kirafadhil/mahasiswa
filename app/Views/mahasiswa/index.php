<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 mb-5 text-center">
  <h4>Tampilan Mahasiswa BINUS</h4>
</div>
<div class="container">

  <?php
  if (!empty(session()->getFlashdata('success'))) : ?>
    <div class="alert alert-success">
      <?php echo session()->getFlashdata('success'); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty(session()->getFlashdata('info'))) : ?>

    <div class="alert alert-info">
      <?php echo session()->getFlashdata('info'); ?>
    </div>
  <?php endif; ?>

  <?php if (!empty(session()->getFlashdata('warning'))) : ?>
    <div class="alert alert-warning">
      <?php echo session()->getFlashdata('warning'); ?>
    </div>
  <?php endif; ?>

</div>

<div class="container">
  <a href="<?= base_url('mahasiswa/tambah'); ?>" class="btn btn-success float-left mb-3">Tambah Mahasiswa</a>
  <div class="table-responsive">
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
            <td>
              <div class="btn-group">
                <a href="<?= base_url('mahasiswa/ubah/' . $data['id_mhs']); ?>" class="btn-sm btn-warning">Ubah</a>
                <a href="<?= base_url('mahasiswa/hapus/' . $data['id_mhs']); ?>" class="btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa 
                <?= $data['nm_mhs'] ?> ini ?')">Hapus</a>
              </div>
            </td>
  </div>
</div>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<?= $this->endSection(); ?>