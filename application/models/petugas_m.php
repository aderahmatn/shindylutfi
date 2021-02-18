<?php
defined('BASEPATH') or exit('No direct script access allowed');

class petugas_m extends CI_Model
{

    private $_table = "petugas";

    public $id_petugas;
    public $nama_petugas;
    public $email;
    public $telepon;
    public $alamat;


    public function rules()
    {
        return [
            [
                'field' => 'fnama_user',
                'label' => 'Nama Lengkap',
                'rules' => 'required'
            ],
            [
                'field' => 'femail',
                'label' => 'Email',
                'rules' => 'required|valid_email'
            ],
            [
                'field' => 'ftelepon',
                'label' => 'Telepon',
                'rules' => 'required'
            ],
            [
                'field' => 'falamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
        ];
    }
    public function get_all()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_by_id($id)
    {
        return $this->db->get_where($this->_table, ["id_petugas" => $id])->row();
    }
    public function add()
    {
        $post = $this->input->post();
        $this->id_petugas = uniqid('petugas-');
        $this->nama_petugas = $post['fnama_user'];
        $this->email = $post['femail'];
        $this->telepon = $post['ftelepon'];
        $this->alamat = $post['falamat'];
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->delete($this->_table);
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->db->set('nama_petugas', $post['fnama_user']);
        $this->db->set('email', $post['femail']);
        $this->db->set('telepon', $post['ftelepon']);
        $this->db->set('alamat', $post['falamat']);
        $this->db->where('id_petugas', $post['fid_petugas']);
        $this->db->update($this->_table);
    }
}

/* End of file petugas_m.php */
