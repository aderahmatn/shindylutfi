<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data Portofolio</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('portofolio') ?>">Data Portofolio</a></li>
                    <li class="breadcrumb-item active">Edit Data Portofolio</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input data Portofolio</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" value="<?= $portofolio->id_portofolio ?>" name="fid_portofolio">
                <input type="hidden" value="<?= $portofolio->image ?>" name="ffoto_lama">
                <div class="card-body">
                    <div class="form-group">
                        <label for="fkategori">Kategori</label>
                        <select class="form-control <?php echo form_error('fkategori') ? 'is-invalid' : '' ?>" id="fkategori" name="fkategori">
                            <option hidden value="" selected>Pilih Kategori</option>
                            <?php foreach ($kategori as $key) : ?>
                                <option value="<?= $key->id_kategori ?>" <?= $portofolio->id_kategori == $key->id_kategori ? 'selected' : '' ?>><?= $key->nama_kategori ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= form_error('fkategori') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= base_url('./uploads/portofolio/') . $portofolio->image ?>" alt="foto paket" class="img-thumbnail" width="80%">
                                <small class="text-muted">Foto Paket Sekarang</small>
                            </div>
                            <div class="col-md-8">
                                <label for="ffoto">Image Baru</label>
                                <input type="file" class="pt-1 form-control <?= form_error('ffoto') ? 'is-invalid' : '' ?>" id="ffoto" name="ffoto" placeholder="Enter Harga Paket" value="<?= $this->input->post('ffoto'); ?>">
                                <small class="text-muted">*Format file harus <i>jpg/png/gif/jpeg</i>, maksimal <i>file size 2Mb</i></small>
                                <div class="invalid-feedback">
                                    <?= form_error('ffoto') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning float-right">Simpan</button>
                    <a href="<?= base_url('portofolio') ?>" class="btn btn-secondary float-left">Batal</a>

                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>