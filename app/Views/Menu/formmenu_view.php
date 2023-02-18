<?= $this->extend('Template/template.php') ?>

<?= $this->Section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper daftarmenu">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-3 mt-3 justify-content-end">
                <div class="col">
                    <h3>Tambah Menu</h3>
                </div>
                <div class="col-auto">
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 175px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-auto">
                    <a class="btn" href="index"><i class="fa fa-list mr-2" aria-hidden="true"></i>list Menu</a>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content menu">
        <div class="container">
            <div class="row">
                <div class="col-12">

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Tambah Menu</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-sm-4 gambar">
                                        <div class="form-group-sx">
                                            <label>Gambar</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="gambar" value="<?= @$data['gambar'] ?>">
                                                <label class="custom-file-label" for="gambar">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 asik">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Nama Menu</label>
                                            <input type="text" class="form-control" id="title" name="title" value="<?= @$data['title'] ?>" placeholder="Masukkan nama menu">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 asik">
                                        <div class="form-group">
                                            <label>Deskripsi</label>
                                            <textarea class="form-control" rows="1" placeholder="Masukkan Deskripsi" id="deskripsi" name="deskripsi" value="<?= @$data['deskripsi'] ?>"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 asik">
                                        <!-- text input -->
                                        <div class="form-group">
                                            <label>Tipe</label>
                                            <input type="text" class="form-control" id="tipe" name="tipe" value="<?= @$data['tipe'] ?>" placeholder="Masukkan Tipe">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 asik">
                                        <div class="form-group">
                                            <label>Harga</label>
                                            <input type="number" class="form-control" id="harga" name="harga" value="<?= @$data['harga'] ?>" placeholder="Masukkan Harga">
                                        </div>
                                    </div>
                                    <div class="col-sm-4 asik">
                                        <div class="form-group">
                                            <label>Stok</label>
                                            <input type="number" class="form-control" id="stok" name="stok" value="<?= @$data['stok'] ?>" placeholder="Masukkan Stok">
                                        </div>
                                    </div>
                                </div>
                                <div class="row tombolform">
                                    <div class="col-sm-2">
                                        <td>
                                            <button type="submit" class="btn btn-success btn-sm">Simpan</button>
                                        </td>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
</div>


<?= $this->endSection() ?>