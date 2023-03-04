<?= $this->extend('Template/admin/template.php') ?>

<?= $this->Section('content') ?>

<div class="container mt-5">
    <h1>User</h1>
    <form action="" method="post">
        <div class="row mb-3">
            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" name="nama" value="<?= @$data['nama'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" value="<?= @$data['username'] ?>">
            </div>
        </div>
        <?php if (!empty($data['password'])) : ?>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                    <input type="hidden" class="form-control" id="password" name="password" value="<?= @$data['password'] ?>">
                </div>
            </div>
        <?php else : ?>
            <div class="row mb-3">
                <label for="password" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" value="<?= @$data['password'] ?>">
                </div>
            </div>
        <?php endif; ?>


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
                <input type="text" class="form-control" id="telepon" name="telepon" value="<?= @$data['telepon'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email" name="email" value="<?= @$data['email'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= @$data['alamat'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="status" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="status" name="status" value="<?= @$data['status'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="role" class="col-sm-2 col-form-label">Role</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="role" name="role" value="<?= @$data['role'] ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-sm">Simpan</button>
    </form>
</div>


<?= $this->endSection() ?>