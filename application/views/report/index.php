<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Laporan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">laporan</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <form role="form" method="POST" action="" autocomplete="off">
                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>" style="display: none">
                    <strong>Pilih tanggal laporan transaksi</strong>
                    <hr>
                    <div class="row mt-4">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="date" class="form-control <?= form_error('ftgl_awal') ? 'is-invalid' : '' ?>" id="ftgl_awal" name="ftgl_awal" placeholder="Nama customer">
                                <div class="invalid-feedback">
                                    <?= form_error('ftgl_awal') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1 text-center justify-items-center">
                            <h5 class="mt-1">s/d</h5>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="date" class="form-control <?= form_error('ftgl_akhir') ? 'is-invalid' : '' ?>" id="ftgl_akhir" name="ftgl_akhir" placeholder="Nama customer">
                                <div class="invalid-feedback">
                                    <?= form_error('ftgl_akhir') ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        <?php if ($result != null) { ?>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Laporan transaksi tanggal <?= $tgl1 . " sampai " . $tgl2 ?></h3>
                    <a href="<?= base_url('pdf/report/') . $tgl1 . "/" . $tgl2 ?>" class="btn btn-primary btn-sm float-right" target="_blank">Export PDF</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <table id="customer" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tgl Transaksi</th>
                                        <th>Customer</th>
                                        <th>Paket</th>
                                        <th>Tgl Acara</th>
                                        <th>Harga</th>
                                        <th>Petugas</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($result as $key) : ?>
                                        <tr>
                                            <td><?= $no++ ?></td>
                                            <td><?= $key->tanggal_transaksi ?></td>
                                            <td><?= $key->nama_lengkap ?></td>
                                            <td><?= $key->nama_paket ?></td>
                                            <td><?= $key->tanggal_acara ?></td>
                                            <td><?= $key->harga ?></td>
                                            <td><?= $key->nama_petugas ?></td>
                                            <td>
                                                <?php
                                                if ($key->status_transaksi == 'belum bayar') { ?>
                                                    <span class="badge badge-danger">Belum bayar</span>
                                                <?php } ?>
                                                <?php
                                                if ($key->status_transaksi == 'menunggu konfirmasi') { ?>
                                                    <span class="badge badge-warning">Menunggu konfirmasi pembayaran</span>
                                                <?php } ?>
                                                <?php
                                                if ($key->status_transaksi == 'pesanan diproses') { ?>
                                                    <span class="badge badge-primary">Pesanan diproses</span>
                                                <?php } ?>
                                                <?php
                                                if ($key->status_transaksi == 'selesai') { ?>
                                                    <span class="badge badge-success">Selesai</span>
                                                <?php } ?>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>