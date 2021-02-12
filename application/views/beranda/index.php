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
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Pernikahan</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Wisuda</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Tunangan</a>
        </li>
    </ul>
    <div class="tab-content mt-4" id="myTabContent">
        <div class="tab-pane fade show active text-center" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="row justify-content-center">
                <div class="col-auto mx-3">
                    <div class="frame">
                        <div class="frame-2">
                            <img class="img-thumb" src="../assets/img/nikah.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-auto mx-3">
                    <div class="frame">
                        <div class="frame-2">
                            <img class="img-thumb" src="../assets/img/nikah1.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-auto mx-3">
                    <div class="frame">
                        <div class="frame-2">
                            <img class="img-thumb" src="../assets/img/nikah2.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-auto mx-3">
                    <div class="frame">
                        <div class="frame-2">
                            <img class="img-thumb" src="../assets/img/nikah3.jpeg" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="row justify-content-center">
                <div class="col-auto mx-3">
                    <div class="frame">
                        <div class="frame-2">
                            <img class="img-thumb" src="../assets/img/wisuda.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-auto mx-3">
                    <div class="frame">
                        <div class="frame-2">
                            <img class="img-thumb" src="../assets/img/wisuda2.jpeg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="row justify-content-center">
                <div class="col-auto mx-3">
                    <div class="frame">
                        <div class="frame-2">
                            <img class="img-thumb" src="../assets/img/biasa.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-auto mx-3">
                    <div class="frame">
                        <div class="frame-2">
                            <img class="img-thumb" src="../assets/img/biasa2.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-auto mx-3">
                    <div class="frame">
                        <div class="frame-2">
                            <img class="img-thumb" src="../assets/img/biasa3.jpeg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-auto mx-3">
                    <div class="frame">
                        <div class="frame-2">
                            <img class="img-thumb" src="../assets/img/biasa1.jpeg" alt="">
                        </div>
                    </div>
                </div>
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
        <div class="col-auto mx-3 text-center">
            <div class="card-paket">
                <div class="card-body-paket">
                    <img src="../assets/img/biasa3.jpeg" class="img-paket" alt="">
                    <a href="#" class="link-paket">
                        <p class="text-link-paket">Lihat Detail</p>
                    </a>
                    <div class="title-paket">
                        <p class="text-paket">Special Occasion</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto mx-3 text-center">
            <div class="card-paket">
                <div class="card-body-paket">
                    <img src="../assets/img/nikah3.jpeg" class="img-paket" alt="">
                    <a href="#" class="link-paket">
                        <p class="text-link-paket">Lihat Detail</p>
                    </a>
                    <div class="title-paket">
                        <p class="text-paket">Bridal Makeup</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-auto mx-3 text-center">
            <div class="card-paket">
                <div class="card-body-paket">
                    <img src="../assets/img/wisuda.jpeg" class="img-paket" alt="">
                    <a href="#" class="link-paket">
                        <p class="text-link-paket">Lihat Detail</p>
                    </a>
                    <div class="title-paket">
                        <p class="text-paket">Basic Makeup</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- Paket Section End -->