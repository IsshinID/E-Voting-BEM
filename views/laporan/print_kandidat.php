<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laporan  Calon Kandidat</title>
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
                        Laporan Calon Kandidat Pemilihan Presiden BEM Periode XXXX
                        <br> STIKES Harapan Ibu Jambi
                    </span>
                
                </td>
            </tr>
        </table>



    <hr class="line-title">

    <table class="table table-bordered">
        <tr align="center">
            <th>NO</th>
            <th>Gambar</th>
            <th>Nomor Urut</th>
            <th>Presiden</th>
            <th>Wakil</th>
            <th>Semester</th>
            <th>visi</th>
            <th>Misi</th>
            <th>Program Kerja</th>
            <th>Prestasi</th>
            <th>Periode</th>
        </tr>

        <?php 
        $no= 1;
        foreach ($kandidat as $kdt): ?>
        <tr>
            <td align="center"><?= $no; ?></td>
            
            <td align="center"><img src="<?= base_url('assets/img/uploads/') . $kdt['gambar']; ?>" class="img-thumbnail" style="width: 10rem;"></td>
            <td align="center"><?= $kdt['no_urut']; ?></td>
            <td><?= $kdt['ketua']; ?></td>
            <td><?= $kdt['wakil']; ?></td>
            <td align="center"><?= $kdt['semester']; ?></td>
            <td><?= $kdt['visi']; ?></td>
            <td><?= $kdt['misi']; ?></td>
            <td><?= $kdt['proker']; ?></td>
            <td><?= $kdt['prestasi']; ?></td>
            <td align="center"><?= $kdt['periode']; ?></td>
        </tr>
        <?php $no++; ?>
        <?php endforeach; ?>
    </table>
    <script type="text/javascript">
        window.print();
    </script>

</body>
</html>