<?= $this->extend('Template/template.php') ?>

<?= $this->section('content') ?>

<div class="container mt-5">
    <h1>Menu</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Email</th>
                <th scope="col">Status</th>
                <th scope="col">Role</th>
            </tr>
        </thead>

        <?php $i = 1; ?>
        <?php foreach ($data as $key => $value) : ?>
            <tr>
                <th scope="row"><?= $i++; ?></th>
                <td><?= $value['nama'] ?></td>
                <td><?= $value['username'] ?></td>
                <td><?= $value['password'] ?></td>
                <td><?= $value['email'] ?></td>
                <td><?= $value['status'] ?></td>
                <td><?= $value['role'] ?></td>
                <td>
                    <a class="btn btn-danger" href="/user/edit/<?= encrypt_url($value['id']) ?>">Edit</a>
                    <a class="btn btn-danger" href="/user/delete/<?= encrypt_url($value['id']) ?>">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a class="btn btn-danger" href="<?= base_url('/user/edit/') ?>">Tambah</a>
</div>
<?= $this->endSection() ?>