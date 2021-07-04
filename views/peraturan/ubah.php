<div class="container">
    <div class="row" mt-3>
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">
                    Form Ubah Peraturan
                </div>
                <div class="card-body">
                <form action="" method="post">
                <input type="hidden" name="id" value="<?= $peraturan['id'];?>">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" value="<?= $peraturan['judul'];?>">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea type="text" class="form-control" name="isi" id="isi" value="<?= $peraturan['isi'];?>"></textarea>
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('isi'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="periode">
                            Tahun
                        </label>
                        <select class="form-control" id="tahun" name="tahun">
                        <?php foreach( $tahun as $t ) : ?>
                            <?php if ($t == $peraturan['tahun']) : ?>
                                <option value="<?= $t; ?>" selected><?= $t; ?></option>
                            <?php else : ?>
                                <option value="<?= $t; ?>"><?= $t; ?></option>
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