<?= $this->extend('Template/user/template.php') ?>

<?= $this->Section('content') ?>

<section class="menu pt-5 mb-5">
  <div class="container">
    <h2 class="mb-4" data-aos="fade-up">Menu</h2>
    <!-- pilihan menu -->
    <div class="row bg-white">
      <div class="col-12 kategori">
        <a class="border rounded border-success text-success pt-1 pb-1 pr-4 pl-4 mr-2" data-aos="fade-up" data-aos-delay="100" href="#paket">Paket</a>
        <a class="border rounded border-success text-success pt-1 pb-1 pr-4 pl-4 mr-2" data-aos="fade-up" data-aos-delay="200" href="#makanan">Makanan</a>
        <a class="border rounded border-success text-success pt-1 pb-1 pr-4 pl-4 mr-2" data-aos="fade-up" data-aos-delay="300" href="#minuman">Minuman</a>
        <a class="border rounded border-success text-success pt-1 pb-1 pr-4 pl-4 mr-2" data-aos="fade-up" data-aos-delay="400" href="#cemilan">Cemilan</a>
      </div>
    </div>
    <!-- menu -->
    <div class="row menu">
      <div class="col-12">
        <!-- paket -->
        <div class="konten" id="paket">
          <h3 class="mt-4" data-aos="zoom-up">Paket</h3>
          <div class="sec">
            <?php foreach ($data as $key => $value) : ?>
              <div class="box shadow-sm" data-aos="flip-left">
                <img src="/assets/img/<?= $value['gambar'] ?>" alt="">
                <h4><?= $value['title'] ?></h4>
                <p class="d-flex justify-content-between pl-2 pr-2"><?= $value['harga'] ?><span>Stok <?= $value['stok'] ?></span></p>
                <a class="btn btn-sm btn-success" href="">Tambah</a>
              </div>
            <?php endforeach ?>
          </div>
        </div>

        <!-- makanan -->
        <div class="konten" id="makanan">
          <h3 class="mt-4" data-aos="zoom-up">Makanan</h3>
          <div class="sec">
            <?php foreach ($data as $key => $value) : ?>
              <div class="box shadow-sm" data-aos="flip-left">
                <img src="/assets/img/<?= $value['gambar'] ?>" alt="">
                <h4><?= $value['title'] ?></h4>
                <p class="d-flex justify-content-between pl-2 pr-2"><?= $value['harga'] ?><span>Stok <?= $value['stok'] ?></span></p>
                <a class="btn btn-sm btn-success" href="">Tambah</a>
              </div>
            <?php endforeach ?>
          </div>
        </div>

        <!-- minuman -->
        <div class="konten" id="minuman">
          <h3 class="mt-4" data-aos="zoom-up">Minuman</h3>
          <div class="sec">
            <?php foreach ($data as $key => $value) : ?>
              <div class="box shadow-sm" data-aos="flip-left">
                <img src="/assets/img/<?= $value['gambar'] ?>" alt="">
                <h4><?= $value['title'] ?></h4>
                <p class="d-flex justify-content-between pl-2 pr-2"><?= $value['harga'] ?><span>Stok <?= $value['stok'] ?></span></p>
                <a class="btn btn-sm btn-success" href="">Tambah</a>
              </div>
            <?php endforeach ?>
          </div>
        </div>

        <!-- cemilan -->
        <div class="konten" id="cemilan">
          <h3 class="mt-4" data-aos="zoom-up">Cemilan</h3>
          <div class="sec">
            <?php foreach ($data as $key => $value) : ?>
              <div class="box shadow-sm" data-aos="flip-left">
                <img src="/assets/img/<?= $value['gambar'] ?>" alt="">
                <h4><?= $value['title'] ?></h4>
                <p class="d-flex justify-content-between pl-2 pr-2"><?= $value['harga'] ?><span>Stok <?= $value['stok'] ?></span></p>
                <a class="btn btn-sm btn-success" href="">Tambah</a>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>