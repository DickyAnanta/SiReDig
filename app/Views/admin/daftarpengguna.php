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
          <a class="btn" href="formuser.php"><button type="button" class="btn btn-block btn-sm"><i class="fa fa-plus" aria-hidden="true"></i>Tambah User</button></a>
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
                      <th>Id</th>
                    </div>
                    <div class="col">
                      <th>Username</th>
                    </div>
                    <div class="col">
                      <th>Gender</th>
                    </div>
                    <div class="col">
                      <th>Gmail</th>
                    </div>
                    <div class="col">
                      <th>Telephone</th>
                    </div>
                    <div class="col">
                      <th>Address</th>
                    </div>
                    <div class="col">
                      <th>Status</th>
                    </div>
                    <div class="col">
                      <th>Action</th>
                    </div>
                  </div>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>3121</td>
                  <td>Aril Ivan Ta</td>
                  <td>Laki-Laki</td>
                  <td>ivanta788@gmail.com</td>
                  <td>081231274695</td>
                  <td>Bangsri Jepara</td>
                  <td>Customer</td>
                  <td><button type="button" id="delete" class="btn btn-xs" onclick="">Delete</button>
                    <a href="menu.php" class="btn btn-xs">Edit</a>
                  </td>
                </tr>

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