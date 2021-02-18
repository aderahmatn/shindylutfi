<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Data pesanan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item active">Data pesanan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <div class="card ">
                    <div class="card-header">
                        <h3 class="card-title">Data pesanan</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- card-body -->
                    <div class="card-body">
                        <table id="TabelUser" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">No</th>
                                    <th>Customer</th>
                                    <th>Tgl Acara </th>
                                    <th>Alamat Acara</th>
                                    <th>Paket</th>
                                    <th style="width: 180px">Status</th>
                                    <th style="width: 140px">Modify</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($pesanan as $key) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $key->nama_lengkap ?></td>
                                        <td><?= $key->tanggal_acara ?></td>
                                        <td><?= $key->alamat_acara ?></td>
                                        <td><?= $key->nama_paket ?></td>
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
                                            if ($key->status_transaksi == 'sudah bayar') { ?>
                                                <span class="badge badge-primary">Sudah bayar</span>
                                            <?php } ?>
                                        </td>

                                        <td>
                                            <div class="btn-group">
                                                <a href="<?= base_url('pesanan/konfirmasi_bayar/') . $key->id_transaksi ?>"><button type="button" class="btn btn-default btn-sm">Konfirmasi Pembayaran</button></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>

                        </table>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    </div>
                </div>
                <!-- /.card -->
            </div>

        </div>
    </div>
</section>






<!-- page script -->
<script>
    $(document).ready(function() {
        $('#TabelUser').DataTable();
        $('[data-tolltip="tooltip"]').tooltip({
            trigger: "hover"
        })

    });
</script>
<!--Delete Confirmation-->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="row">
                    <div class="col-3 d-flex justify-content-center">
                        <i class="fa  fa-exclamation-triangle" style="font-size: 70px; color:red;"></i>
                    </div>
                    <div class="col-9 pt-2">
                        <h5>Apakah anda yakin?</h5>
                        <span>Data yang dihapus tidak akan bisa dikembalikan.</span>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal"> Batal</button>
                <a id="btn-delete" class="btn btn-danger" href="#"> Hapus</a>
            </div>
        </div>
    </div>
</div>

<!-- Delete Confirm -->
<script type="text/javascript">
    function deleteConfirm(url) {
        $('#btn-delete').attr('href', url);
        $('#deleteModal').modal();
    }
</script>