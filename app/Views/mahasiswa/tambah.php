<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-5 mb-5">
  <h4>Form Tambah Data Mahasiswa</h4>
  <hr>
  <form action="<?= base_url('mahasiswa/store'); ?>" method="post">

    <div class="form-group">
      <label for="nm_mhs">Nama Mahasiswa</label>
      <input type="text" name="nm_mhs" class="form-control" placeholder="Nama Mahasiswa" id="nm_mhs" required>
    </div>

    <div class="form-group">
      <label for="nim_mhs">NIM Mahasiswa</label>
      <input type="text" name="nim_mhs" class="form-control" id="nim_mhs" placeholder="NIM Mahasiswa">
    </div>

    <div class="form-group">
      <label for="jurusan">Jurusan</label>
      <textarea name="jurusan" class="form-control" placeholder="Jurusan" id="jurusan"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
</div>


<?= $this->endSection(); ?>