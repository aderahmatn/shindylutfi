<div class="card card-widget widget-user shadow-lg">
    <!-- Add the bg color to the header using any of the bg-* classes -->
    <div class="widget-user-header text-white" style="background: url('<?= base_url('assets/images/dashboard.jpg') ?>'); height: 250px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center;">
        <h5 class="widget-user-desc text-center" style="font-weight: 200;">selamat datang</h5>
        <h3 class="widget-user-username text-center text-black" style="font-weight: 500;"><?= $this->session->userdata('nama_user') ?></h3>

    </div>
</div>