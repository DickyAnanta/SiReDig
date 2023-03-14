<?php $this->extend('Template/user/template.php') ?>

<?php $this->Section('content') ?>

<section class="pembayaran mt-5">
    <div class="container">
        <div class="row">
            <!-- kolom1 -->
            <div class="col-md-7 border rounded p-3 pilihmenu data">
                <h2>Pembayaran</h2>
                <form action="/orderuser/submit" method="post">
                    <label class="mb-1 mt-2">Nama</label><br>
                    <input class="form-control" required type="text" placeholder="Masukkan Nama" name="nama" id="nama" autofocus>
                    <label class="mb-1 mt-2">Alamat</label> <br>
                    <input class="form-control" required type="text" placeholder="Masukkan Alamat" name="alamat" id="alamat">
                    <label class="mb-1 mt-2">No Telepon</label> <br>
                    <input class="form-control" required type="number" placeholder="Masukkan No Telp" name="telepon" id="telepon">

                    <h3 class="mt-3 mb-2">Metode Pembayaran</h3>
                    <label class="w-100 border p-2 rounded">
                        <input class="mr-2" type="radio" name="pembayaran" id="pembayaran" value="Bayar Di Tempat">
                        Bayar Di Tempat
                    </label>
                    <label class="w-100 border p-2 rounded">
                        <input class="mr-2" type="radio" name="pembayaran" id="pembayaran" value="BRI">
                        <img src="/assets/img/bri.png" alt="">
                    </label>
                    <label class="w-100 border p-2 rounded">
                        <input class="mr-2" type="radio" name="pembayaran" id="pembayaran" value="BNI">
                        <img src="/assets/img/bni.png" alt="">
                    </label>
                    <label class="w-100 border p-2 rounded">
                        <input class="mr-2" type="radio" name="pembayaran" id="pembayaran" value="BCA">
                        <img src="/assets/img/bca.png" alt="">
                    </label>

            </div>
            <!-- kolom2 -->
            <div class="col-md-4 offset-md-1 sticky-top" id="detail-pembayaran">
                <div class="pilihmenu p-0">
                    <div class="card p-3 rounded">
                        <div class="card-header p-2 text-center">
                            <h2>Detail Pembayaran</h2>
                        </div>
                        <div class="card-body pb-0 pt-2">
                            <div class="row pt-2">
                                <div class="col-12">
                                    <p class="mb-2">Nasi Goreng<span class="font-weight-normal float-right">RP 15.000</span></p>
                                    <p class="mb-2">Nasi Goreng<span class="font-weight-normal float-right">RP 15.000</span></p>
                                </div>
                                <div class="col-12 pb-2 border-bottom">
                                    <p class="font-weight-normal mb-2">Metode Pembayaran <span class="float-right" id=""><img src="/assets/img/bri.png" alt="" style="height: 1rem;"></span></p>
                                </div>
                                <div class="col-12 pt-3">
                                    <p class="font-weight-bold mb-3">Total Pembayaran<span class="font-weight-bold float-right" id="total-harga"></span></p>
                                    <input type="text" value="<?= @$data['total_harga'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class=" border-top">
                            <button type="submit" class="btn btn-sm btn-warning w-100 mb-1 text-white">Edit Pesanan</button>
                            <button type="submit" class="btn btn-sm btn-success w-100">Bayar</button>
                        </div>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function() {
        $('form').submit(function(event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: $(this).attr('action'),
                data: $(this).serialize(),
                success: function(response) {
                    $('#nama').text(response.nama);
                    $('#alamat').text(response.alamat);
                    $('#telepon').text(response.telepon);
                    $('#total-harga').text(response.total_harga);
                }
            });
        });
    });
</script>


<?php $this->endSection() ?>