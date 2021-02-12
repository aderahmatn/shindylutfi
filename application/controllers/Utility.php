<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utility extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('utility_m');
        $this->load->model('kontak_m');
    }


    public function index()
    {
        $data['util'] = $this->utility_m->get_all();
        $data['kontak'] = $this->kontak_m->get_all();
        $this->template->load('shared/admin/index', 'utility/index', $data);
    }
    public function website($id)
    {
        if (!isset($id)) redirect('utility');
        $utility = $this->utility_m;
        $validation = $this->form_validation;
        $validation->set_rules($utility->rules());
        if ($this->form_validation->run()) {
            $post = $this->input->post(null, TRUE);
            if ($_FILES['fimage_hero']['name'] != null) {
                $config['upload_path']          = './uploads/utility';
                $config['allowed_types']        = 'gif|jpg|png|jpeg';
                $config['max_size']             = 2500;
                $config['file_name']            = uniqid('img-');
                $this->load->library('upload', $config);
                if (!$this->upload->do_upload('fimage_hero')) {
                    $this->upload->display_errors();
                    $this->session->set_flashdata('error', 'Data utility gagal diupdate!');
                    $this->template->load('shared/admin/index', 'utility/index');
                } else {
                    $data = $this->upload->data();
                    $file = $data['file_name'];
                    $this->utility_m->update($post, $file);
                    if ($this->db->affected_rows() > 0) {
                        $this->session->set_flashdata('success', 'utility Berhasil Diupdate!');
                        redirect('utility', 'refresh');
                    } else {
                        $this->session->set_flashdata('warning', 'Data utility Tidak Diupdate!');
                        redirect('utility', 'refresh');
                    }
                }
            } else {
                $file = $post['fimage_hero_lama'];
                $this->utility_m->update($post, $file);
                if ($this->db->affected_rows() > 0) {
                    $this->session->set_flashdata('success', 'utility Berhasil Diupdate!');
                    redirect('utility', 'refresh');
                } else {
                    $this->session->set_flashdata('warning', 'Data utility Tidak Diupdate!');
                    redirect('utility', 'refresh');
                }
            }
        }
        $data['utility'] = $this->utility_m->get_by_id($id);
        if (!$data['utility']) {
            $this->session->set_flashdata('error', 'Data utility Tidak ditemukan!');
            redirect('utility', 'refresh');
        }
        $this->template->load('shared/admin/index', 'utility/edit', $data);
    }
    public function kontak($id = null)
    {
        if (!isset($id)) redirect('utility');
        $kontak = $this->kontak_m;
        $validation = $this->form_validation;
        $validation->set_rules($kontak->rules());
        if ($this->form_validation->run()) {
            $post = $this->input->post(null, TRUE);
            $this->kontak_m->update($post);
            if ($this->db->affected_rows() > 0) {
                $this->session->set_flashdata('success', 'kontak Berhasil Diupdate!');
                redirect('utility', 'refresh');
            } else {
                $this->session->set_flashdata('warning', 'Data kontak Tidak Diupdate!');
                redirect('utility', 'refresh');
            }
        }
        $data['kontak'] = $this->kontak_m->get_by_id($id);
        if (!$data['kontak']) {
            $this->session->set_flashdata('error', 'Data kontak Tidak ditemukan!');
            redirect('utility', 'refresh');
        }
        $this->template->load('shared/admin/index', 'utility/kontak', $data);
    }
}

/* End of file Utility.php */
