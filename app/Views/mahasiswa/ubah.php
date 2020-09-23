<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class="container mt-5 mb-5">
  <h4>Form Ubah Data Mahasiswa</h4>
  <hr>
  <form action="<?= base_url('mahasiswa/update/' . $mahasiswa['id_mhs']); ?>" method="post">

    <div class="form-group">
      <label for="">Nama Mahasiswa</label>
      <input type="text" name="nm_mhs" value="<?= $mahasiswa['nm_mhs']; ?>" class="form-control" placeholder="Nama Mahasiswa">
    </div>

    <div class="form-group">
      <label for="nim_mhs">NIM Mahasiswa</label>
      <input type="text" name="nim_mhs" value="<?= $mahasiswa['nim_mhs']; ?>" class="form-control" id="nim_mhs" placeholder="NIM Mahasiswa">
    </div>

    <div class="form-group">
      <label for="">Jurusan</label>
      <textarea name="jurusan" class="form-control" placeholder="Jurusan"><?php echo $mahasiswa['jurusan']; ?> </textarea> </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update</button>
    </div>
  </form>
</div>
<?= $this->endSection(); ?>