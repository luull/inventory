
  <?php if($this->session->flashdata('alert')) : ?>
	  <div class="alert alert-primary">
	  	<h5><i class="fa fa-check"></i> Berhasil</h5>
	  	<p><?= $this->session->flashdata('alert') ?></p>
	  </div>
  <?php endif; ?>

<div class='row'>

  <div class='col-md-12'>

  	<div class='card'>
  		<div class='card-header'>
  			<i class="fas fa-table"></i> Data Barang Tersedia
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
	  						<th>Opsi</th>
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
	  						<td>
	  							<a href="<?= base_url('pinjam-barang/'.$row->id_barang) ?>" class="btn btn-block btn-sm btn-outline-success">
	  								Pinjam Barang
	  							</a>
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