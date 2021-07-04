
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url('aset/'); ?>vendor/bootstrap/css/bootstrap.min.css">
    <style type="text/css">
        body {
            background-color: purple;
            padding-top: 20px;
		}
        h2 {
			color: #fefefe;
            font-family: Arial;
			padding-bottom: 10px;
		}
    </style>
</head>
<body>
    <div class="container">
            <div class="text-center">
				<h2> Calon Kandidat Presiden BEM</h2>
			</div>
            <div class="card mb-3">
			</div>
        <div class="row">
        <?php foreach($kandidat as $kdt) : ?>
            <div class="col-md-3">
                <div class="card border-primary mb-3" style="max-width: 25rem;">
                    <div class="card-header" style="color: #black;"><img src="<?= base_url('assets/img/uploads/') . $kdt['gambar']; ?>" class="img-thumbnail"></div>
                        <div class="card-body text-primary">
                            <h5 align="center" class="card-title"><?= $kdt['no_urut']; ?></h5>
							<div class="card-text" align="center">
								<a href="<?= base_url(); ?>calon/profil/<?= $kdt['id']; ?>" class="btn btn-warning"> Lihat Profil</a>
								<a href="<?= base_url(); ?>calon/vote/<?= $kdt['id']; ?>" class="btn btn-success" onclick='return confirm("Yakin untuk memilih calon ini?");'> Vote</a>
							</div>
                        </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>


    <script src="<?= base_url('aset/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
</body>
</html>