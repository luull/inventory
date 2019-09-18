
  <?php if($this->session->flashdata('alert')) : ?>
	  <div class="alert alert-primary">
	  	<h5><i class="fa fa-check"></i> Berhasil</h5>
	  	<p><?= $this->session->flashdata('alert') ?></p>
	  </div>
  <?php endif; ?>

  <?php if($this->session->flashdata('peringatan')) : ?>
	  <div class="alert alert-warning">
	  	<h5><i class="fa fa-info-circle"></i> Error</h5>
	  	<p><?= $this->session->flashdata('peringatan') ?></p>
	  </div>
  <?php endif; ?>

<div class='row'>

  <div class='col-md-7'>

  	<div class='card'>
  		<div class='card-header'>
  			<i class="fas fa-table"></i> Data Stok <a onclick="window.print()"><span class="badge badge-primary float-right"><i class="fa fa-print"></i> print</span></a>
  		</div>

  		<div class="card-body row">
  			<div class="table-responsive">
	  			<table class='table table-striped table-bordered table-sm table-hover'>
	  				<thead>
	  					<tr>
	  						<th>Nomor</th>
	  						<th>Nama Barang</th>
	  						<th>Jumlah Masuk</th>
	  						<th>Jumlah Keluar</th>
	  						<th>Total Barang</th>
	  					</tr>
	  				</thead>

	  				<tbody>
	  					<?php $nomor = 1; ?>
	  					<?php foreach($stok as $row) : ?>

	  					<tr>
	  						<td><?= $nomor++?></td>
	  						<td><?= $row->nama_barang  ?> </td>
	  						<td><?= $row->jml_masuk ?></td>
	  						<td><?= $row->jml_keluar  ?></td>
	  						<td><?= $row->total_barang ?> </td>
	  					</tr>

	  					<?php endforeach; ?>
	  				</tbody>
	  			</table>
  			</div>
  		</div>
  	</div>

  </div>

<div class='col-md-5'>

  	<div class='card'>
  		<div class='card-header'>
  			<i class="fas fa-user-plus"></i> Form Tambah Stok
  		</div>

  		<form action="<?= base_url('tambah-stok-pro') ?>" method="post">
	  		<div class="card-body">
	  			<div class="row">

	  				<div class="form-group col-md-6">
	  					<label>Nama Barang</label>
	  					<select class="custom-select" name="id_barang">
	  						<?php foreach($stok as $data) : ?>
	  							<option value="<?= $data->id_barang ?>"><?= $data->nama_barang  ?></option>
	  						<?php endforeach; ?>
	  					</select>
	  				</div>

	  				<div class="form-group col-md-4">
	  					<label>Tambah Stok</label>
	  					<input class="form-control" type="number" name="tambah_stok">
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