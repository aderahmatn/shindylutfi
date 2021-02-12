<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang_saya extends CI_Controller
{

    public function index()
    {
        $data['util'] = $this->utility_m->get_all();
        $data['kontak'] = $this->kontak_m->get_all();
        $this->template->load('shared/landing/index', 'tentang-saya/index', $data);
    }
}

/* End of file Tentang_saya.php */
