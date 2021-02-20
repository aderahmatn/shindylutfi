<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_m');
        $this->load->model('user_m');
    }

    public function login()
    {
        check_already_login_customer();
        $data['util'] = $this->utility_m->get_all();
        $data['kontak'] = $this->kontak_m->get_all();
        $this->template->load('shared/landing/index', 'auth/login', $data);
    }
    public function login_admin()
    {
        check_already_login_user();
        $this->load->view('auth/login_admin');
    }
    public function process_login()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->customer_m->login($post);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $params = array(
                'id_customer' => $row->id_customer,
                'nama_customer' => $row->nama_lengkap,
                'email' => $row->email,
                'telepon' => $row->telepon,
                'username' => $row->username,
                'status' => 'login_customer'
            );
            $this->session->set_userdata($params);
            redirect('beranda', 'refresh');
        } else {
            $this->session->set_flashdata('error', 'username / password salah!');
            redirect('auth/login', 'refresh');
        }
    }
    public function process_login_admin()
    {
        $post = $this->input->post(null, TRUE);
        $query = $this->user_m->login($post);
        if ($query->num_rows() > 0) {
            $row = $query->row();
            $params = array(
                'id_user' => $row->id_user,
                'nama_user' => $row->nama_lengkap,
                'email_user' => $row->email,
                'level_user' => $row->level,
                'telepon_user' => $row->telepon,
                'username_user' => $row->username,
                'status' => 'login_user'
            );
            $this->session->set_userdata($params);
            redirect('dashboard', 'refresh');
        } else {
            $this->session->set_flashdata('error', 'username / password salah!');
            redirect('auth/login_admin', 'refresh');
        }
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
    public function logout()
    {
        $params = array(
            'id_customer',
            'nama_customer',
            'email',
            'telepon',
            'username',
            'status',
        );
        $this->session->unset_userdata($params);
        redirect('auth/login', 'refresh');
    }
    public function logout_admin()
    {
        $params = array(
            'id_user',
            'nama_user',
            'email_user',
            'telepon_user',
            'username_user',
            'status',
            'level_user',
        );
        $this->session->unset_userdata($params);
        redirect('auth/login_admin', 'refresh');
    }
}

/* End of file Auth.php */
