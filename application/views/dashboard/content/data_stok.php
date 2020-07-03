<?php if ($this->session->flashdata('alert')) : ?>
	<div class="alert alert-success">
		<h4 class="alert-heading"><i class="fa fa-check"></i> Berhasil</h4>
		<p><?= $this->session->flashdata('alert') ?></p>
	</div>
<?php endif; ?>

<?php if ($this->session->flashdata('peringatan')) : ?>
	<div class="alert alert-warning">
		<h4 class="alert-heading"><i class="fa fa-info-circle"></i> Error</h4>
		<p><?= $this->session->flashdata('peringatan') ?></p>
	</div>
<?php endif; ?>

<div class='row'>

	<div class='col-md-7'>

		<div class='card'>
			<div class='card-header'>
				<h2 class="text-center" style="font-family: 'Montserrat', sans-serif;">Data stok</h2>
				<a onclick="window.print()"><button class="btn btn-info float-right"><i class="fa fa-print"></i> Print</button></a>
			</div>


			<div class="card-body row">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Barang</th>
								<th>Jumlah Masuk</th>
								<th>Jumlah Keluar</th>
								<th>Total Barang</th>
							</tr>
						</thead>

						<tbody>
							<?php $nomor = 1; ?>
							<?php foreach ($stok as $row) : ?>

								<tr>
									<td><?= $nomor++ ?></td>
									<td><?= $row->nama_barang  ?> </td>
									<td><?= $row->jml_masuk ?></td>
									<td><?= $row->jml_keluar  ?></td>
									<td><?= $row->total_barang ?> </td>
								</tr>

							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>

	<div class='col-md-5'>

		<div class='card'>
			<div class='card-header'>
				<h3 class="text-center" style="font-family: 'Montserrat', sans-serif;">Tambah stok</h3>
			</div>

			<form action="<?= base_url('tambah-stok-pro') ?>" method="post">
				<div class="card-body">
					<div class="row">

						<div class="form-group col-md-6">
							<label>Nama Barang</label>
							<select class="form-control" name="id_barang">
								<?php foreach ($stok as $data) : ?>
									<option value="<?= $data->id_barang ?>"><?= $data->nama_barang  ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group col-md-4">
							<label>Tambah Stok</label>
							<input class="form-control" type="number" name="tambah_stok">
						</div>
					</div>
				</div>

				<div class="card-footer mb-5">
					<button ype="submit" class="float-right btn btn-success"> Tambah</button>
					<button type="reset" class="float-right mr-2 btn btn-danger"> Reset</button>
				</div>
			</form>
		</div>
	</div>