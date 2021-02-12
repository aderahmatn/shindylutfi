<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data Website</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Edit data website</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-4">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input data website</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" value="<?= $utility->id_utility ?>" name="fid_utility">
                <input type="hidden" value="<?= $utility->image_hero ?>" name="fimage_hero_lama">
                <div class="card-body">
                    <div class="form-group">
                        <label for="fnama_website">Nama Website</label>
                        <input type="text" class="form-control <?= form_error('fnama_website') ? 'is-invalid' : '' ?>" id="fnama_website" name="fnama_website" placeholder="Enter Nama Website" value="<?= $utility->nama_website ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fnama_website') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fjudul_hero">Judul Hero</label>
                        <input type="text" class="form-control <?= form_error('fjudul_hero') ? 'is-invalid' : '' ?>" id="fjudul_hero" name="fjudul_hero" placeholder="Enter Judul Hero" value="<?= $utility->judul_hero ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fjudul_hero') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fsub_judul_hero">Sub judul Hero</label>
                        <input type="text" class="form-control <?= form_error('fsub_judul_hero') ? 'is-invalid' : '' ?>" id="fsub_judul_hero" name="fsub_judul_hero" placeholder="Enter Judul Hero" value="<?= $utility->sub_judul_hero ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fsub_judul_hero') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= base_url('./uploads/utility/') . $utility->image_hero ?>" alt="foto paket" class="img-thumbnail" width="80%">
                            </div>
                            <div class="col-md-8">
                                <label for="fimage_hero">Image Hero Baru</label>
                                <input type="file" class="pt-1 form-control <?= form_error('fimage_hero') ? 'is-invalid' : '' ?>" id="fimage_hero" name="fimage_hero" placeholder="Enter Harga Paket" value="<?= $this->input->post('fimage_hero'); ?>">
                                <small class="text-muted">*Format file harus <i>jpg/png/gif/jpeg</i>, maksimal <i>file size 2Mb</i></small>
                                <div class="invalid-feedback">
                                    <?= form_error('fimage_hero') ?>
                                </div>
                            </div>
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