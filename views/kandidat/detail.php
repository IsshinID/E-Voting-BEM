<div class="container-fluid">
<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
<div class="row">
    <div class="col-md-4">
        <div class="callout text-center">
            <img src="<?= base_url('assets/img/uploads/') . $kandidat['gambar']; ?>" class="img-thumbnail">
        </div>
    </div>
</div>
<div class="col-md-9" style="padding-top:20px;">
<table class="table table-striped">
    <tbody>
        <tr>
            <td width="150">Nomor Urut</td>
            <td>: <?= $kandidat['no_urut'];?></td>
        </tr>
        <tr>
            <td width="150">Presiden</td>
            <td>: <?= $kandidat['ketua'];?></td>
        </tr>
        <tr>
            <td width="150">Wakil Presiden</td>
            <td>: <?= $kandidat['wakil'];?></td>
        </tr>
        <tr>
            <td width="150">Semester</td>
            <td>: <?= $kandidat['semester'];?></td>
        </tr>
        <tr>
            <td width="150">visi</td>
            <td>: <?= $kandidat['visi'];?></td>
        </tr>
        <tr>
            <td width="150">misi</td>
            <td>: <?= $kandidat['misi'];?></td>
        </tr>
        <tr>
            <td width="150">Program Kerja</td>
            <td>: <?= $kandidat['proker'];?></td>
        </tr>
        <tr>
            <td width="150">Prestasi</td>
            <td>: <?= $kandidat['prestasi'];?></td>
        </tr>
        <tr>
            <td width="150">Periode</td>
            <td>: <?= $kandidat['periode'];?></td>
        </tr>
    </tbody>
</table>
    <div class="col-md col-md-offset-3">
        <a href="<?= base_url('kandidat');?>" class="btn btn-danger">Kembali</a>
    </div>
</div>
</div>