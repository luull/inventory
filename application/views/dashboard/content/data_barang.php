<?php if ($this->session->flashdata('alert')) : ?>
	<div class="alert alert-danger">
		<h4 class="alert-heading"><i class="fa fa-check"></i> Berhasil</h4>
		<p><?= $this->session->flashdata('alert') ?></p>
	</div>
<?php endif; ?>

<div class='row'>

	<div class='col-md-12'>

		<div class='card'>
			<div class='card-header'>
				<h2 class="text-center" style="font-family: 'Montserrat', sans-serif !important;">Data barang</h2>
				<a href="tambah-barang"><button class="btn btn-success float-right"><i class="fa fa-plus"></i> Tambah</button></a>
			</div>

			<div class="card-body row">
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>Nama Barang</th>
								<th>Tgl Masuk</th>
								<th>Jml Masuk</th>
								<th>Suplier</th>
								<th>Kondisi</th>
								<th>Lokasi</th>
								<th>Sumber Dana</th>
								<th>Spesifikasi</th>
								<th>Opsi</th>
							</tr>
						</thead>

						<tbody>
							<?php $nomor = 1; ?>
							<?php foreach ($barang as $row) : ?>

								<tr>
									<td><?= $nomor++ ?></td>
									<td><?= $row->nama_barang ?></td>
									<td><?= $row->tgl_masuk  ?> </td>
									<td><?= $row->jml_masuk ?></td>
									<td><?= $row->nama_suplier  ?></td>
									<td><?= $row->kondisi ?> </td>
									<td><?= $row->lokasi ?> </td>
									<td><?= $row->sumber_dana ?> </td>
									<td><?= $row->spesifikasi ?> </td>
									<td><span>
											<a style="float:left" href="<?= base_url('edit-barang/' . $row->id_barang) ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil-alt color-muted m-r-5"></i> </a>
											<a href="<?= base_url('hapus-barang/' . $row->id_barang) ?>" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="ti-trash text-danger"></i></a>
										</span>
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