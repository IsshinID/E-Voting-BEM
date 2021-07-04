<div class="container">
    <div class="row" mt-3>
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">
                    Form Ubah Kandidat
                </div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $kandidat['id'];?>">
                    <div class="form-group">
                        <label for="nomor">Nomor Urut</label>
                        <input type="text" class="form-control" name="nomor" id="nomor" value="<?= $kandidat['no_urut'];?>">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('nomor'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="ketua">Presiden</label>
                        <input type="text" class="form-control" name="ketua" id="ketua" value="<?= $kandidat['ketua'];?>">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('ketua'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="wakil">Wakil</label>
                        <input type="text" class="form-control" name="wakil" id="wakil" value="<?= $kandidat['wakil'];?>">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('wakil'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="semester">Semester</label>
                        <input type="text" class="form-control" name="semester" id="semester" value="<?= $kandidat['semester'];?>">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('semester'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="visi">Visi</label>
                        <textarea class="form-control" name="visi" id="visi" value="<?= $kandidat['visi'];?>"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="misi">Misi</label>
                        <textarea class="form-control" name="misi" id="misi" value="<?= $kandidat['misi'];?>"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="proker">Program Kerja</label>
                        <textarea class="form-control" name="proker" id="proker" value="<?= $kandidat['proker'];?>"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="prestasi">Prestasi</label>
                        <textarea class="form-control" name="prestasi" id="prestasi" value="<?= $kandidat['prestasi'];?>"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="userfile">Gambar Paslon</label>
                        <input type="file" class="form-control" name="userfile" id="userfile" value=<?= $kandidat['gambar'];?>>
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('userfile'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="periode">
                            Periode
                        </label>
                        <select class="form-control" id="periode" name="periode">
                        <?php foreach( $periode as $p ) : ?>
                            <?php if ($p == $kandidat['periode']) : ?>
                                <option value="<?= $p; ?>" selected><?= $p; ?></option>
                            <?php else : ?>
                                <option value="<?= $p; ?>"><?= $p; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <button type="submit" name="ubah" class="btn btn-primary float-right"> Ubah Data</button>
                </form>
                </div>
            </div>
        
        
        </div>
    </div>
</div>