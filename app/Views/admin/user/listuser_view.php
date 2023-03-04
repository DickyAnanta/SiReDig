<?= $this->extend('Template/admin/template.php') ?>

<?= $this->Section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper daftarmenu">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-3 mt-3 justify-content-end">
        <div class="col">
          <h3>List User</h3>
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
          <a class="btn" href="/user/edit"><button type="button" class="btn btn-block btn-sm"><i class="fa fa-plus" aria-hidden="true"></i>Tambah User</button></a>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- <div class="card border-top-0"> -->
          <!-- /.card-header -->
          <div class="table-responsive p-1">
            <table class="table table-hover table-borderless table-striped text-nowrap">
              <thead>
                <tr>
                  <div class="row">
                    <div class="col">
                      <th>#</th>
                    </div>
                    <div class="col">
                      <th>Nama</th>
                    </div>
                    <div class="col">
                      <th>Username</th>
                    </div>
                    <div class="col">
                      <th>Kelamin</th>
                    </div>
                    <div class="col">
                      <th>Telepon</th>
                    </div>
                    <div class="col">
                      <th>Gmail</th>
                    </div>
                    <div class="col">
                      <th>Alamat</th>
                    </div>
                    <div class="col">
                      <th>Status</th>
                    </div>
                    <div class="col">
                      <th>Role</th>
                    </div>
                    <div class="col">
                      <th>Action</th>
                    </div>
                  </div>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($data as $key => $value) : ?>
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= @$value['nama'] ?></td>
                    <td><?= @$value['username'] ?></td>
                    <td><?= @$value['kelamin'] ?></td>
                    <td><?= @$value['telepon'] ?></td>
                    <td><?= @$value['email'] ?></td>
                    <td><?= @$value['alamat'] ?></td>
                    <td><?= @$value['status'] ?></td>
                    <td><?= @$value['role'] ?></td>
                    <td>
                      <a class="btn btn-xs" href="/user/edit/<?= encrypt_url($value['id']) ?>">Edit</a>
                      <a class="btn btn-xs" href="/user/delete/<?= encrypt_url($value['id']) ?>">Hapus</a>
                    </td>
                  </tr>
                <?php endforeach; ?>

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?= $this->endSection() ?>