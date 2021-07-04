<div class="container">
    <div class="row" mt-3>
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">
                    Form Tambah Kandidat
                </div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nomor">Nomor Urut</label>
                        <input type="text" class="form-control" name="nomor" id="nomor">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('nomor'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="ketua">Presiden</label>
                        <input type="text" class="form-control" name="ketua" id="ketua">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('ketua'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="wakil">Wakil</label>
                        <input type="text" class="form-control" name="wakil" id="wakil">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('wakil'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" class="form-control" name="semester" id="semester">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('semester'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="visi">Visi</label>
                        <textarea class="form-control" name="visi" id="visi"></textarea>
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('visi'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="misi">Misi</label>
                        <textarea class="form-control" name="misi" id="misi"></textarea>
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('misi'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="proker">Program Kerja</label>
                        <textarea class="form-control" name="proker" id="proker"></textarea>
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('proker'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="prestasi">Prestasi</label>
                        <textarea class="form-control" name="prestasi" id="prestasi"></textarea>
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('prestasi'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="userfile">Gambar Paslon</label>
                        <input type="file" class="form-control" name="userfile" id="userfile">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('userfile'); ?></small>
                        <!-- end nampilin  -->
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
                    <button type="submit" name="tambah" class="btn btn-primary float-right"> <i class="fa fa-plus"></i>&nbsp Tambah Data</button>
                </form>
                </div>
            </div>
        
        
        </div>
    </div>
</div>