<?= $this->extend('Template/admin/template.php') ?>

<?= $this->Section('content') ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper daftarmenu">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container">
			<div class="row mb-3 mt-3 justify-content-end">
				<div class="col">
					<h3>List Menu</h3>
				</div>
				<div class="col-auto">
					<div class="card-tools">
						<div class="input-group input-group-sm" style="width: 175px;">
							<input type="text" name="table_search" class="form-control float-right" placeholder="Search">
							<div class="input-group-append">
								<button type="submit" class="btn btn-default">
									<i class="fas fa-search"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="col-auto">
					<a class="btn btn-sm btn-success" href="/menu/edit"><i class="fa fa-plus mr-2" aria-hidden="true"></i>Tambah Menu</a>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->

	<!-- Main content -->
	<div class="content menu">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- <div class="card border-top-0"> -->
					<!-- /.card-header -->
					<div class="table-responsive p-1">
						<table class="table table-hover table-borderless table-striped">
							<thead>
								<tr>
									<div class="row">
										<div class="col">
											<th class="">Menu</th>
										</div>
										<div class="col">
											<th class="">Nama</th>
										</div>
										<div class="col">
											<th class="">Deskripsi</th>
										</div>
										<div class="col">
											<th class="">Type</th>
										</div>
										<div class="col">
											<th class="">Harga</th>
										</div>
										<div class="col">
											<th class="">Stok</th>
										</div>
										<div class="col">
											<th class="">Action</th>
										</div>
									</div>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($data as $key => $value) : ?>
									<tr>
										<td><img src="/assets/img/<?= $value['gambar'] ?>" alt=""></td>
										<td class="menu"><?= $value['title'] ?></td>
										<td class="menu"><?= $value['deskripsi'] ?></td>
										<td class="menu"><?= $value['tipe'] ?></td>
										<td class="menu"><?= $value['harga'] ?></td>
										<td class="menu"><?= $value['stok'] ?></td>
										<td class="menu">
											<a class="btn" href="/menu/edit/<?= encrypt_url($value['id']) ?>">Edit</a>
											<a class="btn" href="/menu/delete/<?= encrypt_url($value['id']) ?>">Hapus</a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
					<!-- /.card-body -->
				</div>
				<!-- /.card -->
			</div>
		</div>
	</div>
</div>
<!-- /.content -->

</div>
<!-- /.content-wrapper -->
<?= $this->endSection() ?>