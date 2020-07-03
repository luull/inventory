<html>

<head>
	<title><?php echo $title ?> | SSP</title>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/quixlab/css/style.css') ?>">

</head>

<body>

	<div id="preloader">
		<div class="loader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
			</svg>
		</div>
	</div>

	<div id="main-wrapper">
		<div class="nav-header" style="background-color: orange !important;">
			<div class="brand-logo">
				<a href="index.html">
					<b class="logo-abbr"><img src="<?= base_url('assets/quixlab/images/logo-bpb2.png'); ?>" alt=""> </b>
					<span class="logo-compact"><img src="<?= base_url('assets/quixlab/images/logo-bpb.png') ?>" alt=""></span>
					<span class="brand-title">
						<img src="<?= base_url('assets/quixlab/images/logo-bpb.png') ?>" alt="">
					</span>
				</a>
			</div>
		</div>

		<div class="header">
			<div class="header-content clearfix">

				<div class="nav-control">
					<div class="hamburger">
						<span class="toggle-icon"><i class="icon-menu"></i></span>
					</div>
				</div>

				<div class="header-right">
					<ul class="clearfix">



						<li class="icons dropdown">
							<div class="user-img c-pointer position-relative" data-toggle="dropdown">
								<span class="activity active"></span>
								<img src="<?= base_url('assets/quixlab/images/user/1.png') ?>" height="40" width="40" alt="">
							</div>
							<div class="drop-down dropdown-profile   dropdown-menu">
								<div class="dropdown-content-body">
									<ul>


										<li><a href="<?= base_url('') ?>logout"><i class="icon-key"></i> <span>Logout</span></a></li>
									</ul>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--**********************************
            Header end ti-comment-alt
        ***********************************-->

		<!--**********************************
            Sidebar start
        ***********************************-->
		<div class="nk-sidebar">
			<div class="nk-nav-scroll">
				<ul class="metismenu" id="menu">
					<li class="nav-label">Dashboard</li>
					<li>
						<a href="<?= base_url('') ?>dashboard" aria-expanded="false">
							<i class="icon-home menu-icon"></i><span class="nav-text">Beranda</span>
						</a>
					</li>

					<li>
						<a href="<?= base_url('') ?>barang" aria-expanded="false">
							<i class="icon-bag menu-icon"></i><span class="nav-text">Produk</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('') ?>tambah-stok" aria-expanded="false">
							<i class="icon-plus menu-icon"></i><span class="nav-text">Tambah stok</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('') ?>suplier" aria-expanded="false">
							<i class="ti-file menu-icon"></i><span class="nav-text">Data suplier</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('') ?>data-pinjam" aria-expanded="false">
							<i class="ti-agenda menu-icon"></i><span class="nav-text">Data pinjam</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('') ?>pinjam" aria-expanded="false">
							<i class="ti-clipboard menu-icon"></i><span class="nav-text">Menu pinjam</span>
						</a>
					</li>
					<li>
						<a href="<?= base_url('') ?>user" aria-expanded="false">
							<i class="ti-user menu-icon"></i><span class="nav-text">Kelola user</span>
						</a>
					</li>

				</ul>
			</div>
		</div>

		<div class="content-body">

			<div class="row page-titles mx-0">
				<div class="col p-md-0">
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
						<li class="breadcrumb-item active"><a href="javascript:void(0)"><?php echo $title ?> </a></li>
					</ol>
				</div>
			</div>
			<!-- row -->

			<div class="container-fluid">