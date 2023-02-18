<?= $this->extend('Template/template.php') ?>

<?= $this->Section('content') ?>

<div class="container mt-5">
    <h1>User</h1>
    <form action="" method="post">
        <div class="row mb-3">
            <label for="username" class="col-sm-2 col-form-label">Username</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="username" name="username" value="<?= @$data['username'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="password" name="password" value="<?= @$data['password'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="email" name="email" value="<?= @$data['email'] ?>">
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
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>


<?= $this->endSection() ?>