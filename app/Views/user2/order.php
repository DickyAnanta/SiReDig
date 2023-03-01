<?= $this->extend('Template/user/template.php') ?>

<?= $this->Section('content') ?>

<div class="content mt-5">
    <div class="container">
        <div class="container order">
            <i class="fas fa-arrow-left"></i>
            <div class="">
                <h2 class="text-center">Order</h2>
                <p class="text-center">Pilih Metode Pembayaran</p>
            </div>
            <div class="row">
                <div class="col">
                    <div class="metode">
                        <h3 class="text-center">Bayar di tempat</h3>
                    </div>
                </div>
                <div class="col">
                    <div class="metodedua">
                        <h3 class="text-center">Online</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection() ?>