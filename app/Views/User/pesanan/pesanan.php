<?php $this->extend('Template/user/template.php') ?>

<?php $this->Section('content') ?>

<section class="pesanan pt-5 mb-5">
    <div class="container">

        <!-- formpesanan -->
        <div class="card-body">
            <h2 class="mb-3">Riwayat Pesanan</h2>

            <table class="table table-hover shadow-sm">
                <thead>
                    <tr class="bg-success">
                        <th>Foto</th>
                        <th>Nama</th>
                        <th>Jumlah</th>
                        <th>Data</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr data-widget="expandable-table" aria-expanded="false">
                        <td><img src="../img/burgerspesialview.png" alt=""></td>
                        <td>Burger Special </td>
                        <td>1 </td>
                        <td>09-03-2023<span class="pl-2">12.00</span> </td>
                        <td>RP25.000 </td>
                        <td class="font-weight-bold text-success">Selesai</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</section>
<?php $this->endSection() ?>