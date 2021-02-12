<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Edit Data kategori</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('kategori') ?>">Data kategori</a></li>
                    <li class="breadcrumb-item active">Edit Data kategori</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Edit data kategori</h3>

            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="fid_kategori" value="<?= $kategori->id_kategori ?>">
                <div class="card-body">
                    <div class="form-group">
                        <label for="fnama_kategori">Kategori</label>
                        <input type="text" class="form-control <?= form_error('fnama_kategori') ? 'is-invalid' : '' ?>" id="fnama_kategori" name="fnama_kategori" value="<?= $kategori->nama_kategori ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fnama_kategori') ?>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning float-right">Simpan</button>
                    <a href="<?= base_url('kategori') ?>" class="btn btn-secondary float-left">Batal</a>

                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>