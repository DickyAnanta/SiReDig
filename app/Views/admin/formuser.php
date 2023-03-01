<?= $this->extend('Template/admin/template.php') ?>

<?= $this->Section('content') ?>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
  <div class="container">
    <a href="#" class="navbar-brand">
      <img src="../img/loogo.png" alt="AdminLTE Logo" class="brand-image" style="opacity: .8">
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">

      <!-- Right navbar links -->
      <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index_admin.php" class="bar">Beranda</a>
          </li>
          <li class="nav-item">
            <a href="menu_admin.php" class="bar ml-5">Menu</a>
          </li>
          <li class="nav-item">
            <a href="order_admin.php" class="bar ml-5">Order</a>
          </li>
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="bar ml-5 dropdown-toggle">Admin</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="daftarpengguna.php" class="dropdown-item">List User</a></li>
              <li><a href="formuser.php" class="dropdown-item">Form User</a></li>

              <li class="dropdown-divider"></li>

              <li><a href="daftarmenu_view.php" class="dropdown-item">List Menu</a></li>
              <li><a href="formmenu.php" class="dropdown-item">Form Menu</a></li>

            </ul>
          </li>
          <li class="nav-item">
            <a href="../index.php" class="masuk ml-5">Keluar</a>
          </li>
        </ul>
    </div>
</nav>
<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-3 mt-3 justify-content-end">
        <div class="col">
          <h3>Form User</h3>
        </div>
        <div class="col-auto">
          <a class="btn" href="index.php"><button type="button" class="btn btn-block btn-sm"><i class="fa fa-list" aria-hidden="true"></i>List User</button></a>
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
          <form>
            <div class="row">
              <div class="col-sm-4 asik">
                <!-- text input -->
                <div class="form-group">
                  <label>Id</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
              </div>
              <div class="col-sm-4 asik">
                <div class="form-group">
                  <label>Username</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
              </div>
              <div class="col-sm-4 ">
                <!-- radio -->
                <div class="form-group">
                  <label>Gender</label>
                  <div class="form-check mt-2">
                    <input class="form-check-input" type="radio" name="radio1">
                    <label class="form-check-label mr-4">Laki-Laki</label>
                    <input class="form-check-input" type="radio" name="radio1" checked>
                    <label class="form-check-label">Perempuan</label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 asik">
                <!-- text input -->
                <div class="form-group">
                  <label>Gmail</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
              </div>
              <div class="col-sm-6 asik">
                <div class="form-group">
                  <label>Telephone</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6 asik">
                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" rows="2" placeholder="Enter ..."></textarea>
                </div>
              </div>
              <div class="col-sm-6 asik">
                <div class="form-group">
                  <label>Status</label>
                  <input type="text" class="form-control" placeholder="Enter ...">
                </div>
              </div>
            </div>
            <div class="row tombolform">
              <div class="col-sm-1">
                <td>
                  <a href="" class="btn btn-success btn-sm">Tambah</a>
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