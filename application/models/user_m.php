<?php
defined('BASEPATH') or exit('No direct script access allowed');

class user_m extends CI_Model
{

    private $_table = "user";

    public $id_user;
    public $nama_lengkap;
    public $email;
    public $telepon;
    public $alamat;
    public $username;
    public $password;
    public $level;
    public $status_aktif;
    public $tanggal_daftar;

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
                'field' => 'fusername',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'fpassword',
                'label' => 'Password',
                'rules' => 'required'
            ],
            [
                'field' => 'flevel',
                'label' => 'Level',
                'rules' => 'required'
            ],
            [
                'field' => 'fstatus',
                'label' => 'Status',
                'rules' => 'required'
            ],
            [
                'field' => 'falamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
        ];
    }
    public function rules_update()
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
                'field' => 'fusername',
                'label' => 'Username',
                'rules' => 'required'
            ],
            [
                'field' => 'flevel',
                'label' => 'Level',
                'rules' => 'required'
            ],
            [
                'field' => 'fstatus',
                'label' => 'Status',
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
        return $this->db->get_where($this->_table, ["id_user" => $id])->row();
    }
    public function add()
    {
        $post = $this->input->post();
        $this->id_user = uniqid('user-');
        $this->nama_lengkap = $post['fnama_user'];
        $this->email = $post['femail'];
        $this->telepon = $post['ftelepon'];
        $this->alamat = $post['falamat'];
        $this->level = $post['flevel'];
        $this->status_aktif = $post['fstatus'];
        $this->tanggal_daftar = date('Y-m-d');
        $this->username = $post['fusername'];
        $this->password = md5($post['fpassword']);
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->where('id_user', $id);
        $this->db->delete($this->_table);
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->db->set('nama_lengkap', $post['fnama_user']);
        $this->db->set('email', $post['femail']);
        $this->db->set('telepon', $post['ftelepon']);
        $this->db->set('username', $post['fusername']);
        $this->db->set('level', $post['flevel']);
        $this->db->set('status_aktif', $post['fstatus']);
        $this->db->set('alamat', $post['falamat']);
        $this->db->where('id_user', $post['fid_user']);
        $this->db->update($this->_table);
    }
}

/* End of file user_m.php */
