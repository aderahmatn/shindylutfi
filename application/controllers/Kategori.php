<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kategori_m');
    }

    public function index()
    {
        $data['kategori'] = $this->kategori_m->get_all();
        $this->template->load('shared/admin/index', 'kategori/index', $data);
    }
    public function create()
    {
        $kategori  = $this->kategori_m;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());
        if ($validation->run() == FALSE) {
            $this->template->load('shared/admin/index', 'kategori/create');
        } else {
            $post = $this->input->post(null, TRUE);
            $kategori->Add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data kategori berhasil disimpan!');
                redirect('kategori', 'refresh');
            }
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('kategori');
        $kategori = $this->kategori_m;
        $validation = $this->form_validation;
        $validation->set_rules($kategori->rules());
        if ($this->form_validation->run()) {
            $post = $this->input->post(null, TRUE);
            $this->kategori_m->update($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'kategori Berhasil Diupdate!');
                redirect('kategori', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Data kategori Tidak Diupdate!');
                redirect('kategori', 'refresh');
            }
        }
        $data['kategori'] = $this->kategori_m->get_by_id($id);
        if (!$data['kategori']) {
            $this->session->set_flashdata('error', 'Data kategori Tidak ditemukan!');
            redirect('kategori', 'refresh');
        }
        $this->template->load('shared/admin/index', 'kategori/edit', $data);
    }
    public function delete($id)
    {
        $this->kategori_m->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data kategori Berhsil Dihapus!');
            redirect('kategori', 'refresh');
        }
    }
}

/* End of file Kategori.php */
