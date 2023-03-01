<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Top Navigation</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../dist/css/adminlte.min.css">
    <!-- aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- css saya -->
    <link rel="stylesheet" href="siredig.css">
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">


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
                                <a href="index.php" class="bar">Beranda</a>
                            </li>
                            <li class="nav-item">
                                <a href="menu.php" class="bar ml-5">Menu</a>
                            </li>
                            <li class="nav-item">
                                <a href="order.php" class="bar ml-5">Order</a>
                            </li>
                            <li class="nav-item">
                                <a href="masuk.php" class="masuk ml-5">Masuk</a>
                            </li>
                        </ul>
                </div>
        </nav>
        <!-- /.navbar -->


        <div class="content mt-5">
            <div class="container">
                <div class="container maindua">
                    <a href="menu.php"><i class="fas fa-arrow-left"></i></a>
                    <div class="row">
                        <div class="col">
                            <img src="../img/burgerspesialview.png" alt="">
                        </div>
                        <div class="col-4">
                            <h2>Burger Special</h2>
                            <p>Ini merupakan varian yang paling diminati masyarakat Indonesia.</p>
                            <h3>Jumlah <span>-1+</span></h3>
                            <a href="order.php"><button>Order Sekarang</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- REQUIRED SCRIPTS -->
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