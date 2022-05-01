<div class="container">

   <div class="row mt-3">
       <div class="col-md-6">
        <?php if ( $this->session->flashdata('flash')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">Data Kendaraan
                <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    </button>
            </div>
        </div>
   </div>
    <?php endif; ?>

   <div class="row mt-3">
       <div class="col-md-6">
           <a href="<?= base_url(); ?>kendaraan/tambah" class="btn btn-primary">Tambah Data Kendaraan</a>
       </div>
   </div>

   <div class="row mt-3">
       <div class="col-md-9">
        <form action="" method="post">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Masukan keyword...." name="keyword" autocomplete="off">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-primary">Search</button>
                </div>
            </form>
            </div>
       </div>
   </div>

    <div class="row mt-3">
        <div class="col-md-6">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Kendaraan</th>
                    <th scope="col">Nama Kendaraan</th>
                    <th scope="col">Pabrikan</th>
                    <th scope="col">Tahun</th>
                    <th scope="col">Warna</th>
                    <th scope="col">Transmisi</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr> 
            </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php foreach ( $kendaraan as $k ): ?> 
                    <tr>
                        <th scope="row"><?= $no++; ?></th>
                        <td><?= $k['jenis_kendaraan']; ?></td>
                        <td><?= $k['nama_kendaraan']; ?></td>
                        <td><?= $k['nama_pabrikan']; ?></td>
                        <td><?= $k['tahun_kendaraan']; ?></td>
                        <td><?= $k['warna_kendaraan']; ?></td>
                        <td><?= $k['jenis_transmisi']; ?></td>
                        <td><?= "Rp. ".number_format($k['harga_kendaraan']) ." ,-"; ?></td>
                        <td>
                            <a href="" class="badge badge-success float-right">Edit</a>
                            <a href="<?= base_url(); ?>kendaraan/hapus/<?= $k['id_kendaraan']; ?>" class="badge badge-danger float-right" onclick="return confirm('Yakin mau dihapus ?'); ">Delete</a>
                        </td>
                    </tr>
             </tbody>
             <?php endforeach; ?>
            </table>
        </div>
    </div>

</div>