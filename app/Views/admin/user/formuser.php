<?= $this->extend('Template/admin/template.php') ?>

<?= $this->Section('content') ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-3 mt-3 justify-content-end">
        <div class="col">
          <h3>Tabel User</h3>
        </div>
        <div class="col-auto">
          <a class="btn" href="/user"><button type="button" class="btn btn-block btn-sm"><i class="fa fa-list" aria-hidden="true"></i>List User</button></a>
        </div>
      </div>

    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container">
      <div class="">
        <!-- /.card-header -->
        <div class="card-body formuser">
          <form action="" method="post">
            <div class="row">
              <div class="col-sm-6 asik">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" class="form-control" placeholder="Enter ..." id="nama" name="nama" value="<?= @$data['nama'] ?>">
                </div>
              </div>
              <div class="col-sm-6 asik">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Enter ..." id="username" name="username" value="<?= @$data['username'] ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 asik">
                <!-- text input -->
                <div class="form-group">
                  <label class="form-label">Gender</label>
                  <div class="form-check mt-2">
                    <!-- condition !kelamin -->
                    <select name="kelamin" id="kelamin" class="form-select">
                      <option value="<?php if (!empty($data)) : ?>
                        <?= @$data['kelamin'] ?>
                      <?php else : ?>
                        <?= "laki-laki"; ?>
                      <?php endif; ?>">Laki-Laki</option>
                      <option value="<?php if (!empty($data)) : ?>
                        <?= @$data['kelamin'] ?>
                      <?php else : ?>
                        <?= "perempuan"; ?>
                      <?php endif; ?>">Perempuan</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 asik">
                <div class="form-group">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control" placeholder="Enter ..." id="tanggal_lahir" name="tanggal_lahir" value="<?= @$data['tanggal_lahir'] ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <?php if (!empty($data)) : ?>
                <div class="col-sm-6 asik">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Password</label>
                    <input type="hidden" class="form-control" id="password" name="password" placeholder="Enter ..." value="<?= @$data['password'] ?>">
                  </div>
                </div>
              <?php else : ?>
                <div class="col-sm-6 asik">
                  <!-- text input -->
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter ..." value="<?= @$data['password'] ?>">
                  </div>
                </div>
              <?php endif; ?>
              <div class="col-sm-6 asik">
                <div class="form-group">
                  <label>Email</label>
                  <input type="email" class="form-control" placeholder="Enter ..." id="email" name="email" value="<?= @$data['email'] ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 asik">
                <div class="form-group">
                  <label>Telepon</label>
                  <input type="number" class="form-control" placeholder="Enter ..." id="telepon" name="telepon" value="<?= @$data['telepon'] ?>">
                </div>
              </div>
              <div class="col-sm-6 asik">
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" placeholder="Enter ..." id="alamat" name="alamat" value="<?= @$data['alamat'] ?>">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 asik">
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" class="form-control" placeholder="Enter ..." id="status" name="status" value="<?= @$data['status'] ?>">
                </div>
              </div>
              <div class="col-sm-6 asik">
                <div class="form-group">
                  <label>Role</label>
                  <input type="text" class="form-control" placeholder="Enter ..." id="role" name="role" value="<?= @$data['role'] ?>">
                </div>
              </div>
            </div>

            <div class="row tombolform">
              <div class="col-sm-1">
                <td>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                </td>
              </div>
            </div>
          </form>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?= $this->endSection() ?>