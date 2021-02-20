<?php
defined('BASEPATH') or exit('No direct script access allowed');

class petugas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login_user();
        check_role_user();
        $this->load->model('petugas_m');
    }

    public function index()
    {
        $data['petugas'] = $this->petugas_m->get_all();
        $this->template->load('shared/admin/index', 'petugas/index', $data);
    }
    public function create()
    {
        $petugas  = $this->petugas_m;
        $validation = $this->form_validation;
        $validation->set_rules($petugas->rules());
        if ($validation->run() == FALSE) {
            $this->template->load('shared/admin/index', 'petugas/create');
        } else {
            $post = $this->input->post(null, TRUE);
            $petugas->Add($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'Data petugas berhasil disimpan!');
                redirect('petugas', 'refresh');
            }
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('petugas');
        $petugas = $this->petugas_m;
        $validation = $this->form_validation;
        $validation->set_rules($petugas->rules());
        if ($this->form_validation->run()) {
            $post = $this->input->post(null, TRUE);
            $this->petugas_m->update($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'petugas Berhasil Diupdate!');
                redirect('petugas', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Data petugas Tidak Diupdate!');
                redirect('petugas', 'refresh');
            }
        }
        $data['petugas'] = $this->petugas_m->get_by_id($id);
        if (!$data['petugas']) {
            $this->session->set_flashdata('error', 'Data petugas Tidak ditemukan!');
            redirect('petugas', 'refresh');
        }
        $this->template->load('shared/admin/index', 'petugas/edit', $data);
    }
    public function delete($id)
    {
        $this->petugas_m->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data petugas Berhsil Dihapus!');
            redirect('petugas', 'refresh');
        }
    }
}

/* End of file petugas.php */
