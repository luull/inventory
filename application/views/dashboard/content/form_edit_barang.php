<?php foreach ($barang as $data) : ?>


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
					<h2 class="text-center" style="font-family: 'Montserrat', sans-serif;">Form edit barang</h2>
					<a href="<?= base_url('') ?>barang"><button class="btn btn-danger float-left"><i class="fa fa-chevron-left"></i> Kembali</button></a>
				</div>



				<form action="<?= base_url('edit-barang-pro/' . $data->id_barang) ?>" method="post">
					<div class="card-body">
						<div class="row">
							<div class="form-group col-md-6">
								<label>ID Barang</label>
								<input class="form-control" type="text" placeholder="ID Barang" value="<?= $data->id_barang ?>" name="id" readonly>
							</div>

							<div class="form-group col-md-6">
								<label>Nama Barang</label>
								<input class="form-control" type="text" placeholder="Nama Barang" value="<?= $data->nama_barang ?>" name="nama_barang">
							</div>

							<div class="form-group col-md-6">
								<label>Tanggal Masuk</label>
								<input class="form-control" type="text" placeholder="Tanggal Masuk" value="<?= $data->tgl_masuk ?>" name="tgl_masuk">
							</div>

							<div class="form-group col-md-6">
								<label>Suplier</label>
								<select class="form-control" name="id_suplier">
									<?php foreach ($suplier as $row) : ?>
										<?php if ($row->id_suplier ==  $data->id_suplier) : ?>
											<option value="" disabled>Pilih...</option>
											<option value="<?= $row->id_suplier ?>" selected><?= $row->nama_suplier ?></option>
										<?php endif; ?>

										<?php if ($row->id_suplier !=  $data->id_suplier) : ?>
											<option value="" disabled>Pilih...</option>
											<option value="<?= $row->id_suplier ?>"><?= $row->nama_suplier ?></option>
										<?php endif; ?>
									<?php endforeach; ?>
								</select>
							</div>

							<div class="form-group col-md-6">
								<label>Kondisi </label>
								<input type="text" class="form-control" placeholder="Kondisi" value="<?= $data->kondisi ?>" name="kondisi">
							</div>


							<div class="form-group col-md-6">
								<label>Lokasi </label>
								<input type="text" class="form-control" placeholder="Lokasi" value="<?= $data->lokasi ?>" name="lokasi">
							</div>


							<div class="form-group col-md-6">
								<label>Sumber Dana </label>
								<select class="form-control" name="sumber_dana">
									<?php if ($data->sumber_dana == 'eksternal') : ?>
										<option value="" disabled>Pilih...</option>
										<option value="eksternal" selected>Eksternal</option>
										<option value="internal">Internal</option>
									<?php endif; ?>

									<?php if ($data->sumber_dana == 'internal') : ?>
										<option value="" disabled>Pilih...</option>
										<option value="eksternal">Eksternal</option>
										<option value="internal" selected>Internal</option>
									<?php endif; ?>
								</select>
							</div>


							<div class="form-group col-md-12">
								<label>Spesifikasi </label>
								<textarea class="form-control" name="spesifikasi" placeholder="contoh : Buku Teropong UNBK Tahun Ajaran 2017-2019" rows="8"><?= $data->spesifikasi ?></textarea>
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