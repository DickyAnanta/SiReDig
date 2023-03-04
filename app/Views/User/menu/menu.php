<?= $this->extend('Template/user/template.php') ?>

<?= $this->Section('content') ?>

<div class="content mt-5">
    <div class="container">

        <div class="container main">
            <div class="text-center head">
                <div class="col" data-aos="zoom-in-up">
                    <h2 class="mt-3 mb-5">Menu</h2>
                </div>
                <div class="col" data-aos="fade-right">
                    <h3 class="judultiga">Paket</h3>
                </div>
            </div>
            <div class="row">
                <?php foreach ($data as $key => $value) : ?>
                    <form action="/menuuser/detailed/<?= encrypt_url($value['id']) ?>" method="post">
                        <div class="col">
                            <div class="card" style="width: 11.5rem;" data-aos="flip-left">
                                <img src="/assets/img/<?= $value['gambar'] ?>" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-text"><?= $value['title'] ?></h5>
                                    <p class="card-text"><?= $value['harga'] ?></p>
                                    <button class="btn mt-2" type="submit">Order</button>
                                </div>
                            </div>
                        </div>
                    </form>
                <?php endforeach; ?>
            </div>

            <div class="col" data-aos="fade-right">
                <h3 class="judulempat">Makanan</h3>
            </div>
            <div class="row">
                <?php foreach ($data as $key => $value) : ?>
                    <div class="col">
                        <div class="card" style="width: 11.5rem;" data-aos="flip-left">
                            <img src="/assets/img/<?= $value['gambar'] ?>" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-text"><?= $value['title'] ?></h5>
                                <p class="card-text"><?= $value['harga'] ?></p>
                                <a href="/menuuser/detailed/<?= decrypt_url($value['id']) ?>" class="btn mt-2">Order</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="col-12" data-aos="fade-right">
                <span class="mt-4 judulempat">Minuman</span>
            </div>
            <div class="row">
                <?php foreach ($data as $key => $value) : ?>
                    <div class="col">
                        <div class="card" style="width: 11.5rem;" data-aos="flip-left">
                            <img src="/assets/img/<?= $value['gambar'] ?>" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-text"><?= $value['title'] ?></h5>
                                <p class="card-text"><?= $value['harga'] ?></p>
                                <a href="/menuuser/detailed/<?= decrypt_url($value['id']) ?>" class="btn mt-2">Order</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="col-12" data-aos="fade-right">
                <span class="mt-4 judulempat">Cemilan</span>
            </div>
            <div class="row">
                <?php foreach ($data as $key => $value) : ?>
                    <div class="col">
                        <div class="card" style="width: 11.5rem;" data-aos="flip-left">
                            <img src="/assets/img/<?= $value['gambar'] ?>" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h5 class="card-text"><?= $value['title'] ?></h5>
                                <p class="card-text"><?= $value['harga'] ?></p>
                                <a href="/menuuser/detailed/<?= decrypt_url($value['id']) ?>" class="btn mt-2">Order</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?= $this->endSection() ?>