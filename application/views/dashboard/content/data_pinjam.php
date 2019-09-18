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
  			<i class="fas fa-table"></i> Data Barang <a onclick="window.print()"><span class="badge badge-primary float-right"><i class="fa fa-print"></i> Print</span></a>
  		</div>

  		<div class="card-body row">
  			<div class="table-responsive">
	  			<table class='table table-striped table-bordered table-sm table-hover'>
	  				<thead>
	  					<tr>
	  						<th>Nomor</th>
	  						<th>ID Pinjam</th>
	  						<th>Peminjam</th>
	  						<th>Data Pinjam</th>
	  						<th>Tgl Pinjam</th>
	  						<th>Tgl Kembali</th>
	  						<th>Nama Barang</th>
	  						<th>Kondisi</th>
	  						<th>Lokasi</th>
	  						<th>Status</th>
	  						<th>Opsi</th>
	  					</tr>
	  				</thead>

	  				<tbody>
	  					<?php $nomor = 1; ?>
	  					<?php foreach($pinjam as $row) : ?>

	  					<tr>
	  						<td><?= $nomor++?></td>
	  						<td><?= $row->id_pinjam ?></td>
	  						<td><?= $row->peminjam ?></td>
	  						<td><?= $row->nama_barang  ?> </td>
	  						<td><?= $row->jml_barang ?></td>
	  						<td><?= $row->tgl_pinjam  ?></td>
	  						<td><?= $row->tgl_kembali ?> </td>
	  						<td><?= $row->kondisi ?> </td>
	  						<td><?= $row->lokasi ?> </td>
	  						<td>
	  							<?php if($row->status == 'pinjam') : ?>

								<small class="badge badge-danger"><?= $row->status ?></small>

	  							<?php endif; ?>

	  							<?php if($row->status == 'selesai') : ?>

								<small class="badge badge-success"><i class="fa fa-check-circle"></i><?= $row->status ?></small>

	  							<?php endif; ?>
	  						</td>
	  						<td>
	  							<?php if($row->status == 'pinjam') : ?>

								<a href="<?= base_url('edit-pinjam/'.$row->id_pinjam) ?>" class="btn btn-sm mr-1 btn-outline-warning">
	  								<i class="fa fa-check-circle"></i> Selesaikan
	  							</a>

	  							<?php endif; ?>

	  							<?php if($row->status == 'selesai') : ?>

								<a href="<?= base_url('hapus-pinjam/'.$row->id_pinjam) ?>" class="btn btn-sm mr-1 btn-outline-warning">
	  								<i class="fa fa-trash-alt"></i> Hapus
	  							</a>

	  							<?php endif; ?>
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