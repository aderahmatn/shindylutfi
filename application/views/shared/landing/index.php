<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?= $util->nama_website ?> <?= $this->uri->segment(1) == '' ? '' :  ' | ' . $this->uri->segment(1)   ?></title>

    <link rel="icon" href="<?= base_url("assets/images/icon.png") ?>" type="image/jpeg">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="<?= base_url("assets/plugins/fontawesome-free/css/all.min.css") ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url("assets/dist/css/adminlte.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url("assets/dist/css/style.css") ?>">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.min.js"></script>
</head>

<body>
    <!-- container -->
    <div class="container">
        <!-- Navbar Section -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white justify-content-between mt-2">
            <div>
                <img src="<?= base_url("assets/images/icon.png") ?>" width="30" height="30" class="d-inline-block align-top" alt="">
                <a class="navbar-brand" href="<?= base_url() ?>"><?= $util->nama_website ?></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav float-right">
                    <li class="nav-item <?= $this->uri->segment(1) == '' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url() ?>">Beranda <span class="sr-only"></a>
                    </li>
                    <li class="nav-item <?= $this->uri->segment(1) == 'tentang_saya' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('tentang_saya') ?>">Tentang Saya</a>
                    </li>
                    <li class="nav-item <?= $this->uri->segment(1) == 'paket_mua' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('paket_mua') ?>">Paket</a>
                    </li>
                    <li class="nav-item <?= $this->uri->segment(1) == 'kontak' ? 'active' : '' ?>">
                        <a class="nav-link" href="<?= base_url('kontak') ?>">Kontak</a>
                    </li>
                    <li class="nav-item border mr-4 ml-2 border-light my-1 rounded"></li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-light <?= $this->uri->segment(1) == 'auth' ? 'active' : '' ?>" href="<?= base_url('auth/login') ?>">Masuk</a>
                    </li>
                    <!-- <li class="nav-item dropdown ml-n3">
                        <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="true">
                            Aderahmatn
                        </a>
                        <div class="dropdown-menu bg-nude">
                            <a href="<?= base_url('profile') ?>" class="dropdown-item">
                                <i class="fas fa-user mr-2" style="color: #D8CBF6;"></i> Profile Saya
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="<?= base_url('pesanan_saya') ?>" class="dropdown-item">
                                <i class="fas fa-shopping-cart mr-2" style="color: #D8CBF6;"></i> Pesanan Saya
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item" data-toggle="modal" data-target="#modal-logout">
                                <i class="fas fa-sign-out-alt mr-2" style="color: #D8CBF6;"></i> Keluar
                            </a>
                        </div>
                    </li> -->
                </ul>
            </div>
        </nav>
        <!-- Navbar Section End -->
        <?= $contents ?>
    </div>
    <!-- container end -->
    <!-- Footer Section -->
    <footer class="footer">
        <div class="container">
            <div class="row my-5">
                <div class="col-md-3 align-self-center">
                    <img src="<?= base_url("assets/images/icon.png") ?>" width="30" height="30" class="d-inline-block align-top" alt="">
                    <a class="navbar-brand"><?= $util->nama_website ?></a>
                </div>
                <div class="col-md-3">
                    <p class="title-foot">Main Menu</p>
                    <ul class="list-foot">
                        <li class="link-foot"><a class="link-foot" href="#">Syarat dan Ketentuan</a></li>
                        <li class="link-foot"><a class="link-foot" href="#">Tentang Saya</a></li>
                        <li class="link-foot"><a class="link-foot" href="#">Portofolio</a></li>
                        <li class="link-foot"><a class="link-foot" href="#">Paket MUA</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="title-foot">Social Media</p>
                    <ul class="list-foot">
                        <li class="link-foot"><a class="link-foot" href="#"><i class="fab fa-instagram"></i>
                                <?= $kontak->instagram ?></a></li>
                        <li class="link-foot"><a class="link-foot" href="#"><i class="fab fa-twitter"></i>
                                <?= $kontak->twitter ?></a></li>
                        <li class="link-foot"><a class="link-foot" href="#"><i class="fab fa-youtube"></i>
                                <?= $kontak->youtube ?></a></li>
                        <li class="link-foot"><a class="link-foot" href="#"><i class="fab fa-facebook"></i>
                                <?= $kontak->facebook ?></a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="title-foot">Hubungi Saya</p>
                    <ul class="list-foot">
                        <li class="link-foot"><a class="link-foot" href="#"> <?= $kontak->telepon ?></a></li>
                        <li class="link-foot"><a class="link-foot" href="#"> <?= $kontak->email ?></a></li>
                        <li class="link-foot"><a class="link-foot" href="#"><?= $kontak->alamat ?></a></li>
                    </ul>
                </div>

            </div>
        </div>
        <p class="text-footer text-center">All Rights Reserved ShindyLutfi by <a href="" class="link-foot">gisaka.net</a> 2021</p>
    </footer>
    <!-- Footer Section End -->

</body>

</html>

<!-- modal-logout -->
<div class="modal fade" id="modal-logout">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body text-center">
                <b class="h4">Apakah anda yakin ingin keluar?</b>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn  btn-light bg-white" data-dismiss="modal">Batal</button>
                <a type="button" class="btn  btn-light" href="<?= site_url('auth/logout') ?>">Logout</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>