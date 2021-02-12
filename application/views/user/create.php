<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tambah Data User</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('user') ?>">Data User</a></li>
                    <li class="breadcrumb-item active">Tambah Data User</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Input data user</h3>

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
                        <label for="fusername">Username</label>
                        <input type="text" class="form-control <?= form_error('fusername') ? 'is-invalid' : '' ?>" id="fusername" name="fusername" placeholder="Enter Username" value="<?= $this->input->post('fusername'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fusername') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fpassword">Password</label>
                        <input type="password" class="form-control <?= form_error('fpassword') ? 'is-invalid' : '' ?>" id="fpassword" name="fpassword" placeholder="Enter Username" value="<?= $this->input->post('fpassword'); ?>">
                        <div class="invalid-feedback">
                            <?= form_error('fpassword') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="flevel">Level</label>
                        <select class="form-control <?php echo form_error('flevel') ? 'is-invalid' : '' ?>" id="flevel" name="flevel">
                            <option hidden value="" selected>Pilih Level</option>
                            <option value="admin" <?= $this->input->post('flevel') == "admin" ? 'selected' : '' ?>>admin</option>
                            <option value="pemilik" <?= $this->input->post('flevel') == "pemilik" ? 'selected' : '' ?>>Pemilik</option>
                        </select>
                        <div class="invalid-feedback">
                            <?= form_error('flevel') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fstatus">Status Aktif</label>
                        <select class="form-control <?php echo form_error('fstatus') ? 'is-invalid' : '' ?>" id="fstatus" name="fstatus">
                            <option hidden value="" selected>Pilih Status Aktif</option>
                            <option value="1" <?= $this->input->post('fstatus') == "1" ? 'selected' : '' ?>>Aktif</option>
                            <option value="0" <?= $this->input->post('fstatus') == "0" ? 'selected' : '' ?>>Nonaktif</option>
                        </select>
                        <div class="invalid-feedback">
                            <?= form_error('fstatus') ?>
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