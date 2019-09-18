
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
  			<i class="fas fa-user-plus"></i> Form Tambah Akun <a href="user"><span class="badge badge-danger float-right"><i class="fa fa-chevron-left"></i> Kembali</span></a>
  		</div>

  		<form action="<?= base_url('tambah-user-pro') ?>" method="post">
	  		<div class="card-body">
	  			<div class="row">
	  				<div class="form-group col-md-6">
	  					<label>Nama</label>
	  					<input class="form-control" type="text" placeholder="Nama Lengkap" name="nama">
	  				</div>

	  				<div class="form-group col-md-6">
	  					<label>Username</label>
	  					<input class="form-control" type="text" placeholder="Username" name="username">
	  				</div>

	  				<div class="form-group col-md-6">
	  					<label>Password</label>
	  					<input class="form-control" type="password" placeholder="Password" name="password">
	  				</div>

	  				<div class="form-group col-md-6">
	  					<label>Level</label>
	  					<select class="custom-select" name="level">
	  						<option value="" selected disabled>Pilih...</option>
	  						<option value="administrator">Administrator</option>
	  						<option value="manajemen">Manajemen</option>
	  						<option value="peminjam">Peminjam</option>
	  					</select>
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