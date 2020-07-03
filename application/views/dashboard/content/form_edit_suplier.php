<?php foreach ($suplier as $data) : ?>

	<?php if ($this->session->flashdata('alert')) : ?>
		<div class="alert alert-warning">
			<h4 class="alert-heading"><i class="fa fa-info-circle"></i> Error</h4>
			<p><?= $this->session->flashdata('alert') ?></p>
		</div>
	<?php endif; ?>

	<div class='row'>

		<div class='col-md-12'>

			<div class='card'>
				<div class='card-header'>
					<h2 class="text-center" style="font-family: 'Montserrat', sans-serif;">Form edit suplier</h2>
					<a href="<?= base_url('suplier') ?>"><button class="btn btn-danger float-left"><i class="fa fa-chevron-left"></i> Kembali</button></a>
				</div>


				<form action="<?= base_url('edit-suplier-pro/' . $data->id_suplier) ?>" method="post">
					<div class="card-body">
						<div class="row">
							<div class="form-group col-md-6">
								<label>ID Suplier</label>
								<input class="form-control" type="text" value="<?= $data->id_suplier ?>" placeholder="ID Suplier" name="id_suplier">
							</div>

							<div class="form-group col-md-6">
								<label>Nama Suplier</label>
								<input class="form-control" type="text" value="<?= $data->nama_suplier ?>" placeholder="Nama Suplier" name="nama_suplier">
							</div>

							<div class="form-group col-md-4">
								<label>Telpon Suplier</label>
								<input class="form-control" type="text" value="<?= $data->telp_suplier ?>" placeholder="081212XXX" name="telp_suplier">
							</div>

							<div class="form-group col-md-12">
								<label>Alamat Suplier </label>
								<textarea class="form-control" name="alamat_suplier" placeholder="contoh : Buku Teropong UNBK Tahun Ajaran 2017-2019" rows="8"><?= $data->alamat_suplier ?></textarea>
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
	</div>
<?php endforeach; ?>