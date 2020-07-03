<?php if ($this->session->flashdata('alert')) : ?>
	<div class="alert alert-success">
		<h4 class="alert-heading"><i class="fa fa-check"></i> Berhasil</h4>
		<p><?= $this->session->flashdata('alert') ?></p>
	</div>
<?php endif; ?>

<div class='row'>

	<div class='col-md-12'>

		<div class='card'>
			<div class='card-header'>
				<h2 class="text-center" style="font-family: 'Montserrat', sans-serif;">Data barang tersedia</h2>

			</div>


			<div class="card-body row">
				<div class="table-responsive">
					<table class='table table-striped '>
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Barang</th>
								<th>Jumlah Masuk</th>
								<th>Jumlah Keluar</th>
								<th>Total Barang</th>
								<th>Opsi</th>
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
									<td>
										<a href="<?= base_url('pinjam-barang/' . $row->id_barang) ?>" class="btn btn-block btn-sm btn-outline-success">
											Pinjam Barang
										</a>
									</td>
								</tr>

							<?php endforeach; ?>
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>