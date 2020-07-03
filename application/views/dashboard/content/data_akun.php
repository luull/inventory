  <?php if ($this->session->flashdata('alert')) : ?>
  	<div class="alert alert-success">
  		<h4 class="alert-heading"><i class="fa fa-check"></i> Berhasil</h4>
  		<p><?= $this->session->flashdata('alert') ?></p>
  	</div>
  <?php endif; ?>

  <div class='row'>
  	<div class='col-md-12'>

  		<div class='card'>
  			<div class='card-header'>
  				<h2 class="text-center" style="font-family: 'Montserrat', sans-serif;">Data user</h2>
  				<a href="tambah-user"><button class="btn btn-success float-right"><i class="fa fa-plus"></i> Tambah</button></a>
  			</div>


  			<div class="card-body row">
  				<div class="table-responsive">
  					<table class='table table-striped '>
  						<thead>
  							<tr>
  								<th>No</th>
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
  							<?php foreach ($akun as $row) : ?>

  								<tr>
  									<td><?= $nomor++ ?></td>
  									<td><?= $row->id_user ?></td>
  									<td><?= $row->nama ?></td>
  									<td><?= $row->username ?> </td>
  									<td>
  										<?php if ($row->level == 'administrator') : ?>

  											<span class="badge badge-info px-2"><?= $row->level ?></span>

  										<?php endif; ?>

  										<?php if ($row->level == 'manajemen') : ?>

  											<span class="badge badge-warning px-2"><?= $row->level ?></span>

  										<?php endif; ?>

  										<?php if ($row->level == 'peminjam') : ?>

  											<span class="badge badge-success px-2"><?= $row->level ?></span>

  										<?php endif; ?>
  									</td>
  									<td>
  										<?php if ($row->status == 'aktif') : ?>

  											<small class="badge badge-success"><i class="fa fa-check-circle"></i> <?= $row->status ?></small>

  										<?php endif; ?>

  										<?php if ($row->status == 'blokir') : ?>

  											<small class="badge badge-danger"><i class="fa fa-times-circle"></i> <?= $row->status ?></small>

  										<?php endif; ?>
  									</td>

  									<td>
  										<?php if ($row->level == 'administrator') : ?>

  											<button type='button' class="btn btn-sm btn-block btn-default"><i class="fa fa-lock"></i> Terkunci</button>

  										<?php endif; ?>

  										<?php if ($row->level != 'administrator' && $row->status == 'aktif') : ?>

  											<a href="<?= base_url("update-status/{$row->id_user}/blokir") ?>" class="btn btn-sm btn-block btn-danger">
  												<i class="fa fa-user-times"></i> Blokir User
  											</a>

  										<?php endif; ?>

  										<?php if ($row->level != 'administrator' && $row->status == 'blokir') : ?>

  											<a href="<?= base_url("update-status/{$row->id_user}/aktif") ?>" class="btn btn-sm btn-block btn-success">
  												<i class="fa fa-user-times"></i> Aktifkan User
  											</a>

  										<?php endif; ?>
  									</td>

  									<td>

  										<?php if ($row->level == 'administrator') : ?>
  											<button type='button' class="btn btn-default"><i class="fa fa-times"></i></button>
  										<?php endif; ?>

  										<?php if ($row->level != 'administrator') : ?>
  											<a href="<?= base_url("edit-user/{$row->id_user}") ?>" data-toggle="tooltip" data-placement="top" title="Edit"><i class="ti-pencil-alt color-muted m-r-5"></i>
  											</a>

  											<a href="<?= base_url('hapus-user/' . $row->id_user) ?>" class="text-danger" data-toggle="tooltip" data-placement="top" title="Hapus"><i class="ti-trash color-muted m-r-5"></i>
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