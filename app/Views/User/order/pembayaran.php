<?php $this->extend('Template/user/template.php') ?>

<?php $this->Section('content') ?>
<div class="content">
    <div class="container">
        <div class="section">
            <div class="row wrap">
                <div class="col-12 mb-3">
                    <h3><a href=""><i class="fa fa-arrow-left"></i></a>Pembayaran</h3>
                </div>
                <div class="col-12 mb-2 mt-3">
                    <h4>Detail Pesanan</h4>
                </div>
                <div class="col-6 pb-1">
                    <p class="text-dark">No Meja</p>
                </div>
                <div class="col-6 pb-1">
                    <p class="float-right text-dark">001</p>
                </div>
                <div class="col-6 pb-1 border-bottom">
                    <p>Nasi Goreng</p>
                </div>
                <div class="col-6 pb-1 border-bottom">
                    <p class="float-right">RP15.000</p>
                </div>
                <div class="col-6 mt-1">
                    <span>Total Pembayaran</span>
                </div>
                <div class="col-6 mt-1">
                    <span class="float-right">RP15.000</span>
                </div>
            </div>

            <div class="row wrap mt-3">
                <div class="col-12">
                    <h4>Masukkan Identitasmu</h4>
                </div>
                <div class="col-12">
                    <form action="">
                        <div class="row">
                            <div class="col-6 mt-1">
                                <label for="nama">Nama</label>
                                <br>
                                <input type="text" id="nama" name="nama">
                            </div>
                            <div class="col-6 mt-1">
                                <label for="telepon">Telepon</label>
                                <br>
                                <input type="number" id="telepon" name="fname">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <div class="row mt-3">
                        <div class="col-12">
                            <h4>Metode Pembayaran</h4>
                        </div>
                        <div class="col-sm-6">
                            <!-- radio -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio1">
                                    <label class="form-check-label"><img src="/assets/img/bca.png" alt=""></label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="radio1" checked>
                                    <label class="form-check-label"><img src="/assets/img/bni.png" alt=""></label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="radio1" checked>
                                    <label class="form-check-label"><img src="/assets/img/bri.png" alt=""></label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <!-- radio -->
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="radio1">
                                    <label class="form-check-label"><img src="/assets/img/dana.png" alt=""></label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="radio1" checked>
                                    <label class="form-check-label"><img src="/assets/img/Gopay.png" alt=""></label>
                                </div>
                                <div class="form-check mt-2">
                                    <input class="form-check-input" type="radio" name="radio1" checked>
                                    <label class="form-check-label"><i class="fas fa-coins mr-2"></i>Tunai</label>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <button>Bayar Sekarang</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $this->endSection() ?>