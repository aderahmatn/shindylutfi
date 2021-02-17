<!-- Detail Paket Section -->
<section>
    <p class="section-title text-center m-n2 my-4">Pembayaran</p>
    <div class="row mt-5 ">
        <div class="col-md-8 ">
            <p>Silahkan lakukan pembayaran ke salah satu rekening bank kami.</p>
            <strong><?= $pesanan->nama_paket ?></strong>
            <p>Transfer Pembayaran <strong>Rp. <?= $pesanan->harga ?></strong></p>

            <div class="row bg-light mr-5 p-3">
                <div class="col-md-3 text-center">
                    <img src="<?= base_url('./uploads/bank/bank-bca.png') ?>" width="100px" alt="logo-bank" class="text-center">
                </div>
                <div class="col-auto">
                    <p>Bank BCA</p>
                    <p>A/N Shindy Lutfi</p>
                    <p>28172366278</p>
                </div>
            </div>
            <div class="row bg-light mr-5 p-3 mt-3">
                <div class="col-md-3 text-center">
                    <img src="<?= base_url('./uploads/bank/bank-bni.png') ?>" width="100px" alt="logo-bank" class="text-center">
                </div>
                <div class="col-auto">
                    <p>Bank BNI</p>
                    <p>A/N Shindy Lutfi</p>
                    <p>6345452341</p>
                </div>
            </div>
            <div class="row bg-light mr-5 p-3 mt-3">
                <div class="col-md-3 text-center">
                    <img src="<?= base_url('./uploads/bank/bank-mandiri.png') ?>" width="120px" alt="logo-bank" class="text-center">
                </div>
                <div class="col-auto">
                    <p>Bank Mandiri</p>
                    <p>A/N Shindy Lutfi</p>
                    <p>998827312322</p>
                </div>
            </div>

        </div>
        <div class="col-md-4 bg-form-order">
            <p class="title-form">Konfirmasi Pembayaran</p>
            <form role="form" method="POST" action="<?= base_url('pesanan/bayar') ?>" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" value="<?= $pesanan->id_transaksi ?>" name="fid_transaksi">
                <div class="form-group">
                    <label for="ftgl_bayar">Tanggal Bayar</label>
                    <input type="date" class="form-control <?= form_error('ftgl_bayar') ? 'is-invalid' : '' ?>" id="ftgl_bayar" name="ftgl_bayar" placeholder="Enter Nama Paket" value="<?= $this->input->post('ftgl_bayar'); ?>" required>
                    <div class="invalid-feedback">
                        <?= form_error('ftgl_bayar') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="fbank">Transfer Ke Rekening</label>
                    <select class="form-control <?php echo form_error('fbank') ? 'is-invalid' : '' ?>" id="fbank" name="fbank" required>
                        <option hidden value="" selected>Pilih Bank</option>
                        <option value="bca" <?= $this->input->post('fbank') == 'bca' ? 'selected' : '' ?>>Bank BCA</option>
                        <option value="mandiri" <?= $this->input->post('fbank') == 'mandiri' ? 'selected' : '' ?>>Bank Mandiri</option>
                        <option value="bni" <?= $this->input->post('fbank') == 'bni' ? 'selected' : '' ?>>Bank BNI</option>
                    </select>
                    <div class="invalid-feedback">
                        <?= form_error('fbank') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="ffoto">Bukti Pembayaran</label>
                    <input type="file" class="pt-1  <?= form_error('ffoto') ? 'is-invalid' : '' ?>" id="ffoto" name="ffoto" value="<?= $this->input->post('ffoto'); ?>" required>
                    <small class="text-muted">*Format file harus <i>jpg/png/gif/jpeg</i>, maksimal <i>file size 2Mb</i></small>
                    <div class="invalid-feedback">
                        <?= form_error('ffoto') ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning btn-block">Kirim Konfirmasi</button>
            </form>
        </div>
    </div>
</section>
<!-- Detail Paket Section End -->