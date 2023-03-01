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

<div class="content mt-5">
    <div class="container">
        <div class="container order">
            <i class="fas fa-arrow-left"></i>
            <div class="row">
                <div class="col-12">
                    <h2>Order</h2>
                    <span>Menu Pilihanmu</span>
                </div>
                <div class="col-4">

                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>