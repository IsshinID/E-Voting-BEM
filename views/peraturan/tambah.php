<div class="container">
    <div class="row" mt-3>
        <div class="col-md-12">
            
            <div class="card">
                <div class="card-header">
                    Form Tambah Peraturan
                </div>
                <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul">
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('judul'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="isi">Isi</label>
                        <textarea type="text" class="form-control" name="isi" id="isi"></textarea>
                        <!-- nampilin eror -->
                        <small class="form-text text-danger"><?= form_error('isi'); ?></small>
                        <!-- end nampilin  -->
                    </div>
                    <div class="form-group">
                        <label for="periode">
                            Tahun
                        </label>
                        <select class="form-control" id="tahun" name="tahun">
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