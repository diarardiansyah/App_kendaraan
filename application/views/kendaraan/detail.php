<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?= base_url(); ?>assets/img/<?= $kendaraan['gambar_kendaraan']; ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Detail Kendaraan</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Nama Kendaraan : <?= $kendaraan['nama_kendaraan']; ?></li>
                    <li class="list-group-item">Tahun Kendaraan : <?= $kendaraan['tahun_kendaraan']; ?></li>
                    <li class="list-group-item">Harga Kendaraan : <?= "Rp. ".number_format($kendaraan['harga_kendaraan']) ." ,-"; ?> </li>
                </ul>
                <div class="card-body">
                    <a href="<?= base_url(); ?>kendaraan" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>