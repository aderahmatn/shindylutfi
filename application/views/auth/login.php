<!-- Login Section -->
<section>
    <div class="row">
        <div class="col-md-8 py-5 align-self-center">
            <p class="hero-title"> Dapatkan Pelayanan Makeup Artist Terbaik Dari Kami </p>
            <p class="hero-tagline mt-n2">Magical hands on your face for a mesmerizing result. </p>
        </div>
        <div class="col-md-4 bg-form-order">
            <p class="title-form">Masuk untuk mendapatkan layanan makeup artist </p>
            <form role="form" method="POST" action="<?= base_url('auth/process_login') ?>" autocomplete="off">
                <div class="form-group">
                    <input type="text" class="form-control <?= form_error('fusername') ? 'is-invalid' : '' ?>" id="fusername" name="fusername" placeholder="Username" value="<?= $this->input->post('fusername'); ?>" required>
                    <div class="invalid-feedback">
                        <?= form_error('fusername') ?>
                    </div>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control <?= form_error('fpassword') ? 'is-invalid' : '' ?>" id="fpassword" name="fpassword" placeholder="Password" value="<?= $this->input->post('fpassword'); ?>" required>
                    <div class="invalid-feedback">
                        <?= form_error('fpassword') ?>
                    </div>
                </div>
                <p>Belum punya akun? <a href="<?= base_url('auth/daftar') ?>">Daftar disini</a></p>
                <button type="submit" class="btn btn-warning btn-block">Masuk</button>
            </form>
        </div>
    </div>
</section>
<!-- Login Section End -->