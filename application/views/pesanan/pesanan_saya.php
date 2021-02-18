<!-- Detail Paket Section -->
<section style="margin-bottom: 300px;">
    <p class="section-title text-center m-n2 my-4">Pesanan Saya</p>
    <div class="row mt-5 ">
        <div class="col-12">
            <table id="TabelUser" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th style="width: 10px">No</th>
                        <th>Tgl Acara </th>
                        <th>Alamat Acara</th>
                        <th>Paket</th>
                        <th style="width: 180px">Status</th>
                        <th style="width: auto">Modify</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($pesanan as $key) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
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
                                if ($key->status_transaksi == 'pesanan diproses') { ?>
                                    <span class="badge badge-primary">Pesanan diproses</span>
                                <?php } ?>
                            </td>

                            <td>
                                <?php
                                if ($key->status_transaksi == 'belum bayar') { ?>
                                    <div class="btn-group">
                                        <a href="<?= base_url('pesanan/pembayaran/') . $key->id_transaksi ?>"><button type="button" class="btn btn-default btn-sm">Bayar</button></a>
                                    </div>
                                <?php } ?>

                                <button type="button" class="btn btn-danger btn-sm" onclick="deleteConfirm('<?= base_url() . 'pesanan/batal/' . $key->id_transaksi ?>')" data-tolltip="tooltip" data-placement="top" title="Batalkan Pesanan">Batalkan</button>
                            </td>
                        </tr>
                    <?php endforeach; ?>

            </table>
        </div>
    </div>
</section>
<!-- Detail Paket Section End -->
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
                        <span>Pesanan akan dibatalkan</span>
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button class="btn btn-default" type="button" data-dismiss="modal"> Cancel</button>
                <a id="btn-delete" class="btn btn-danger" href="#"> Batalkan Pesanan</a>
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