<?php foreach($data_user as $data) : ?>


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
  			<i class="fas fa-user-edit"></i> Form Edit Akun <a href="<?= base_url('user') ?>"><span class="badge badge-danger float-right"><i class="fa fa-chevron-left"></i> Kembali</span></a>
  		</div>

  		<form action="<?= base_url('edit-user-pro/'.$data->id_user) ?>" method="post">
	  		<div class="card-body">
	  			<div class="row">
	  				<div class="form-group col-md-6">
	  					<label>Nama</label>
	  					<input class="form-control" type="text" placeholder="Nama Lengkap" name="nama" value="<?= $data->nama ?>">
	  				</div>

	  				<div class="form-group col-md-6">
	  					<label>Username</label>
	  					<input class="form-control" type="text" placeholder="Username" name="username" value="<?= $data->username ?>">
	  				</div>

	  				<div class="form-group col-md-6">
	  					<label>Password</label>
	  					<input class="form-control" type="password" placeholder="Password" name="password" value="<?= $data->password ?>">
	  				</div>

	  				<div class="form-group col-md-6">
	  					<label>Level</label>
	  					<select class="custom-select" name="level">
	  						
	  						<?php if($data->level == 'administrator') : ?>
	  							<option value="" disabled>Pilih...</option>
		  						<option value="administrator" selected>Administrator</option>
		  						<option value="manajemen">Manajemen</option>
		  						<option value="peminjam">Peminjam</option>
	  						<?php endif; ?>

	  						<?php if($data->level == 'manajemen') : ?>
	  							<option value="" disabled>Pilih...</option>
		  						<option value="administrator">Administrator</option>
		  						<option value="manajemen" selected>Manajemen</option>
		  						<option value="peminjam">Peminjam</option>
	  						<?php endif; ?>

	  						<?php if($data->level == 'peminjam') : ?>
	  							<option value="" disabled>Pilih...</option>
		  						<option value="administrator">Administrator</option>
		  						<option value="manajemen">Manajemen</option>
		  						<option value="peminjam" selected>Peminjam</option>
	  						<?php endif; ?>

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

<?php endforeach;?>