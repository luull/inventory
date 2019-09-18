
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
  			<i class="fas fa-table"></i> Data Barang <a href="tambah-suplier"><span class="badge badge-danger float-right"><i class="fa fa-plus"></i> Tambah</span></a>
  		</div>

  		<div class="card-body row">
  			<div class="table-responsive">
	  			<table class='table table-striped table-bordered table-sm table-hover'>
	  				<thead>
	  					<tr>
	  						<th>Nomor</th>
	  						<th>ID Suplier</th>
	  						<th>Nama Suplier</th>
	  						<th>Telpon Suplier</th>
	  						<th>Alamat Suplier</th>
	  						<th>Opsi</th>
	  					</tr>
	  				</thead>

	  				<tbody>
	  					<?php $nomor = 1; ?>
	  					<?php foreach($suplier as $row) : ?>

	  					<tr>
	  						<td><?= $nomor++?></td>
	  						<td><?= $row->id_suplier ?></td>
	  						<td><?= $row->nama_suplier  ?> </td>
	  						<td><?= $row->telp_suplier ?></td>
	  						<td><?= $row->alamat_suplier  ?></td>
	  						<td>
	  							<a href="<?= base_url('edit-suplier/'.$row->id_suplier) ?>" class="btn btn-sm mr-1 btn-outline-warning">
	  								<i class="fa fa-edit"></i>
	  							</a>

	  							<a href="<?= base_url('hapus-suplier/'.$row->id_suplier) ?>" class="btn btn-sm btn-outline-danger">
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