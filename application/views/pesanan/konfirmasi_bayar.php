<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Konfirmasi pembayaran</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('pesanan') ?>">Data pesanan</a></li>
                    <li class="breadcrumb-item active">Konfirmasi pembayaran</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="row">
    <div class="col-5">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Detail Pesanan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" method="POST" action="<?= base_url('pesanan/process_konfirmasi_bayar') ?>" autocomplete="off" enctype="multipart/form-data">
                <input type="hidden" name="fid_user" id="" value="<?= $this->session->userdata('id_user') ?>">
                <input type="hidden" name="fid_transaksi" id="" value="<?= $pesanan->id_transaksi ?>">
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <img src="<?= base_url('./uploads/bayar/') . $pesanan->bukti_bayar ?>" alt="bukti pembayaran" width="200px" class="img-thumbnail">
                        </div>
                        <div class="col-md-6">
                            <p><strong>Customer : </strong> <?= $pesanan->nama_lengkap ?></p>
                            <p><strong>Paket : </strong> <?= $pesanan->nama_paket ?></p>
                            <p><strong>Total Pembayaran : </strong>Rp. <?= $pesanan->harga ?></p>
                            <p><strong>Tanggal Acara : </strong><?= $pesanan->tanggal_acara ?></p>
                            <p><strong>Alamat Acara : </strong><?= $pesanan->alamat_acara ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="form-group">
                        <label for="fnama_paket">Konfirmasi pembayaran oleh</label>
                        <input type="text" class="form-control <?= form_error('fnama_paket') ? 'is-invalid' : '' ?>" id="fnama_paket" name="fnama_paket" placeholder="Enter Nama Paket" value="<?= $this->session->userdata('nama_user') ?>" disabled>
                        <div class="invalid-feedback">
                            <?= form_error('fnama_paket') ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="fpetugas">Petugas Makeup</label>
                        <select class="form-control <?php echo form_error('fpetugas') ? 'is-invalid' : '' ?>" id="fpetugas" name="fpetugas" required>
                            <option hidden value="" selected>Pilih Petugas</option>
                            <?php foreach ($petugas as $key) : ?>
                                <option value="<?= $key->id_petugas ?>" <?= $this->input->post('fpetugas') == $key->id_petugas ? 'selected' : '' ?>><?= $key->nama_petugas ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback">
                            <?= form_error('fkategori') ?>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-warning float-right">Konfirmasi Pembayaran</button>
                    <a href="<?= base_url('pesanan') ?>" class="btn btn-secondary float-left">Batal</a>
                </div>
            </form>
        </div>
        <!-- /.card -->
    </div>
</div>