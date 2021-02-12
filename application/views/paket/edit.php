<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data Paket</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('paket') ?>">Data Paket</a></li>
                    <li class="breadcrumb-item active">Edit Data Paket</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input data Paket</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" value="<?= $paket->id_paket ?>" name="fid_paket">
                <input type="hidden" value="<?= $paket->foto ?>" name="ffoto_lama">
                <div class="card-body">
                    <div class="form-group">
                        <label for="fnama_paket">Nama Paket</label>
                        <input type="text" class="form-control <?= form_error('fnama_paket') ? 'is-invalid' : '' ?>" id="fnama_paket" name="fnama_paket" placeholder="Enter Nama Paket" value="<?= $paket->nama_paket ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fnama_paket') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fkategori">Kategori</label>
                        <select class="form-control <?php echo form_error('fkategori') ? 'is-invalid' : '' ?>" id="fkategori" name="fkategori">
                            <option hidden value="" selected>Pilih Kategori</option>
                            <?php foreach ($kategori as $key) : ?>
                                <option value="<?= $key->id_kategori ?>" <?= $paket->id_kategori == $key->id_kategori ? 'selected' : '' ?>><?= $key->nama_kategori ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= form_error('fkategori') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fharga">Harga Paket</label>
                        <input type="text" class="form-control <?= form_error('fharga') ? 'is-invalid' : '' ?>" id="fharga" name="fharga" placeholder="Enter Harga Paket" value="<?= $paket->harga ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fharga') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="<?= base_url('./uploads/paket/') . $paket->foto ?>" alt="foto paket" class="img-thumbnail" width="80%">
                                <small class="text-muted">Foto Paket Sekarang</small>
                            </div>
                            <div class="col-md-8">
                                <label for="ffoto">Ganti Foto Paket</label>
                                <input type="file" class="pt-1 form-control <?= form_error('ffoto') ? 'is-invalid' : '' ?>" id="ffoto" name="ffoto" placeholder="Enter Harga Paket" value="<?= $this->input->post('ffoto'); ?>">
                                <small class="text-muted">*Format file harus <i>jpg/png/gif/jpeg</i>, maksimal <i>file size 2Mb</i></small>
                                <div class="invalid-feedback">
                                    <?= form_error('ffoto') ?>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <label for="fdeskripsi">Deskripsi</label>
                        <textarea name="fdeskripsi" id="fdeskripsi" class="form-control <?= form_error('fdeskripsi') ? 'is-invalid' : '' ?>" cols="10" rows="5" placeholder="Enter Deskripsi Paket"><?= $this->input->post('fdeskripsi'); ?><?= $paket->deskripsi ?></textarea>
                        <div class="invalid-feedback">
                            <?= form_error('fdeskripsi') ?>
                        </div>
                    </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning float-right">Simpan</button>
                    <a href="<?= base_url('paket') ?>" class="btn btn-secondary float-left">Batal</a>

                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>