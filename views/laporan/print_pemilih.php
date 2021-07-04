<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan Pemilih</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .line-title{
            border: 0;
            border-style: inset;
            border-top: 1px solid #000;
        }
    </style>
</head>
<body>
    <img src="<?= base_url('assets/'); ?>img/logostikes.jpeg" style="position: absolute; width: 50px; left: 150px;">

        <table style="width: 100%;">
            <tr>
                <td align="center">
                    <span style="line-height: 1.6; font-weight: bold;">
                        Laporan Pendaftaran Pemilih Pemilihan Presiden BEM Periode 2019/2020
                        <br> STIKES Harapan Ibu Jambi
                    </span>
                
                </td>
            </tr>
        </table>



    <hr class="line-title">

    <table class="table table-bordered">
        <tr align="center">
            <th>NO</th>
            <th>GID</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Periode</th>
            <th>Program Studi</th>
        </tr>

        <?php 
        $no= 1;
        foreach ($pemilih as $pml): ?>
        <tr>
            <td align="center"><?= $no; ?></td>
            <td align="center"><?= $pml['gid']; ?></td>
            <td><?= $pml['nama']; ?></td>
            <td align="center"><?= $pml['status']; ?></td>
            <td align="center"><?= $pml['periode']; ?></td>
            <td><?= $pml['prodi']; ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>