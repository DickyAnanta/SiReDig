<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AdminLTE 3 | Top Navigation</title>

  <!-- base url -->


  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/dist/css/adminlte.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- css saya -->
  <link rel="stylesheet" href="/css/style.css">
</head>

<body class="hold-transition layout-top-nav">
  <div class="wrapper">
    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
      <div class="container">
        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
        </div>
        <!-- Right navbar links -->
        <ul class="order-1 order-md-1 navbar-nav navbar-no-expand ml-auto">
          <li class="float-left">
            <a href="index3.html" class="navbar-brand">
              <img src="/assets/img/logo.png" alt="SIREDIG" class="">
            </a>
          </li>
        </ul>
        <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
          <li class="nav-item NB">
            <a href="index.php" class="teks">List Pengguna</a>
          </li>
          <li class="nav-item NB">
            <a href="menu.php" class="teks">Tambah Pengguna</a>
          </li>
          <li class="nav-item NB">
            <a href="daftarmenu.php" class="teks">List Menu</a>
          </li>
          <li class="nav-item NB">
            <a href="order.php" class="teks">Tambah Menu</a>
          </li>
          <li class="nav-item login ml-4">
            <a class="btn btn-sm masuk" href="../index.php" role="button">Keluar</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /.navbar -->
  </div>
  <tbody>
    <?php
    if (!empty($alert)) {
      echo '<pre>';
      print_r($alert);
      echo '</pre>';
    }
    ?>

    <?= $this->renderSection('content') ?>

  </tbody>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- sweetalert -->
  <script src="js/sweetalert2.all.min.js"></script>
  <!-- tilt -->
  <script type="text/javascript" src="vanilla-tilt.min.js"></script>
  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>