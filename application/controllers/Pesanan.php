<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pesanan_m');
        $this->load->model('bayar_m');
        $this->load->model('petugas_m');
    }

    public function index()
    {
        check_not_login_user();
        check_role_user();
        $data['pesanan'] = $this->pesanan_m->get_all();
        $this->template->load('shared/admin/index', 'pesanan/index', $data);
    }
    public function konfirmasi_bayar($id)
    {
        check_not_login_user();
        check_role_user();
        $data['pesanan'] = $this->pesanan_m->get_by_id($id);
        $data['petugas'] = $this->petugas_m->get_all();
        $this->template->load('shared/admin/index', 'pesanan/konfirmasi_bayar', $data);
    }
    public function konfirmasi_selesai($id)
    {
        check_not_login_user();
        check_role_user();
        $this->pesanan_m->update_pesanan_selesai($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Pesanan selesai!');
            redirect('pesanan', 'refresh');
        }
    }
    public function process_konfirmasi_bayar()
    {
        check_not_login_user();
        check_role_user();
        $post = $this->input->post(null, TRUE);
        $this->pesanan_m->konfirmasi_bayar($post);
        $this->pesanan_m->update_pesanan_diproses($post['fid_transaksi']);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Konfirmasi pembayaran berhasil!');
            redirect('pesanan', 'refresh');
        }
    }
    public function create()
    {

        $post = $this->input->post(null, TRUE);
        if ($post['fid_customer'] == null) {
            $this->session->set_flashdata('error', 'Silahkan login sebelum melakukan pemesanan!');
            redirect('auth/login', 'refresh');
        } else {
            $this->pesanan_m->add($post);
            $this->pesanan_m->add_detail($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data pesanan berhasil disimpan!');
                $data['util'] = $this->utility_m->get_all();
                $data['kontak'] = $this->kontak_m->get_all();
                $data['pesanan'] = $this->pesanan_m->get_by_id($post['fid_transaksi']);
                $this->template->load('shared/landing/index', 'pesanan/pembayaran', $data);
            }
        }
    }
    public function pembayaran($id)
    {
        check_not_login_customer();
        check_role_customer();
        $data['util'] = $this->utility_m->get_all();
        $data['kontak'] = $this->kontak_m->get_all();
        $data['pesanan'] = $this->pesanan_m->get_by_id($id);
        $this->template->load('shared/landing/index', 'pesanan/pembayaran', $data);
    }
    public function bayar()
    {
        check_not_login_customer();
        check_role_customer();
        $post = $this->input->post(null, TRUE);
        $config['upload_path']          = './uploads/bayar';
        $config['allowed_types']        = 'gif|jpg|png|jpeg';
        $config['max_size']             = 2500;
        $config['file_name']            = uniqid('img-');
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('ffoto')) {
            $this->session->set_flashdata('error', 'Konfirmasi pembayaran gagal dikirim!');
            $data['util'] = $this->utility_m->get_all();
            $data['kontak'] = $this->kontak_m->get_all();
            $this->template->load('shared/landing/index', 'paket_mua/index', $data);
        } else {
            $data = $this->upload->data();
            $file = $data['file_name'];
            $this->bayar_m->Add($post, $file);
            $this->pesanan_m->update_konfirmasi_pembayaran($post['fid_transaksi']);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Konfirmasi pembayaran berhasil dikirim!');
                redirect('pesanan/berhasil', 'refresh');
            }
        }
    }
    public function berhasil()
    {
        check_not_login_customer();
        check_role_customer();
        $data['util'] = $this->utility_m->get_all();
        $data['kontak'] = $this->kontak_m->get_all();
        $this->template->load('shared/landing/index', 'pesanan/berhasil', $data);
    }
    public function pesanan_saya()
    {
        check_not_login_customer();
        check_role_customer();
        $data['pesanan'] = $this->pesanan_m->get_by_customer($this->session->userdata('id_customer'));
        $data['util'] = $this->utility_m->get_all();
        $data['kontak'] = $this->kontak_m->get_all();
        $this->template->load('shared/landing/index', 'pesanan/pesanan_saya', $data);
    }
    public function batal($id)
    {
        check_not_login_customer();
        check_role_customer();
        $this->pesanan_m->batal($id);
        $this->pesanan_m->batal_detail($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Pesanan berhasil dibatalkan');
            redirect('pesanan/pesanan_saya', 'refresh');
        }
    }
}

/* End of file Pesanan.php */
