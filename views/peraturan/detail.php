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
				<h2> Peraturan Bagi Pemilih</h2>
			</div>
            <div class="card mb-3">
			</div>
        <div class="row">
        <?php foreach($peraturan as $prt) : ?>
            <div class="col-md-3">
                <div class="card border-primary mb-3" style="max-width: 25rem;">
                    <div align="center" class="card-header" style="color: #black;"><?= $prt['judul']; ?></div>
                        <div class="card-body text-primary">
                            <h5 class="card-title"><?= $prt['isi']; ?></h5>
                            <p align="center" class="card-text"><?= $prt['tahun']; ?></p>
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