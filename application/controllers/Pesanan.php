<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('pesanan_m');
        $this->load->model('bayar_m');
    }

    public function index()
    {
        $data['pesanan'] = $this->pesanan_m->get_all();
        $this->template->load('shared/admin/index', 'pesanan/index', $data);
    }
    public function create()
    {
        $post = $this->input->post(null, TRUE);
        if ($post['fid_customer'] == null) {
            $this->session->set_flashdata('error', 'Silahkan login sebelum melakukan pemesanan!');
            redirect('auth/login', 'refresh');
        } else {
            $this->pesanan_m->add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data pesanan berhasil disimpan!');
                $data['util'] = $this->utility_m->get_all();
                $data['kontak'] = $this->kontak_m->get_all();
                $data['pesanan'] = $this->pesanan_m->get_by_id($post['fid_transaksi']);
                $this->template->load('shared/landing/index', 'pesanan/pembayaran', $data);
            }
        }
    }

    public function bayar()
    {
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
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Konfirmasi pembayaran berhasil dikirim!');
                redirect('pesanan/berhasil', 'refresh');
            }
        }
    }
    public function berhasil()
    {
        $data['util'] = $this->utility_m->get_all();
        $data['kontak'] = $this->kontak_m->get_all();
        $this->template->load('shared/landing/index', 'pesanan/berhasil', $data);
    }
}

/* End of file Pesanan.php */
