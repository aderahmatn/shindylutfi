<!-- Paket Section -->
<section>
    <p class="section-title text-center m-n2 my-4">Paket Makeup</p>
    <div class="row justify-content-center">
        <?php foreach ($paket as $key) : ?>
            <div class="col-auto mx-3 mt-5 text-center">
                <div class="card-paket">
                    <div class="card-body-paket">
                        <img src="<?= base_url('./uploads/paket/') . $key->foto ?>" class="img-paket" alt="">
                        <a href="<?= base_url('paket_mua/detail/') . $key->id_paket ?>" class="link-paket">
                            <p class="text-link-paket">Lihat Detail</p>
                        </a>
                        <div class="title-paket">
                            <p class="text-paket"><?= ucwords($key->nama_paket) ?></p>
                        </div>
                        <div class="harga-paket">
                            <p class="text-harga"><?= ucwords('Rp. ' . $key->harga) ?></p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</section>
<!-- Paket Section End -->