<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data Kontak</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Edit data Kontak</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input data Kontak</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" value="<?= $kontak->id_kontak ?>" name="fid_kontak">
                <div class="card-body">
                    <div class="form-group">
                        <label for="ftelepon">Telepon</label>
                        <input type="text" class="form-control <?= form_error('ftelepon') ? 'is-invalid' : '' ?>" id="ftelepon" name="ftelepon" placeholder="Enter Nama Website" value="<?= $kontak->telepon ?>">
                        <div class="invalid-feedback">
                            <?= form_error('ftelepon') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="femail">Email</label>
                        <input type="email" class="form-control <?= form_error('femail') ? 'is-invalid' : '' ?>" id="femail" name="femail" placeholder="Enter Nama Website" value="<?= $kontak->email ?>">
                        <div class="invalid-feedback">
                            <?= form_error('femail') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="finstagram">Instagram</label>
                        <input type="text" class="form-control <?= form_error('finstagram') ? 'is-invalid' : '' ?>" id="finstagram" name="finstagram" placeholder="Enter Nama Website" value="<?= $kontak->instagram ?>">
                        <div class="invalid-feedback">
                            <?= form_error('finstagram') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ftwitter">Twitter</label>
                        <input type="text" class="form-control <?= form_error('ftwitter') ? 'is-invalid' : '' ?>" id="ftwitter" name="ftwitter" placeholder="Enter Nama Website" value="<?= $kontak->twitter ?>">
                        <div class="invalid-feedback">
                            <?= form_error('ftwitter') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="ffacebook">Facebook</label>
                        <input type="text" class="form-control <?= form_error('ffacebook') ? 'is-invalid' : '' ?>" id="ffacebook" name="ffacebook" placeholder="Enter Nama Website" value="<?= $kontak->facebook ?>">
                        <div class="invalid-feedback">
                            <?= form_error('ffacebook') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fyoutube">Youtube</label>
                        <input type="text" class="form-control <?= form_error('fyoutube') ? 'is-invalid' : '' ?>" id="fyoutube" name="fyoutube" placeholder="Enter Nama Website" value="<?= $kontak->youtube ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fyoutube') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fyoutube">Alamat</label>
                        <textarea name="falamat" id="falamat" class="form-control <?= form_error('falamat') ? 'is-invalid' : '' ?>""><?= $kontak->alamat ?></textarea>
                        <div class=" invalid-feedback">
                            <?= form_error('falamat') ?>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning float-right">Update</button>
                    <a href="<?= base_url('utility') ?>" class="btn btn-secondary float-left">Batal</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>