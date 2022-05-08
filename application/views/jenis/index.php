<div class="container">

    <div class="row mt-3">
       <div class="col-md-6">
        <?php if ( $this->session->flashdata('flash')) : ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">Data Jenis Kendaraan
                <strong>Berhasil</strong> <?= $this->session->flashdata('flash'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    </button>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>jenis/tambah" class="btn btn-primary">Tambah Data Jenis</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-8">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Jenis Kendaraan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php $no = 1; ?>
            <?php foreach ( $jenis as $j ) : ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $j['jenis_kendaraan']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>jenis/edit/<?= $j['id_jenis_kendaraan']; ?>" class="badge badge-success float-center">Edit</a>
                        <a href="<?= base_url(); ?>jenis/delete/<?= $j['id_jenis_kendaraan']; ?>" class="badge badge-danger float-center" onclick="return confirm('Yakin mau dihapus ?'); ">Hapus</a>
                    </td>
                </tr>
            </tbody>
          <?php endforeach; ?>
        </table>
        </div>
    </div>
</div>