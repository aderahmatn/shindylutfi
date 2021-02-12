<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket_mua extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('paket_m');
    }
    public function index()
    {
        $data['paket'] = $this->paket_m->get_all();
        $data['util'] = $this->utility_m->get_all();
        $data['kontak'] = $this->kontak_m->get_all();
        $this->template->load('shared/landing/index', 'paket-mua/index', $data);
    }
    public function detail($id)
    {
        $data['paket'] = $this->paket_m->get_by_id($id);
        $data['util'] = $this->utility_m->get_all();
        $data['kontak'] = $this->kontak_m->get_all();
        $this->template->load('shared/landing/index', 'paket-mua/detail', $data);
    }
}

/* End of file Paket-mua.php */
