<!-- Begin Page Content -->
<div class="container-fluid">

<?php if( $this->session->flashdata('flash') ): ?>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Kandidat <Strong> berhasil</Strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="close"> 
            <span aria-hidden="true">&times</span></button>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

<div class="row">
    <div class="col-lg">
        <a href="<?= base_url('kandidat/tambah'); ?>" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i>&nbsp Tambah Data</a>

        <a href="<?= base_url('kandidat/print'); ?>" class="btn btn-warning mb-3">
        <i class="fa fa-file"></i>&nbsp Print</a>
        <table class="table table-hover">
            <thead>
                <tr align="center">
                    <th scope="col">Nomor Urut</th>
                    <th scope="col">Ketua</th>
                    <th scope="col">Wakil</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <!-- looping -->
            <?php $i = 1; ?>
            <?php foreach($kandidat as $kdt) : ?>
                <tr>
                    <!-- <th scope="row"> <?= $i; ?></th> -->
                    <td align="center"><?= $kdt['no_urut']; ?></td>
                    <td><?= $kdt['ketua']; ?></td>
                    <td><?= $kdt['wakil']; ?></td>
                    <td align="center"><?= $kdt['periode']; ?></td>
                    <td align="center">
                        <a href="<?= base_url(); ?>kandidat/detail/<?= $kdt['id']; ?>" class="badge badge-primary">Detail</a>
                        <a href="<?= base_url(); ?>kandidat/ubah/<?= $kdt['id']; ?>" class="badge badge-success">Ubah</a>
                        <a href="<?= base_url(); ?>kandidat/hapus/<?= $kdt['id']; ?>" class="badge badge-danger" 
                        onclick="return confirm('Yakin hapus data?');">Hapus</a>
                    </td>
                </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
        <!-- end table -->
    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


