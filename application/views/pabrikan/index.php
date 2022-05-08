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
            <a href="<?= base_url(); ?>pabrikan/tambah" class="btn btn-primary">Tambah Data Pabrikan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-9">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama Pabrikan</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <?php $no = 1; ?>
            <?php foreach ( $pabrikan as $pb ) : ?>
            <tbody>
                <tr>
                    <th scope="row"><?= $no++; ?></th>
                    <td><?= $pb['nama_pabrikan']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>pabrikan/ubah/<?= $pb['id_pabrikan_kendaraan']; ?>" class="badge badge-success">Edit</a>
                        <a href="<?= base_url(); ?>pabrikan/delete/<?= $pb['id_pabrikan_kendaraan']; ?>" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>