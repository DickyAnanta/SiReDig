<?= $this->extend('Template/template.php') ?>

<?= $this->section('content') ?>


<div class="container mt-5">
	<h1>Menu</h1>
	<table class="table">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Title</th>
				<th scope="col">Gambar</th>
				<th scope="col">Harga</th>
				<th scope="col">Action</th>
			</tr>
		</thead>

		<?php $i = 1; ?>
		<?php foreach ($data as $key => $value) : ?>
			<tr>
				<th scope="row"><?= $i++; ?></th>
				<td><?= $value['title'] ?></td>
				<td><img src="/assets/img/<?= $value['gambar'] ?>" width="100px"></td>
				<td><?= $value['harga'] ?></td>
				<td>
					<a class="btn btn-danger" href="/menu/edit/<?= encrypt_url($value['id']) ?>">Edit</a>
					<a class="btn btn-danger" href="/menu/delete/<?= encrypt_url($value['id']) ?>">Hapus</a>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
	<a class="btn btn-danger" href="<?= base_url('/menu/edit/') ?>">Tambah</a>
</div>
<?= $this->endSection() ?>