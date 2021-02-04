<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('paket_m');
    }

    public function index()
    {
        $data['paket'] = $this->paket_m->get_all();
        $this->template->load('shared/index', 'paket/index', $data);
    }
    public function create()
    {
        $paket  = $this->paket_m;
        $validation = $this->form_validation;
        $validation->set_rules($paket->rules());
        if ($validation->run() == FALSE) {
            $this->template->load('shared/index', 'paket/create');
        } else {
            $post = $this->input->post(null, TRUE);
            $config['upload_path']          = './uploads/paket';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2500;
            $config['file_name']            = uniqid('img-');
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('ffoto')) {
                $this->session->set_flashdata('error', 'Data paket gagal disimpan!');
                $this->template->load('shared/index', 'paket/create');
            } else {
                $data = $this->upload->data();
                $file = $data['file_name'];
                $paket->Add($post, $file);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data paket berhasil disimpan!');
                    redirect('paket', 'refresh');
                }
            }
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('user');
        $paket = $this->paket_m;
        $validation = $this->form_validation;
        $validation->set_rules($paket->rules());
        if ($this->form_validation->run()) {
            $post = $this->input->post(null, TRUE);
            if ($_FILES['ffoto']['name'] != null) {
                $config['upload_path']          = './uploads/paket';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2500;
                $config['file_name']            = uniqid('img-');
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('ffoto')) {
                    $this->upload->display_errors();
                    $this->session->set_flashdata('error', 'Data paket gagal diupdate!');
                    $this->template->load('shared/index', 'paket/index');
                } else {
                    $data = $this->upload->data();
                    $file = $data['file_name'];
                    $this->paket_m->update($post, $file);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'paket Berhasil Diupdate!');
                        redirect('paket', 'refresh');
                    } else {
                        $this->session->set_flashdata('warning', 'Data paket Tidak Diupdate!');
                        redirect('paket', 'refresh');
                    }
                }
            } else {
                $file = $post['ffoto_lama'];
                $this->paket_m->update($post, $file);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'paket Berhasil Diupdate!');
                    redirect('paket', 'refresh');
                } else {
                    $this->session->set_flashdata('warning', 'Data paket Tidak Diupdate!');
                    redirect('paket', 'refresh');
                }
            }
        }
        $data['paket'] = $this->paket_m->get_by_id($id);
        if (!$data['paket']) {
            $this->session->set_flashdata('error', 'Data paket Tidak ditemukan!');
            redirect('paket', 'refresh');
        }
        $this->template->load('shared/index', 'paket/edit', $data);
    }
    public function delete($id)
    {
        $this->paket_m->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data paket Berhasil Dihapus!');
            redirect('paket', 'refresh');
        }
    }
}

/* End of file Paket.php */
