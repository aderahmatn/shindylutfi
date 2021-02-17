<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('utility_m');
        $this->load->model('kontak_m');
        $this->load->model('paket_m');
        $this->load->model('portofolio_m');
        $this->load->model('kategori_m');
    }
    public function index()
    {
        $data['util'] = $this->utility_m->get_all();
        $data['kontak'] = $this->kontak_m->get_all();
        $data['paket'] = $this->paket_m->get_all();
        $data['portofolio'] = $this->portofolio_m->get_all();
        $data['kategori'] = $this->kategori_m->get_all();
        $this->template->load('shared/landing/index', 'beranda/index', $data);
    }
}

/* End of file Beranda.php */
