<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form tambah data warga</h2>
            <form action="/datawarga/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nik" class="col-sm-2 col-form-label">nik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nik" name="nik" autofocus>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>

                <!-- <div class="form-group row">
                    <label for="kelamin" class="col-sm-2 col-form-label">kelamin</label>
                    <div class="col-sm-10">
                        <input type="enum" class="form-control" id="kelamin" name="kelamin">
                    </div>
                </div> -->

                <div class="form-group row">
                    <label for="alamat" class="col-sm-2 col-form-label">alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="no_rumah" class="col-sm-2 col-form-label">no_rumah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="status" name="No rumah">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="status" class="col-sm-2 col-form-label">status</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="status" name="status">
                    </div>
                </div>

                <div class="form-row align-items-center">
                    <div class="col-auto my-2">
                        <label class="mr-sm-2 sr-only" for="kelamin">kelamin</label>
                        <select class="custom-select mr-sm-1" id="kelamin">
                            <option value="1">L</option>
                            <option value="2">P</option>
                        </select>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah Data Warga</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(''); ?>