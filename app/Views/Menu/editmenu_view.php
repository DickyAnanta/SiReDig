<?= $this->extend('Template/template.php') ?>

<?= $this->Section('content') ?>

<div class="container mt-5">
    <h1>Menu</h1>
    <form action="" method="post">
        <div class="row mb-3">
            <label for="title" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" name="title" value="<?= @$data['title'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= @$data['deskripsi'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="gambar" name="gambar" value="<?= @$data['gambar'] ?>" required>
            </div>
        </div>
        <div class="row mb-3">
            <label for="tipe" class="col-sm-2 col-form-label">Tipe</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="tipe" name="tipe" value="<?= @$data['tipe'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="harga" class="col-sm-2 col-form-label">Harga</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="harga" name="harga" value="<?= @$data['harga'] ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="stok" name="stok" value="<?= @$data['stok'] ?>">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

<?= $this->endSection() ?>