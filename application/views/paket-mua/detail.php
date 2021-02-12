<!-- Detail Paket Section -->
<section>
    <p class="section-title text-center m-n2 my-4"><?= ucwords($paket->nama_paket) ?></p>
    <div class="row mt-5">
        <div class="col-md-2 ">
            <img src="<?= base_url('./uploads/paket/') . $paket->foto ?>" alt="Foto paket" class="img-thumbnail" width="200">
        </div>
        <div class="col-md-6 ">
            <p class="ml-4"><strong>Kategori :</strong> <?= $paket->nama_kategori ?></p>
            <p class="ml-4"><strong>Harga : </strong>Rp. <?= $paket->harga ?></p>
            <p class="ml-4"><strong>Deskripsi :</strong></p>
            <p class="mx-4 text-justify"><?= $paket->deskripsi ?></p>
        </div>
        <div class="col-md-4 bg-form-order">
            <p class="title-form">Lengkapi pesanan</p>
            <div class="form-group">
                <label for="ftgl_acara">Tanggal Acara</label>
                <input type="date" class="form-control <?= form_error('ftgl_acara') ? 'is-invalid' : '' ?>" id="ftgl_acara" name="ftgl_acara" placeholder="Enter Nama Paket" value="<?= $this->input->post('ftgl_acara'); ?>">
                <div class="invalid-feedback">
                    <?= form_error('ftgl_acara') ?>
                </div>
            </div>
            <div class="form-group">
                <label for="falamat_acara">Alamat Acara</label>
                <textarea name="falamat_acara" id="falamat_acara" class="form-control <?= form_error('falamat_acara') ? 'is-invalid' : '' ?>" cols="10" rows="5" placeholder="Enter alamat acara"><?= $this->input->post('falamat_acara'); ?></textarea>
                <div class="invalid-feedback">
                    <?= form_error('falamat_acara') ?>
                </div>
            </div>
            <button type="submit" class="btn btn-warning btn-block">Pesan Sekarang</button>

        </div>
    </div>
</section>
<!-- Detail Paket Section End -->