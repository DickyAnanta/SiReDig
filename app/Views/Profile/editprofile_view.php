<?= $this->extend('Template/template.php') ?>

<?= $this->Section('content') ?>

<div class="container mt-5">
  <h1>User</h1>
  <form action="" method="post">
    <div class="row mb-3">
      <label for="user_id" class="col-sm-2 col-form-label">User_id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="user_id" name="user_id" value="<?= @$data['user_id'] ?>">
      </div>
    </div>
    <div class="row mb-3">
      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="nama" name="nama" value="<?= @$data['nama'] ?>">
      </div>
    </div>
    <div class="row mb-3">
      <label for="kelamin" class="col-sm-2 col-form-label">Kelamin</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="kelamin" name="kelamin" value="<?= @$data['kelamin'] ?>">
      </div>
    </div>
    <div class="row mb-3">
      <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="<?= @$data['tanggal_lahir'] ?>">
      </div>
    </div>
    <div class="row mb-3">
      <label for="telepon" class="col-sm-2 col-form-label">Telepon</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="telepon" name="telepon" value="<?= @$data['telepon'] ?>">
      </div>
    </div>
    <div class="row mb-3">
      <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="alamat" name="alamat" value="<?= @$data['alamat'] ?>">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
  </form>
</div>


<?= $this->endSection() ?>