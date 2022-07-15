<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Warga RT 04/RW 02</h1>
            <a href="/datawarga/create" class="btn btn-primary mb-3">Tambah Data Warga</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Nik</th>
                        <th scope="col">No Rumah</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($warga as $w) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $w['nama']; ?></td>
                            <td><?= $w['nik']; ?></td>
                            <td><?= $w['no_rumah']; ?></td>
                            <td>
                                <a href="/datawarga/<?= $w['id']; ?>" class="btn btn-success">ubah</a>
                                <a href='' class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>