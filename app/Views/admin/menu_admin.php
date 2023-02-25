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
                            <li><a href="formmuser.php" class="dropdown-item">Form User</a></li>

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

        <div class="container main">
            <div class="text-center head">
                <div class="col" data-aos="zoom-in-up">
                    <h2 class="mt-3 mb-5">Menu</h2>
                </div>
                <div class="col" data-aos="fade-right">
                    <h3 class="judultiga">Makanan</h3>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left">
                        <img src="../img/a.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Burger Special</h5>
                            <p class="card-text">Rp25.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="100">
                        <img src="../img/nasigoreng.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Nasi Goreng</h5>
                            <p class="card-text">Rp15.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="200">
                        <img src="../img/pasta.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Pasta</h5>
                            <p class="card-text">Rp20.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="300">
                        <img src="../img/pizza.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Pizza</h5>
                            <p class="card-text">Rp50.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="400">
                        <img src="../img/seafood.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Seafood</h5>
                            <p class="card-text">Rp30.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12" data-aos="fade-right">
                <span class="mt-4 judulempat">Minuman</span>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left">
                        <img src="../img/bull.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Bullgogi</h5>
                            <p class="card-text">Rp15.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="100">
                        <img src="../img/coffelatte.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Coffe Latte</h5>
                            <p class="card-text">Rp15.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="200">
                        <img src="../img/macha.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Macha Latte</h5>
                            <p class="card-text">Rp10.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="300">
                        <img src="../img/chocolatte.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Chocolatte</h5>
                            <p class="card-text">Rp15.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="400">
                        <img src="../img/seafood.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Lemon Tea</h5>
                            <p class="card-text">Rp8.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12" data-aos="fade-right">
                <span class="mt-4 judulempat">Cemilan</span>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left">
                        <img src="../img/kentanggoreng.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Kentang Goreng</h5>
                            <p class="card-text">Rp13.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="100">
                        <img src="../img/churos.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Churros</h5>
                            <p class="card-text">Rp10.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="200">
                        <img src="../img/makaroni.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Makaroni Schotel</h5>
                            <p class="card-text">Rp15.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="300">
                        <img src="../img/kue choco late.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Chocolate Cake</h5>
                            <p class="card-text">Rp25.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="400">
                        <img src="../img/Mozzarela.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Mozarella Stick</h5>
                            <p class="card-text">Rp18.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-12" data-aos="fade-right">
                <span class="mt-4 judulempat">Paket</span>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left">
                        <img src="../img/a.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Burger Special</h5>
                            <p class="card-text">Rp25.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="100">
                        <img src="../img/nasigoreng.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Nasi Goreng</h5>
                            <p class="card-text">Rp15.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="200">
                        <img src="../img/pasta.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Pasta</h5>
                            <p class="card-text">Rp20.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="300">
                        <img src="../img/pizza.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Pizza</h5>
                            <p class="card-text">Rp50.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 11.5rem;" data-aos="flip-left" data-aos-delay="400">
                        <img src="../img/seafood.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-text">Seafood</h5>
                            <p class="card-text">Rp30.000,00</p>
                            <a href="viewproduk.php" class="btn mt-2">Order</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>