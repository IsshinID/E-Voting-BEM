<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Terimakasih</title>


    <style type="text/css">
        body {
            background-color: purple;
        }
        .img-thanks {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 250px;
            border-radius: 50%;
            overflow: hidden;
            margin: 0 auto;
        }
        h1, p{ 
            color: #fefefe;
            font-family: Arial;
            text-align: center;
        }
        a{
            color: #87CEEB;
            font-family: Arial;
            font-size: 20px;
        }
        span{
            color: #fefefe;
            font-size: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div align="center" style="padding-top:50px;padding-bottom:70px">
            <h1> Terima kasih atas Partisipasi anda</h1>
            <p> suara yang anda berikan menentukan masa depan kampus</p>
            <div>
                <img src="<?= base_url('aset/'); ?>images/logostikes.jpeg" class="img-thanks">
            </div>
        </div>
        <div align="center" style="padding-top:auto;padding-bottom:10%">
            <a href="<?= base_url('halaman');?>" class="button alert large"> Kembali ke Login</a>
        </div>
            <center><span>Copyright &copy; STIKES Harapan Ibu Jambi <?= date('Y')?></span></center>
    </div>
</body>
</html>