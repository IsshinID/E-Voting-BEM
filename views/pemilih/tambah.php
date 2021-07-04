<div class="container">
    <div class="row" mt-3>
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">
                    Form Input Pemilih 
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="gid">NIM / NIK</label>
                        <input type="number" class="form-control" name="gid" id="gid">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('gid'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="status">
                            Status
                        </label>
                        <select class="form-control" id="status" name="status">
                            <option value="Dosen">Dosen</option>
                            <option value="Mahasiswa">Mahasiswa</option>
                        </select>
                        <small class="form-text text-danger"><?= form_error('status'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="periode">
                            Periode
                        </label>
                        <select class="form-control" id="periode" name="periode">
                            <option value="2019/2020">2019/2020</option>
                            <option value="2020/2021">2020/2021</option>
                            <option value="2021/2022">2021/2022</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prodi">
                            Prodi
                        </label>
                        <select class="form-control" id="prodi" name="prodi">
                            <option value="Kesehatan Masyarakat">Kesehatan Masyarakat</option>
                            <option value="Ilmu Keperawatan">Ilmu Keperawatan</option>
                            <option value="Farmasi">Farmasi</option>
                            <option value="Profesi NERS">Profesi NERS</option>
                        </select>
                    </div>
                    <button type="submit" name="tambah" class="btn btn-primary float-right"><i class="fa fa-plus"></i>&nbsp Tambah Data</button>
                </form>
                </div>
            </div>
        
        
        </div>
    </div>
</div>