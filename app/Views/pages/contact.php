<?php $this->extend('layout/template') ?>

<?php $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-6 offset-3">
            <form>
                <div class="form-group row">
                    <label for="name" class="col-4 col-form-label">Nama</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div>
                            <input id="name" name="name" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-4 col-form-label">Email</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                            </div>
                            <input id="email" name="email" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="telp" class="col-4 col-form-label">No Telepon</label>
                    <div class="col-8">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-phone-square"></i>
                                </div>
                            </div>
                            <input id="telp" name="telp" type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="alamat" class="col-4 col-form-label">Alamat</label>
                    <div class="col-8">
                        <textarea id="alamat" name="alamat" cols="40" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $this->endSection() ?>