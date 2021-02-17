<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Portofolio extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('portofolio_m');
        $this->load->model('kategori_m');
    }
    public function index()
    {
        $data['portofolio'] = $this->portofolio_m->get_all();
        $this->template->load('shared/admin/index', 'portofolio/index', $data);
    }
    public function create()
    {
        $portofolio  = $this->portofolio_m;
        $validation = $this->form_validation;
        $validation->set_rules($portofolio->rules());
        if ($validation->run() == FALSE) {
            $data['kategori'] = $this->kategori_m->get_all();
            $this->template->load('shared/admin/index', 'portofolio/create', $data);
        } else {
            $post = $this->input->post(null, TRUE);
            $config['upload_path']          = './uploads/portofolio';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
            $config['max_size']             = 2500;
            $config['file_name']            = uniqid('img-');
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('ffoto')) {
                $this->session->set_flashdata('error', 'Data portofolio gagal disimpan!');
                $this->template->load('shared/admin/index', 'portofolio/create');
            } else {
                $data = $this->upload->data();
                $file = $data['file_name'];
                $portofolio->Add($post, $file);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'Data portofolio berhasil disimpan!');
                    redirect('portofolio', 'refresh');
                }
            }
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('portofolio');
        $portofolio = $this->portofolio_m;
        $validation = $this->form_validation;
        $validation->set_rules($portofolio->rules());
        if ($this->form_validation->run()) {
            $post = $this->input->post(null, TRUE);
            if ($_FILES['ffoto']['name'] != null) {
                $config['upload_path']          = './uploads/portofolio';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2500;
                $config['file_name']            = uniqid('img-');
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('ffoto')) {
                    $this->upload->display_errors();
                    $this->session->set_flashdata('error', 'Data portofolio gagal diupdate!');
                    $this->template->load('shared/admin/index', 'portofolio/index');
                } else {
                    $data = $this->upload->data();
                    $file = $data['file_name'];
                    $this->portofolio_m->update($post, $file);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'portofolio Berhasil Diupdate!');
                        redirect('portofolio', 'refresh');
                    } else {
                        $this->session->set_flashdata('warning', 'Data portofolio Tidak Diupdate!');
                        redirect('portofolio', 'refresh');
                    }
                }
            } else {
                $file = $post['ffoto_lama'];
                $this->portofolio_m->update($post, $file);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'portofolio Berhasil Diupdate!');
                    redirect('portofolio', 'refresh');
                } else {
                    $this->session->set_flashdata('warning', 'Data portofolio Tidak Diupdate!');
                    redirect('portofolio', 'refresh');
                }
            }
        }
        $data['portofolio'] = $this->portofolio_m->get_by_id($id);
        if (!$data['portofolio']) {
            $this->session->set_flashdata('error', 'Data portofolio Tidak ditemukan!');
            redirect('portofolio', 'refresh');
        }
        $data['kategori'] = $this->kategori_m->get_all();
        $this->template->load('shared/admin/index', 'portofolio/edit', $data);
    }
    public function delete($id)
    {
        $this->portofolio_m->delete($id);
        if ($this->db->affected_rows() > 0) {
            $this->session->set_flashdata('success', 'Data portofolio Berhasil Dihapus!');
            redirect('portofolio', 'refresh');
        }
    }
}

/* End of file Portofolio.php */
