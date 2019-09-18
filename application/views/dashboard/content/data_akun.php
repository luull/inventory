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
  			<i class="fas fa-table"></i> Data User <a href="tambah-user"><span class="badge badge-danger float-right"><i class="fa fa-plus"></i> Tambah</span></a>
  		</div>

  		<div class="card-body row">
  			<div class="table-responsive">
	  			<table class='table table-striped table-bordered table-sm table-hover'>
	  				<thead>
	  					<tr>
	  						<th>Nomor</th>
	  						<th>ID User</th>
	  						<th>Nama</th>
	  						<th>Username</th>
	  						<th>Level</th>
	  						<th>Status</th>
	  						<th>Blok User</th>
	  						<th>Opsi</th>
	  					</tr>
	  				</thead>

	  				<tbody>
	  					<?php $nomor = 1; ?>
	  					<?php foreach($akun as $row) : ?>

	  					<tr>
	  						<td><?= $nomor++?></td>
	  						<td><?= $row->id_user ?></td>
	  						<td><?= $row->nama ?></td>
	  						<td><?= $row->username ?> </td>
	  						<td>
	  							<?php if($row->level == 'administrator') : ?>

	  							<p class="text-danger"><?= $row->level ?></p>

	  							<?php endif; ?>

	  							<?php if($row->level == 'manajemen') : ?>

	  							<p class="text-warning"><?= $row->level ?></p>

	  							<?php endif; ?>

	  							<?php if($row->level == 'peminjam') : ?>

	  							<p class="text-success"><?= $row->level ?></p>

	  							<?php endif; ?>
	  						</td>
	  						<td>
	  							<?php if($row->status == 'aktif') : ?>

	  							<small class="badge badge-success"><i class="fa fa-check-circle"></i> <?= $row->status ?></small>

	  							<?php endif; ?>

	  							<?php if($row->status == 'blokir') : ?>

	  							<small class="badge badge-danger"><i class="fa fa-times-circle"></i> <?= $row->status ?></small>

	  							<?php endif; ?>
	  						</td>

	  						<td>
	  							<?php if($row->level == 'administrator') : ?>

	  							<button type='button' class="btn btn-sm btn-block btn-secondary"><i class="fa fa-user-lock"></i> Terkunci</button>

	  							<?php endif; ?>

	  							<?php if($row->level != 'administrator' && $row->status == 'aktif') : ?>

	  							<a href="<?= base_url("update-status/{$row->id_user}/blokir") ?>" class="btn btn-sm btn-block btn-danger">
	  								<i class="fa fa-user-times"></i> Blokir User
	  							</a>

	  							<?php endif; ?>

	  							<?php if($row->level != 'administrator' && $row->status == 'blokir') : ?>

	  							<a href="<?= base_url("update-status/{$row->id_user}/aktif") ?>" class="btn btn-sm btn-block btn-success">
	  								<i class="fa fa-user-times"></i> Aktifkan User
	  							</a>

	  							<?php endif; ?>
	  						</td>

	  						<td>

	  							<?php if($row->level == 'administrator') : ?>
	  								<button type='button' class="btn btn-secondary"><i class="fa fa-times"></i></button>
	  							<?php endif; ?>

	  							<?php if($row->level != 'administrator') : ?>
		  							<a href="<?= base_url("edit-user/{$row->id_user}") ?>" class="btn btn-sm mr-1 btn-outline-warning">
		  								<i class="fa fa-edit"></i>
		  							</a>

		  							<a href="<?= base_url('hapus-user/'.$row->id_user) ?>" class="btn btn-sm btn-outline-danger">
		  								<i class="fa fa-trash-alt"></i>
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