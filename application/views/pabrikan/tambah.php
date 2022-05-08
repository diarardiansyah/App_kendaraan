<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">Form tambah data pabrikan</h5>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for="nama_pabrikan">Nama Pabrikan</label>
                        <input type="text" class="form-control" id="nama_pabrikan" name="nama_pabrikan">
                        <small class="text-form text-danger"><?= form_error('nama_pabrikan'); ?></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </form>
            </div>
            </div> 
        </div>
    </div>
</div>