<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Siredig</title>

  <!-- base url -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="/assets/plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="/assets/js/sweetalert2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/adminlte/css/adminlte.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <!-- css saya -->
  <link rel="stylesheet" href="/css/style.css">

  <?php
  $request = \Config\Services::request();
  $link1 = $request->uri->getSegment(1);
  $rootDir = dirname(__FILE__);
  if (file_exists(str_replace("\\", "/", $rootDir) . "/css/" . $link1 . ".php")) {
    echo view('template/css/' . $link1);
  }
  ?>
</head>

<body class="hold-transition layout-top-nav">
  <div id="alert-data" title="<?= @$alert["title"]; ?>" type="<?= @$alert["type"]; ?>" message="<?= @$alert["message"]; ?>" cobtn="<?= @$alert["cobtn"]; ?>" redirect="<?= @$alert["redirect"]; ?>" redirect-to="<?= @$alert["redirect_to"]; ?>"></div>
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
          <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle">Admin</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="#" class="dropdown-item">List User</a></li>
              <li><a href="#" class="dropdown-item">Form User</a></li>

              <li class="dropdown-divider"></li>

              <li><a href="#" class="dropdown-item">List Menu</a></li>
              <li><a href="#" class="dropdown-item">Form Menu</a></li>
            </ul>
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
    <?= $this->renderSection('content') ?>

  </tbody>

  <script src="/assets/plugins/jquery/jquery.min.js"></script>
  <!-- sweetalert -->
  <script src="/assets/js/sweetalert2.all.min.js"></script>
  <!-- sweetalert -->
  <!-- tilt -->
  <script src="/assets/js/vanilla-tilt.min.js/"></script>
  <!-- <script type="text/javascript" src="/assets/vanilla-tilt.min.js"></script> -->
  <!-- jQuery -->
  <!-- Bootstrap 4 -->
  <script src="/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- aos -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script type="text/javascript">
    AOS.init();
  </script>
  <script src="/assets/declar.js"></script>
  <!-- AdminLTE App -->
  <script src="/assets/adminlte/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="/assets/adminlte/js/demo.js"></script>
  <script type="text/javascript" src="/assets/js/alert.js"></script>

  <?php
  if (file_exists(str_replace("\\", "/", $rootDir) . "/js/" . $link1 . ".php")) {
    echo view('template/css/' . $link1);
  }
  ?>
</body>

</html>

</html>