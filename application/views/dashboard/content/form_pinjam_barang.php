
  <?php if($this->session->flashdata('alert')) : ?>
	  <div class="alert alert-warning">
	  	<h5><i class="fa fa-info-circle"></i> Error</h5>
	  	<p><?= $this->session->flashdata('alert') ?></p>
	  </div>
  <?php endif; ?>

<div class='row'>

  <div class='col-md-12'>

  	<div class='card'>
  		<div class='card-header'>
  			<i class="fas fa-user-plus"></i> Form Tambah Barang <a href="<?= base_url('pinjam') ?>"><span class="badge badge-danger float-right"><i class="fa fa-chevron-left"></i> Kembali</span></a>
  		</div>

  		<form action="<?= base_url('tambah-pinjam-pro/'.$id) ?>" method="post">
	  		<div class="card-body">
	  			<div class="row">
	  				<div class="form-group col-md-6">
	  					<label>Peminjam</label>
	  					<input class="form-control" type="text" placeholder="Peminjam" value="<?= $this->session->userdata('name')?>" name="pinjam">
	  				</div>

	  				<div class="form-group col-md-6">
	  					<label>Jumlah Barang</label>
	  					<input class="form-control" type="number" placeholder="Jumlah Barang" name="jml_barang">
	  				</div>

	  				<div class="form-group col-md-6">
	  					<label>Tanggal Pinjam</label>
	  					<input type="date" class="form-control" placeholder="Tanggal Pinjam" name="tgl_pinjam">
	  				</div>

	  				<div class="form-group col-md-6">
	  					<label>Tanggal Kembali </label>
	  					<input type="date" class="form-control" placeholder="Tanggal Kembali" name="tgl_kembali">
	  				</div>


	  				<div class="form-group col-md-6">
	  					<label>Lokasi Peminjam </label>
	  					<input type="text" class="form-control" placeholder="Lokasi" name="lokasi">
	  				</div>

	  				<div class="form-group col-md-6">
	  					<label>Kondisi Barang </label>
	  					<input type="text" class="form-control" placeholder="kondisi" name="kondisi">
	  				</div>
	  			</div>
	  		</div>

	  		<div class="card-footer">
	  			<button ype="submit" class="float-right btn btn-outline-success"> Tambah</button>
	  			<button type="reset" class="float-right mr-2 btn btn-outline-danger"> Reset</button>
	  		</div>
  		</form>
  	</div>

  </div>
</div>