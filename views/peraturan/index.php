<!-- Begin Page Content -->
<div class="container-fluid">

<?php if( $this->session->flashdata('flash') ): ?>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Peraturan <Strong> berhasil</Strong> <?= $this->session->flashdata('flash'); ?>.
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
        <a href="<?= base_url('peraturan/tambah'); ?>" class="btn btn-primary mb-3">
        <i class="fa fa-plus"></i>&nbsp Tambah Data</a>
        
        
        <table class="table table-hover">
            <thead>
                <tr align="center">
                    <th scope="col">Judul</th>
                    <th scope="col">isi</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
            <!-- looping -->
            <?php $i = 1; ?>
            <?php foreach($peraturan as $prt) : ?>
                <tr align="center">
                    <!-- <th scope="row"> <?= $i; ?></th> -->
                    <td><?= $prt['judul']; ?></td>
                    <td><?= $prt['isi']; ?></td>
                    <td><?= $prt['tahun']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>peraturan/ubah/<?= $prt['id']; ?>" class="badge badge-success">Ubah</a>
                        <a href="<?= base_url(); ?>peraturan/hapus/<?= $prt['id']; ?>" class="badge badge-danger" 
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


