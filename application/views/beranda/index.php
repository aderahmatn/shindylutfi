<!-- Hero Section -->
<section>
    <div class="row">
        <div class="col-md-5 py-5 align-self-center">
            <p class="hero-title"> <?= ucwords($util->judul_hero) ?> </p>
            <p class="hero-tagline mt-n2"><?= ucfirst($util->sub_judul_hero) ?> </p>
            <a href="<?= base_url('paket_mua') ?>" class="btn btn-warning mt-4">Pesan Sekarang</a>
        </div>
        <div class="col-md-7 py-5 pl-5">
            <div class="hero-frame">
                <div class="hero-frame-2">
                    <img src="<?= base_url('./uploads/utility/') . $util->image_hero ?>" class="img-hero" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hero Section End-->
<!-- Portofolio Section -->
<section>
    <p class="section-title text-center m-0 mt-5">Portofolio</p>
    <!-- <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <?php foreach ($portofolio as $key) : ?>
            <li class="nav-item">
                <a class="nav-link" id="home-tab" data-toggle="tab" href="#<?= $key->id_kategori ?> role=" tab" aria-controls="home" aria-selected="true"><?= $key->nama_kategori ?></a>
            </li>
        <?php endforeach ?>

    </ul> -->
    <div class="tab-content mt-4" id="myTabContent">

        <div class="tab-pane fade show active text-center" id="portofolio" role="tabpanel" aria-labelledby="home-tab">
            <div class="row justify-content-center">
                <?php foreach ($portofolio as $key) : ?>
                    <div class="col-auto mx-3 mb-5">
                        <div class="frame">
                            <div class="frame-2">
                                <img class="img-thumb" src="<?= base_url('./uploads/portofolio/') . $key->image ?>" alt="">
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>
<!-- Portofolio Section End -->
<!-- Why Section -->
<section>
    <div class="row my-5">
        <div class="col-auto">

            <p class="section-title text-center m-0 mt-5">Kenapa Harus Makeup Artist</p>
            <p class="text-justify px-5 text-why">
                MUA profesional jelas punya pengetahuan tentang konsep make up yang cocok
                untuk berbagai momen, serta tahu <mark>jenis make up apa yang cocok</mark> untuk kulit kamu.
                Make up untuk
                prom jelas akan berbeda dengan make up untuk acara pernikahan, pun dengan make up untuk
                pengantin akan berbeda dengan make up bagi pengiring pengantin. Selain itu, seorang MUA
                profesional tahu porsi make up yang tepat untuk <mark>menonjolkan fitur wajahmu</mark> tanpa
                membuatnya
                terlihat berlebihan. Poin lainnya, seorang MUA profesional pasti memiliki peralatan tempur yang
                lebih lengkap sehingga lebih banyak tersedia opsi pilihan warna dan jenis material make up untuk
                <mark>setiap momen kamu</mark>.
            </p>
            <p class="bg-why"><i class="fas fa-question"></i></p>
        </div>
    </div>
</section>
<!-- Why Section End -->
<!-- Paket Section -->
<section>
    <p class="section-title text-center m-0 my-4">Paket Makeup</p>
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