<!-- Begin Page Content -->
<div class="container-fluid">

<?php if( $this->session->flashdata('flash') ): ?>

<div class="row mt-3">
    <div class="col-md-6">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Data Pemilih <Strong> berhasil</Strong> <?= $this->session->flashdata('flash'); ?>.
            <button type="button" class="close" data-dismiss="alert" aria-label="close"> 
            <span aria-hidden="true">&times</span></button>
        </div>
    </div>
</div>
<?php endif; ?>
<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

<div class="row">
    <div class="col-md">
    <a href="<?= base_url('pemilih/print'); ?>" class="btn btn-warning mb-3">
        <i class="fa fa-file"></i>&nbsp Print</a>

        <!-- Topbar Search -->
                <form action="<?= base_url('pemilih'); ?>" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for..." name="keyword" autocomplete="off" autofocus>
                        <div class="input-group-append">
                            <input class="btn btn-primary" type="submit" name="submit">
                        </div>
                    </div>
                </form>
    
        <table class="table table-hover">
        <h5> Result : <?= $total_rows; ?></h5>
            <thead>
                <tr align="center">
                    <th scope="col">No</th>
                    <th scope="col">GID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Periode</th>
                    <th scope="col">Program Studi</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody> 
            <!-- kalo ga ada data yg dihasilkan -->
            <?php if(empty($pemilih)) :?>
                <tr>
                    <td colspan="4">
                        <div class="alert alert-danger" role="alert">
                            Data Not Found!
                        </div>
                    </td>
                </tr>
            <?php endif; ?>
            <!-- looping -->
            <?php foreach($pemilih as $pml) : ?>
                <tr>
                    <td align="center" scope="row"> <?= ++$start; ?></td>
                    <td align="center"><?= $pml['gid']; ?></td>
                    <td><?= $pml['nama']; ?></td>
                    <td align="center"><?= $pml['status']; ?></td>
                    <td align="center"><?= $pml['periode']; ?></td>
                    <td align="center"><?= $pml['prodi']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>pemilih/ubah/<?= $pml['id']; ?>" class="badge badge-success">Ubah</a>
                        <a href="<?= base_url(); ?>pemilih/hapus/<?= $pml['id']; ?>" class="badge badge-danger" 
                        onclick="return confirm('Yakin hapus data?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <!-- end table -->
        <?= $this->pagination->create_links(); ?>

    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->


