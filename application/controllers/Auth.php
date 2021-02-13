<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_m');
    }

    public function login()
    {
        $data['util'] = $this->utility_m->get_all();
        $data['kontak'] = $this->kontak_m->get_all();
        $this->template->load('shared/landing/index', 'auth/login', $data);
    }
    public function daftar()
    {
        $customer  = $this->customer_m;
        $validation = $this->form_validation;
        $validation->set_rules($customer->rules());
        if ($validation->run() == FALSE) {
            $data['util'] = $this->utility_m->get_all();
            $data['kontak'] = $this->kontak_m->get_all();
            $this->template->load('shared/landing/index', 'auth/daftar', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $customer->Add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Akun berhasil didaftarkan, Silahkan Login!');
                redirect('auth/login', 'refresh');
            }
        }
    }
}

/* End of file Auth.php */
