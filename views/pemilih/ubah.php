<div class="container">
    <div class="row" mt-3>
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">
                    Form Ubah Pemilih
                </div>
                <div class="card-body">
                <form action="" method="post">
                <input type="hidden" name="id" value="<?= $pemilih['id'];?>">
                    <div class="form-group">
                        <label for="gid">GID</label>
                        <input type="number" class="form-control" name="gid" id="gid" value="<?= $pemilih['gid'];?>"readonly>
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('gid'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" value="<?= $pemilih['nama'];?>">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="status">
                            Status
                        </label>
                        <select class="form-control" id="status" name="status">
                        <?php foreach( $status as $st ) : ?>
                            <?php if ($st == $pemilih['status']) : ?>
                                <option value="<?= $st; ?>" selected><?= $st; ?></option>
                            <?php else : ?>
                                <option value="<?= $st; ?>"><?= $st; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="periode">
                            Periode
                        </label>
                        <select class="form-control" id="periode" name="periode">
                        <?php foreach( $periode as $p ) : ?>
                            <?php if ($p == $pemilih['periode']) : ?>
                                <option value="<?= $p; ?>" selected><?= $p; ?></option>
                            <?php else : ?>
                                <option value="<?= $p; ?>"><?= $p; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="prodi">
                            Prodi
                        </label>
                        <select class="form-control" id="prodi" name="prodi">
                        <?php foreach( $prodi as $pr ) : ?>
                            <?php if ($pr == $pemilih['prodi']) : ?>
                                <option value="<?= $pr; ?>" selected><?= $pr; ?></option>
                            <?php else : ?>
                                <option value="<?= $pr; ?>"><?= $pr; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                    </div>
                    
                    <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                </form>
                </div>
            </div>
        
        
        </div>
    </div>
</div>