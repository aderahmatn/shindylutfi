<!-- Daftar Section -->
<section>
    <div class="row">
        <div class="col-md-8 py-5 align-self-center">
            <p class="hero-title"> Dapatkan Pelayanan Makeup Artist Terbaik Dari Kami </p>
            <p class="hero-tagline mt-n2">Magical hands on your face for a mesmerizing result. </p>
        </div>
        <div class="col-md-4 bg-form-order">
            <p class="title-form">Lengkapi data untuk mendaftar </p>
            <div class="form-group">
                <input type="text" class="form-control <?= form_error('fnama_lengkap') ? 'is-invalid' : '' ?>" id="fnama_lengkap" name="fnama_lengkap" placeholder="Nama Lengkap" value="<?= $this->input->post('fnama_lengkap'); ?>">
                <div class="invalid-feedback">
                    <?= form_error('fnama_lengkap') ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control <?= form_error('femail') ? 'is-invalid' : '' ?>" id="femail" name="femail" placeholder="Email" value="<?= $this->input->post('femail'); ?>">
                <div class="invalid-feedback">
                    <?= form_error('femail') ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control <?= form_error('ftelepon') ? 'is-invalid' : '' ?>" id="ftelepon" name="ftelepon" placeholder="Nomor Telepon" value="<?= $this->input->post('ftelepon'); ?>">
                <div class="invalid-feedback">
                    <?= form_error('ftelepon') ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control <?= form_error('fusername') ? 'is-invalid' : '' ?>" id="fusername" name="fusername" placeholder="Username" value="<?= $this->input->post('fusername'); ?>">
                <div class="invalid-feedback">
                    <?= form_error('fusername') ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control <?= form_error('fpassword') ? 'is-invalid' : '' ?>" id="fpassword" name="fpassword" placeholder="Password" value="<?= $this->input->post('fpassword'); ?>">
                <div class="invalid-feedback">
                    <?= form_error('fpassword') ?>
                </div>
            </div>
            <div class="form-group">
                <input type="text" class="form-control <?= form_error('fconfrim_password') ? 'is-invalid' : '' ?>" id="fconfrim_password" name="fconfrim_password" placeholder="Ulangi Password" value="<?= $this->input->post('fconfrim_password'); ?>">
                <div class="invalid-feedback">
                    <?= form_error('fconfrim_password') ?>
                </div>
            </div>
            <div class="form-group">
                <textarea name="falamat" id="falamat" class="form-control <?= form_error('falamat') ? 'is-invalid' : '' ?>" placeholder="Alamat"></textarea>
                <div class="invalid-feedback">
                    <?= form_error('fconfrim_password') ?>
                </div>
            </div>
            <p>Sudah punya akun? <a href="<?= base_url('auth/login') ?>">Login disini</a></p>
            <button type="submit" class="btn btn-warning btn-block">Daftar</button>
        </div>
    </div>
</section>
<!-- Daftar Section End -->