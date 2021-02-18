<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data Petugas</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('petugas') ?>">Data petugas</a></li>
                    <li class="breadcrumb-item active">Tambah Data petugas</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input data petugas</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off">
                <div class="card-body">
                    <div class="form-group">
                        <label for="fnama_user">Nama Lengkap</label>
                        <input type="text" class="form-control <?= form_error('fnama_user') ? 'is-invalid' : '' ?>" id="fnama_user" name="fnama_user" placeholder="Enter Nama Lengkap" value="<?= $this->input->post('fnama_user'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fnama_user') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="femail">Email</label>
                        <input type="text" class="form-control <?= form_error('femail') ? 'is-invalid' : '' ?>" id="femail" name="femail" placeholder="Enter Email" value="<?= $this->input->post('femail'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('femail') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ftelepon">Telepon</label>
                        <input type="text" class="form-control <?= form_error('ftelepon') ? 'is-invalid' : '' ?>" id="ftelepon" name="ftelepon" placeholder="Enter Telepon" value="<?= $this->input->post('ftelepon'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('ftelepon') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="falamat">Alamat</label>
                        <textarea name="falamat" id="falamat" class="form-control <?= form_error('falamat') ? 'is-invalid' : '' ?>" cols="10" rows="5" placeholder="Enter Alamat"><?= $this->input->post('falamat'); ?></textarea>
                        <div class="invalid-feedback">
                            <?= form_error('falamat') ?>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning float-right">Simpan</button>
                    <a href="<?= base_url('user') ?>" class="btn btn-secondary float-left">Batal</a>

                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>