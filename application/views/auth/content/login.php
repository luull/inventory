<html>

<head>
	<title><?php echo $title ?> | SSP</title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/quixlab/css/style.css') ?>">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
</head>

<body class="h-100">

	<!--*******************
        Preloader start
    ********************-->
	<div id="preloader">
		<div class="loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
			</svg>
		</div>
	</div>
	<!--*******************
        Preloader end
    ********************-->





	<div class="login-form-bg h-100">
		<div class="container h-100">
			<div class="row justify-content-center h-100">
				<div class="col-xl-6">
					<div class="form-input-content">
						<div class="card login-form mb-0">
							<div class="card-body pt-5">
								<a class="text-center" href="index.html">
									<h2 style="font-family: 'Montserrat', sans-serif;">Sistem Sarana & Prasarana Sekolah</h2>
								</a>
								<div class="text-center mt-5">

									<img src="<?= base_url('assets/quixlab/images/undraw_reading_list_4boi.svg') ?>" style="width: 300px;" class="img-fluid" alt="">
								</div>

								<form class="mt-5 mb-5 login-input" action="<?= base_url('login-act') ?>" method="post">
									<?php if ($this->session->flashdata('alert')) : ?>
										<div class="alert alert-danger">
											<?= $this->session->flashdata('alert') ?>
										</div>
									<?php endif; ?>
									<div class="input-group mb-3">
										<div class="input-group-prepend" style="background-color: transparent !important;">
											<span class="input-group-text" id="basic-addon1" style="background-color: transparent !important;border-right:0px !important;"><i class="fa fa-user text-warning"></i></span>
										</div>
										<input class="form-control  <?php if (set_value('username') == '' && form_error('username') == true) {
																		echo 'is-invalid';
																	} elseif (set_value('username') != '' && form_error('username') != true) {
																		echo 'is-valid';
																	} ?>" value="<?= set_value('username') ?>" style="border-left:0px !important;" placeholder="Masukan Username" id="username" type="text" name="username">
									</div>
									<div class="input-group mb-3">
										<div class="input-group-prepend" style="background-color: transparent !important;">
											<span class="input-group-text" id="basic-addon1" style="background-color: transparent !important;border-right:0px !important;"><i class="fa fa-key text-warning"></i></span>
										</div>
										<input class="form-control <?php if (set_value('password') == '' && form_error('password') == true) {
																		echo 'is-invalid';
																	} ?> elseif(set_value('username') != '' && form_error('password ') != true)  {echo 'is-valid';} ?>" value="<?= set_value('password') ?>" value="<?= set_value('password') ?>" style="border-left:0px !important;" placeholder="Masukan password" id="password" type="password" name="password">
									</div>
									<button class="btn btn-warning  submit w-100">Sign In</button>
								</form>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>