<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5 mb-5">
  <h4>Form Tambah Data Mata Kuliah</h4>
  <hr>
  <form action="<?= base_url('matkul/store'); ?>" method="post">

    <div class="form-group">
      <label for="nm_matkul">Nama Mata Kuliah</label>
      <input type="text" name="nm_matkul" class="form-control" placeholder="Nama Mata Kuliah" id="nm_matkul" required>
    </div>

    <div class="form-group">
      <label for="ruang_matkul">Ruangan</label>
      <input type="text" name="ruang_matkul" class="form-control" id="ruang_matkul" placeholder="Ruangan">
    </div>

    <div class="form-group">
      <label for="dosen_matkul">Dosen Matkul</label>
      <textarea name="dosen_matkul" class="form-control" placeholder="Dosen Mata Kuliah" id="dosen_matkul"></textarea>
    </div>

    <div class="form-group">
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
  </form>
</div>

<?= $this->endSection(); ?>