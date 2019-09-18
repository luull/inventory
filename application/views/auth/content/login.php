<html>
<head>
	<title><?php echo $title ?> | SSP</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/bootstrap/css/bootstrap.css')?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/fontawesome/all.css')?>">
</head>
<body class="bg-dark">
		

<form action="<?= base_url('login-act')?>" method="post">
	<section class="content mt-5">
		<div class="container nav-wrapper">

			<?php if($this->session->flashdata('alert')) : ?>
				<div class="alert alert-danger">
					<?= $this->session->flashdata('alert') ?>
				</div>
			<?php endif; ?>


			<div class="card">
				<div class="card-header">
					<h3 class="text-center mt-1 mb-1">
						Sistem Sarana & Prasarana Sekolah
					</h3>
				</div>
				<div class="card card-body">
					
						<div class="row">
							<div class="form-group col-md-12">
								<label for="username">Username</label>
								<div class="input-group">
									<input class="form-control <?php if(set_value('username') == '' && form_error('username') == true) {echo 'is-invalid';} elseif(set_value('username') != '' && form_error('username') != true)  {echo 'is-valid';} ?>" value="<?= set_value('username') ?>" placeholder="Masukan Username" id="username" type="text" name="username">
								</div>
							</div>

							<div class="form-group col-md-12">
								<label for="password">password</label>
								<div class="input-group">
									<input class="form-control <?php if(set_value('password') == '' && form_error('password') == true) {echo 'is-invalid';} ?> elseif(set_value('username') != '' && form_error('password ') != true)  {echo 'is-valid';} ?>" value="<?= set_value('password') ?>" value="<?= set_value('password') ?>" placeholder="Masukan password" id="password" type="password" name="password">
								</div>
							</div>

						</div>

				</div>

				<div class="card card-footer">
					<div class="row">
						<div class="col-md-6">

						</div>
						<div class="col-md-6">
							<button class="float-right btn btn-md btn-outline-success"><i class="fas fa-sign-in-alt"></i> Sign In</button>
							<button class="float-right btn btn-md btn-outline-danger mr-2"><i class="fas fa-info-circle"></i> Reset</button>
						</div>
					</div>
				</div>
			</div>		
	</section>
</form>