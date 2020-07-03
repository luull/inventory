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

				<h2 class="text-center" style="font-family: 'Montserrat', sans-serif;">Form Tambah Barang</h2>
				<a href="barang"><button class="btn btn-danger float-left"><i class="fa fa-chevron-left"></i> Kembali</button></a>


			</div>

			<form action="<?= base_url('tambah-barang-pro') ?>" method="post">
				<div class="card-body">
					<div class="row">
						<div class="form-group col-md-6">
							<label>ID Barang</label>
							<input class="form-control" type="text" placeholder="ID Barang" name="id">
						</div>

						<div class="form-group col-md-6">
							<label>Nama Barang</label>
							<input class="form-control" type="text" placeholder="Nama Barang" name="nama_barang">
						</div>

						<div class="form-group col-md-6">
							<label>Tanggal Masuk</label>
							<input class="form-control" type="date" placeholder="Tanggal Masuk" name="tgl_masuk">
						</div>

						<div class="form-group col-md-6">
							<label>Jumlah Masuk</label>
							<input type="number" class="form-control" placeholder="Jumlah Masuk" name="jml_masuk">
						</div>

						<div class="form-group col-md-6">
							<label>Suplier</label>
							<select class="form-control" name="id_suplier">
								<option value="" disabled selected>Pilih...</option>
								<?php foreach ($suplier as $data) : ?>
									<option value="<?= $data->id_suplier ?>"><?= $data->nama_suplier ?></option>
								<?php endforeach; ?>
							</select>
						</div>

						<div class="form-group col-md-6">
							<label>Kondisi </label>
							<input type="text" class="form-control" placeholder="Kondisi" name="kondisi">
						</div>


						<div class="form-group col-md-6">
							<label>Lokasi </label>
							<input type="text" class="form-control" placeholder="Lokasi" name="lokasi">
						</div>


						<div class="form-group col-md-6">
							<label>Sumber Dana </label>
							<select class="form-control" name="sumber_dana">
								<option value="" selected disabled>Pilih...</option>
								<option value="eksternal">Eksternal</option>
								<option value="internal">Internal</option>
							</select>
						</div>


						<div class="form-group col-md-12">
							<label>Spesifikasi </label>
							<textarea class="form-control" name="spesifikasi" placeholder="contoh : Buku Teropong UNBK Tahun Ajaran 2017-2019" rows="8"></textarea>
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