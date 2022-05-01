<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="" class="btn btn-primary">Tambah Data Jenis</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
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
                        <a href="" class="badge badge-success float-center">Edit</a>
                        <a href="" class="badge badge-danger float-center">Hapus</a>
                    </td>
                </tr>
            </tbody>
          <?php endforeach; ?>
        </table>
        </div>
    </div>
</div>