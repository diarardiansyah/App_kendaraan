<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                Form ubah data kendaraan
            </div>
                <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="hidden" name="id_kendaraan" value="<?= $kendaraan['id_kendaraan']; ?>">
                        <input type="hidden" name="oldImage" value="<?= $kendaraan['gambar_kendaraan']; ?>">
                        <label for="jenis_kendaraan">Jenis Kendaraan</label>
                            <select class="form-control" id="jenis_kendaraan" name="jenis_kendaraan">
                                <?php foreach ( $jenis as $j ) : ?>
                                    <?php if ( $j == $kendaraan['id_jenis_kendaraan']) : ?>
                                        <option value="<?= $j['id_jenis_kendaraan']; ?>" selected><?= $j['jenis_kendaraan']; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $j['id_jenis_kendaraan']; ?>"><?= $j['jenis_kendaraan']; ?></option>
                                    <?php endif ; ?>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="nama_kendaraan">Nama Kendaraan</label>
                            <input type="text" class="form-control" id="nama_kendaraan" name="nama_kendaraan" value="<?= $kendaraan['nama_kendaraan']; ?>">
                            <smallm class="form-text text-danger"><?= form_error('nama_kendaraan'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama_pabrikan">Pabrikan Kendaraan</label>
                            <select class="form-control" id="nama_pabrikan" name="nama_pabrikan">
                                <?php foreach ( $pabrikan as $pb ) : ?>
                                    <?php if ( $pb == $kendaraan['nama_pabrikan']) : ?>
                                        <option value="<?= $pb['id_pabrikan_kendaraan']; ?>" selected><?= $pb['nama_pabrikan']; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $pb['id_pabrikan_kendaraan']; ?>"><?= $pb['nama_pabrikan']; ?></option>
                                    <?php endif ; ?>
                                <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tahun_kendaraan">Tahun Kendaraan</label>
                            <input type="text" class="form-control" id="tahun_kendaraan" name="tahun_kendaraan" value="<?= $kendaraan['tahun_kendaraan']; ?>">
                            <small class="form-text text-danger"><?= form_error('tahun_kendaraan'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="warna_kendaraan">Warna Kendaraan</label>
                            <input type="text" class="form-control" id="warna_kendaraan" name="warna_kendaraan" value="<?= $kendaraan['warna_kendaraan']; ?>">
                            <small class="form-text text-danger"><?= form_error('warna_kendaraan'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="jenis_transmisi">Jenis Transmisi</label>
                            <input type="text" class="form-control" id="jenis_transmisi" name="jenis_transmisi" value="<?= $kendaraan['jenis_transmisi']; ?>">
                            <small class="form-text text-danger"><?= form_error('jenis_transmisi'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="harga_kendaraan">Harga Kendaraan</label>
                            <input type="text" class="form-control" id="harga_kendaraan" name="harga_kendaraan" value="<?= $kendaraan['harga_kendaraan']; ?>">
                            <small class="form-text text-danger"><?= form_error('harga_kendaraan'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="gambar_kendaraan">Gambar Kendaraan</label><br>
                            <img src="<?= base_url(); ?>assets/img/<?= $kendaraan['gambar_kendaraan']; ?>" alt="" width="140">
                            <input type="file" class="form-control" id="gambar_kendaraan" name="gambar_kendaraan">
                            <small class="form-text text-danger"><?= form_error('gambar_kendaraan'); ?></small>
                    </div>
                    <div class="form-group">
                        <button type="submit" nama="kirim" class="btn btn-primary">Ubah Data</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>