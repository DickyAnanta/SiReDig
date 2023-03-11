<?= $this->extend('Template/user/template.php') ?>

<?= $this->Section('content') ?>

<section class="beranda pt-5 mb-5">
  <div class="container">

    <!-- header -->
    <div class="row header mt-2 p-4 bg-light rounded">
      <div class="col mt-3" data-aos="fade-up">
        <h1><span>FRESH</span> FOOD</h1>
        <h2>&EAT FOOD</h2>
        <p><span>Eat good, live good, and eat good.</span><br>
          Nek mangan gausah miker<br> dunyo, marai ga nikmat.</p>
        <a href="menu.php" class="btn btn-sm bg-success shadow">Menu</a>
      </div>
      <div class="col" data-aos="fade-up">
        <img src="/assets/img/Group 100.png" alt="">
      </div>
    </div>

    <!-- menu -->
    <div class="row menu" id="makanan">
      <div class="col-12">
        <!-- paket -->
        <div class="konten mt-5">
          <h3 class="mt-2">Rekomendasi <span class="float-right"><a class="text-success" href="menuuser">Lihat Semua<i class="ml-2 fas fa-chevron-right"></i>
              </a></span></h3>
          <div class="sec">
            <div class="box shadow-sm" data-aos="flip-left">
              <img src="/assets/img/Paket1.png" alt="">
              <h4>Paket 1</h4>
              <p class="d-flex justify-content-between pl-2 pr-2">RP30.000<span>Stok 5</span></p>
              <a class="btn btn-sm btn-success" href="user/order.php">Order</a>
            </div>
            <div class="box shadow-sm" data-aos="flip-left" data-aos-delay="100">
              <img src="/assets/img/Paket2.png" alt="">
              <h4>Paket 2</h4>
              <p class="d-flex justify-content-between pl-2 pr-2">RP60.000<span>Stok 5</span></p>
              <a class="btn btn-sm btn-success" href="user/order.php">Order</a>
            </div>
            <div class="box shadow-sm" data-aos="flip-left" data-aos-delay="200">
              <img src="/assets/img/paket3.png" alt="">
              <h4>Paket 3</h4>
              <p class="d-flex justify-content-between pl-2 pr-2">RP45.000<span>Stok 5</span></p>
              <a class="btn btn-sm btn-success" href="user/order.php">Order</a>
            </div>
            <div class="box shadow-sm" data-aos="flip-left" data-aos-delay="300">
              <img src="/assets/img/paket3.png" alt="">
              <h4>Paket 3</h4>
              <p class="d-flex justify-content-between pl-2 pr-2">RP45.000<span>Stok 5</span></p>
              <a class="btn btn-sm btn-success" href="user/order.php">Order</a>
            </div>
            <div class="box shadow-sm" data-aos="flip-left" data-aos-delay="300">
              <img src="/assets/img/Paket4.png" alt="">
              <h4>Paket 4</h4>
              <p class="d-flex justify-content-between pl-2 pr-2">RP25.000<span>Stok 5</span></p>
              <a class="btn btn-sm btn-success" href="user/order.php">Order</a>
            </div>
          </div>
        </div>

        <!-- jumbroton -->
        <div class="jumbotron bg-white box mt-5 p-3">
          <div class="row">
            <div class="col" data-aos="fade-up">
              <img style="width: 300px;" src="/assets/img/burgerspesialview.png" alt="">
            </div>
            <div class="col pt-3" data-aos="fade-up">
              <h2>Pilih Makanan Favoritmu</h2>
              <p class="pt-4 pb-4">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Non, accusantium sint laboriosam repellendus quod blanditiis dolore ipsa tempore eius ut.</p>
              <a class="btn btn-sm btn-success shadow" href="">Pilih Menu</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>
<div class="card-footer bg-dark text-muted text-center p-3">
  <p class="">Copyright@TeamTecwiz</p>
</div>


<?= $this->endSection() ?>