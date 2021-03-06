<div class="container">

    <?php if ( $this->session->flashdata('flash')) : ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">Proses upload
                <strong>gambar</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    </button>
            </div>
        </div>
   </div>
   <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form tambah data
            </div>
                <div class="card-body">
                  <?= form_open_multipart('kendaraan/tambah'); ?>
                    <div class="form-group">
                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                            <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan">
                                <?php foreach ( $jenis as $j ) : ?>
                                        <option value="<?= $j['id_jenis_kendaraan']; ?>"><?= $j['jenis_kendaraan']; ?></option>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_kendaraan">Nama Kendaraan</label>
                            <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan">
                            <smallm class="form-text text-danger"><?= form_error('nama_kendaraan'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_pabrikan">Pabrikan Kendaraan</label>
                            <select class="form-control" id="nama_pabrikan" name="nama_pabrikan">
                                <?php foreach ( $pabrikan as $pb ) : ?>
                                        <option value="<?= $pb['id_pabrikan_kendaraan']; ?>"><?= $pb['nama_pabrikan']; ?></option>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahun_kendaraan">Tahun Kendaraan</label>
                            <input type="text" class="form-control" id="tahun_kendaraan" name="tahun_kendaraan">
                            <small class="form-text text-danger"><?= form_error('tahun_kendaraan'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="warna_kendaraan">Warna Kendaraan</label>
                            <input type="text" class="form-control" id="warna_kendaraan" name="warna_kendaraan">
                            <small class="form-text text-danger"><?= form_error('warna_kendaraan'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jenis_transmisi">Jenis Transmisi</label>
                            <input type="text" class="form-control" id="jenis_transmisi" name="jenis_transmisi">
                            <small class="form-text text-danger"><?= form_error('jenis_transmisi'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="harga_kendaraan">Harga Kendaraan</label>
                            <input type="text" class="form-control" id="harga_kendaraan" name="harga_kendaraan">
                            <small class="form-text text-danger"><?= form_error('harga_kendaraan'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="gambar_kendaraan">Gambar Kendaraan</label>
                            <input type="file" class="form-control" id="gambar_kendaraan" name="gambar_kendaraan" accept="image/png, image/jpeg, image/jpg, image/gif">
                    </div>
                    <?php if (isset($error)) : ?>
					    <div class="invalid-feedback"><?= $error ?></div>
				    <?php endif; ?>
                    <div class="form-group">
                        <button type="submit" nama="kirim" class="btn btn-primary">Tambah Data</button>
                    </div>
                <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>