<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="" class="btn btn-primary">Tambah Data Pabrikan</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
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
                        <a href="" class="badge badge-success">Edit</a>
                        <a href="" class="badge badge-danger">Delete</a>
                    </td>
                </tr>
            </tbody>
            <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>