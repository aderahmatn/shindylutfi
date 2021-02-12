<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Utility Website</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Utility Website</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Website</h3>
                <a href="<?= base_url('utility/website/') . $util->id_utility ?>" class="btn btn-sm btn-warning float-right"><i class="fas fa-pencil-alt"></i> Edit</a>
            </div>
            <div class="card-body">
                <strong>Nama Website</strong>
                <p class="border-bottom mr-5 mt-2"><?= $util->nama_website ?></p>
                <strong>Judul Hero</strong>
                <p class="border-bottom mr-5 mt-2"><?= $util->judul_hero ?></p>
                <strong>Sub Judul Hero</strong>
                <p class="border-bottom mr-5 mt-2"><?= $util->sub_judul_hero ?></p>
                <strong>Gambar Hero</strong><br>
                <img class="img-thumbnail mt-2" width="50%" src="<?= base_url('./uploads/utility/') . $util->image_hero ?>" alt="">
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Data Kontak</h3>
                <a href="<?= base_url('utility/kontak/') . $kontak->id_kontak ?>" class="btn btn-sm btn-warning float-right"> <i class="fas fa-pencil-alt"></i> Edit</a>
            </div>
            <div class="card-body">
                <strong>Telepon</strong>
                <p class="border-bottom mr-5 mt-2"><?= $kontak->telepon ?></p>
                <strong>Email</strong>
                <p class="border-bottom mr-5 mt-2"><?= $kontak->email ?></p>
                <strong>Instagram</strong>
                <p class="border-bottom mr-5 mt-2"><?= $kontak->instagram ?></p>
                <strong>Twitter</strong><br>
                <p class="border-bottom mr-5 mt-2"><?= $kontak->twitter ?></p>
                <strong>Facebook</strong><br>
                <p class="border-bottom mr-5 mt-2"><?= $kontak->facebook ?></p>
                <strong>Youtube</strong><br>
                <p class="border-bottom mr-5 mt-2"><?= $kontak->youtube ?></p>
                <strong>Alamat</strong><br>
                <p class="border-bottom mr-5 mt-2"><?= $kontak->alamat ?></p>

            </div>
        </div>
    </div>
</div>