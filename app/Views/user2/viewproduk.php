<?= $this->extend('Template/user/template.php') ?>

<?= $this->Section('content') ?>

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

<?= $this->endSection() ?>