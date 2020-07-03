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
				<h2 class="text-center" style="font-family: 'Montserrat', sans-serif;">Data suplier</h2>
				<a href="tambah-suplier"><button class="btn btn-success float-right"><i class="fa fa-plus"></i> Tambah</button></a>
			</div>


			<div class="card-body row">
				<div class="table-responsive">
					<table class='table table-striped'>
						<thead>
							<tr>
								<th>No</th>
								<th>ID Suplier</th>
								<th>Nama Suplier</th>
								<th>Telpon Suplier</th>
								<th>Alamat Suplier</th>
								<th>Opsi</th>
							</tr>
						</thead>

						<tbody>
							<?php $nomor = 1; ?>
							<?php foreach ($suplier as $row) : ?>

								<tr>
									<td><?= $nomor++ ?></td>
									<td><?= $row->id_suplier ?></td>
									<td><?= $row->nama_suplier  ?> </td>
									<td><?= $row->telp_suplier ?></td>
									<td><?= $row->alamat_suplier  ?></td>
									<td><span>
											<a style="float:left" href="<?= base_url('edit-suplier/' . $row->id_suplier) ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil-alt color-muted m-r-5"></i> </a>
											<a href="<?= base_url('hapus-suplier/' . $row->id_suplier) ?>" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="ti-trash text-danger"></i></a>
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