<!DOCTYPE html>
<html lang="en">

<head>
	<title>List Kandidat</title>
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

	<style type="text/css">
		body {
            background-color: purple;
		}
		h2 {
			color: #fefefe;
            font-family: Arial;
			padding-top: 30px;
		}
		#sidebar-divider {
			color: #fefefe;
		}
		h5 {
			text-align: center;
		}
	</style>

</head>

<body>

		<div class="container">
			<div class="text-center" style="padding-top:20px;">
				<h2> Profil Calon Kandidat</h2>
			</div>

			<div class="card mb-3">
			</div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
					<div class="row">
					<div class="col-md-4">
							<div class="text-center" style="padding-top: 30px;">
							<img src="<?= base_url('assets/img/uploads/') . $kandidat['gambar']; ?>" class="img-thumbnail">
							</div>
						</div> 

                    <div class="col-md-8">
                        <h3 style="color:#eee;">Informasi Calon</h3>
                        <table class="table table-striped" style="background: #fff;">
                            <tr>
                                <td width="200px">Presiden</td>
                                <td>: <?= $kandidat['ketua'];?></td>
                            </tr>
                            <tr>
                                <td width="200px">Wakil</td>
                                <td>: <?= $kandidat['wakil'];?></td>
                            </tr>
							<tr>
                                <td width="200px">Semester</td>
                                <td>: <?= $kandidat['semester'];?></td>
                            </tr>
                            <tr>
                                <td width="200px">Visi</td>
                                <td>: <?= $kandidat['visi'];?></td>
                            </tr>
                            <tr>
                                <td width="200px">Misi</td>
                                <td>: <?= $kandidat['misi'];?></td>
                            </tr>
							<tr>
                                <td width="200px">Program Kerja</td>
                                <td>: <?= $kandidat['proker'];?></td>
                            </tr>
							<tr>
                                <td width="200px">Prestasi</td>
                                <td>: <?= $kandidat['prestasi'];?></td>
                            </tr>
                            <tr>
                                <td width="200px">Periode</td>
                                <td>: <?= $kandidat['periode'];?></td>
                            </tr>
                        </table>
						<button onclick="window.history.go(-1)" class="btn btn-warning">Kembali</button>
                    </div>
					</div>          
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