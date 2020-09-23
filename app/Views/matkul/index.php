<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 mb-5 text-center">
  <h4>Tampilan Mata Kuliah BINUS</h4>
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
  <a href="<?= base_url('matkul/tambah'); ?>" class="btn btn-success float-left mb-3">Tambah Mata Kuliah</a>
  <div class="table-responsive mt-5 mb-5 text-center rounded-lg">
    <table class="table table-sm table-bordered table-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Ruangan</th>
          <th scope="col">Dosen</th>
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($matkul as $key => $data) : ?>
          <tr>
            <th scope="row"><?= $key + 1; ?></th>
            <td><?= $data['nm_matkul']; ?></td>
            <td><?= $data['ruang_matkul']; ?></td>
            <td><?= $data['dosen_matkul']; ?></td>
            <td>
              <div class="btn-group">
                <a href="<?= base_url('matkul/ubah/' . $data['nm_matkul']); ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i></a>
                <a href="<?= base_url('matkul/hapus/' . $data['nm_matkul']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus matkul 
                <?= $data['nm_matkul'] ?> ini ?')"><i class="fas fa-trash-alt"></i></a>
              </div>
            </td>
  </div>
</div>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<?= $this->endSection(); ?>