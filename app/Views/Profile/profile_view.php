<?= $this->extend('Template/template.php') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h1>Menu</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">User_id</th>
                <th scope="col">Nama</th>
                <th scope="col">Kelamin</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Telepon</th>
                <th scope="col">Alamat</th>
            </tr>
        </thead>

        <?php $i = 1; ?>
        <?php foreach ($data as $key => $value) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $value['user_id'] ?></td>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['kelamin'] ?></td>
                <td><?= $value['tanggal_lahir'] ?></td>
                <td><?= $value['telepon'] ?></td>
                <td><?= $value['alamat'] ?></td>
                <td>
                    <a class="btn btn-danger" href="/profile/edit/<?= encrypt_url($value['id']) ?>">Edit</a>
                    <a class="btn btn-danger" href="/profile/delete/<?= encrypt_url($value['id']) ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a class="btn btn-danger" href="<?= base_url('/profile/edit/') ?>">Tambah</a>
</div>
<?= $this->endSection() ?>