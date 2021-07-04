<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="<?= base_url('aset/'); ?>images/icons/favicon.ico" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('aset/'); ?>vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('aset/'); ?>fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('aset/'); ?>fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('aset/'); ?>vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('aset/'); ?>vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('aset/'); ?>vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('aset/'); ?>vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('aset/'); ?>vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?= base_url('aset/'); ?>css/util.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('aset/'); ?>css/main.css">
	<!--===============================================================================================-->
</head>

<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<div style="color: #eee; padding-left: 150%;">
						<ul>
							 <h2>
							 <a href="<?= base_url('peraturan/detail'); ?>" class="btn btn-warning mb-3">Baca Peraturan!</a>
							</h2>
						</ul>
					</div>

					<span class="login100-form-title p-b-50">
						Selamat Datang di Aplikasi E-Voting </br> Pemilihan Presiden BEM
					</span>
					<div class="login100-form-avatar">
						<img src="<?= base_url('aset/'); ?>images/logostikes.jpeg" alt="AVATAR">
					</div>
					<form class="user" method="post" action="<?= base_url('pemilih/gid');?>">
						<div class='text-danger float-center' style="padding-top: 8px;"><?= $this->session->flashdata('message'); ?></div>
						<div class="wrap-input100 rs1 validate-input" data-validate="Username is required">
							<input class="input100" type="number" id="gid" name="gid" required>
							<span class="label-input100">Masukkan Nomor Induk Anda...</span>
						</div>

						<div class="container-login100-form-btn">
							<button type="submit" class="login100-form-btn">
								Lanjutkan
							</button>
						</div>
				</form>
			</div>
		</div>
	</div>





	<!--===============================================================================================-->
	<script src="<?= base_url('aset/'); ?>vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('aset/'); ?>vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('aset/'); ?>vendor/bootstrap/js/popper.js"></script>
	<script src="<?= base_url('aset/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('aset/'); ?>vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('aset/'); ?>vendor/daterangepicker/moment.min.js"></script>
	<script src="<?= base_url('aset/'); ?>vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('aset/'); ?>vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="<?= base_url('aset/'); ?>js/main.js"></script>

</body>

</html>