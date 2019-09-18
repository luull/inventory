
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
  			<i class="fas fa-user-plus"></i> Form Tambah Suplier <a href="suplier"><span class="badge badge-danger float-right"><i class="fa fa-chevron-left"></i> Kembali</span></a>
  		</div>

  		<form action="<?= base_url('tambah-suplier-pro') ?>" method="post">
	  		<div class="card-body">
	  			<div class="row">
	  				<div class="form-group col-md-6">
	  					<label>ID Suplier</label>
	  					<input class="form-control" type="text" placeholder="ID Suplier" name="id_suplier">
	  				</div>

	  				<div class="form-group col-md-6">
	  					<label>Nama Suplier</label>
	  					<input class="form-control" type="text" placeholder="Nama Suplier" name="nama_suplier">
	  				</div>

	  				<div class="form-group col-md-4">
	  					<label>Telpon Suplier</label>
	  					<input class="form-control" type="text"  placeholder="081212XXX" name="telp_suplier">
	  				</div>

	  				<div class="form-group col-md-12">
	  					<label>Alamat Suplier </label>
	  					<textarea class="form-control" name="alamat_suplier" placeholder="contoh : Buku Teropong UNBK Tahun Ajaran 2017-2019" rows="8"></textarea>
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