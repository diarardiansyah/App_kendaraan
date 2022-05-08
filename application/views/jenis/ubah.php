<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <h5 class="card-header">Form ubah data jenis kendaraan</h5>
            <div class="card-body">
                <form action="" method="post">
                    <input type="hidden" name="id_jenis_kendaraan" value="<?= $jenis['id_jenis_kendaraan']; ?>">
                    <div class="form-group">
                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                        <input type="text" class="form-control" id="jenis_kendaraan" name="jenis_kendaraan" value="<?= $jenis['jenis_kendaraan']; ?>">
                        <small class="text-form text-danger"><?= form_error('jenis_kendaraan'); ?></small>
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