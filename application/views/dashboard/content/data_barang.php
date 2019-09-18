
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
  			<i class="fas fa-table"></i> Data Barang <a href="tambah-barang"><span class="badge badge-danger float-right"><i class="fa fa-plus"></i> Tambah</span></a>
  		</div>

  		<div class="card-body row">
  			<div class="table-responsive">
	  			<table class='table table-striped table-bordered table-sm table-hover'>
	  				<thead>
	  					<tr>
	  						<th>Nomor</th>
	  						<th>Nama Barang</th>
	  						<th>Tgl Masuk</th>
	  						<th>Jml Masuk</th>
	  						<th>Suplier</th>
	  						<th>Kondisi</th>
	  						<th>Lokasi</th>
	  						<th>Sumber Dana</th>
	  						<th>Spesifikasi</th>
	  						<th>Opsi</th>
	  					</tr>
	  				</thead>

	  				<tbody>
	  					<?php $nomor = 1; ?>
	  					<?php foreach($barang as $row) : ?>

	  					<tr>
	  						<td><?= $nomor++?></td>
	  						<td><?= $row->nama_barang ?></td>
	  						<td><?= $row->tgl_masuk  ?> </td>
	  						<td><?= $row->jml_masuk ?></td>
	  						<td><?= $row->nama_suplier  ?></td>
	  						<td><?= $row->kondisi ?> </td>
	  						<td><?= $row->lokasi ?> </td>
	  						<td><?= $row->sumber_dana ?> </td>
	  						<td><?= $row->spesifikasi ?> </td>
	  						<td>
	  							<a href="<?= base_url('edit-barang/'.$row->id_barang) ?>" class="btn btn-sm mr-1 btn-outline-warning">
	  								<i class="fa fa-edit"></i>
	  							</a>

	  							<a href="<?= base_url('hapus-barang/'.$row->id_barang) ?>" class="btn btn-sm btn-outline-danger">
	  								<i class="fa fa-trash-alt"></i>
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