<?php
defined('BASEPATH') or exit('No direct script access allowed');

class customer_m extends CI_Model
{

    private $_table = "customer";

    public $id_customer;
    public $nama_lengkap;
    public $email;
    public $telepon;
    public $username;
    public $password;
    public $alamat;
    public $tanggal_daftar;

    public function rules()
    {
        return [
            [
                'field' => 'fnama_lengkap',
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
                'rules' => 'required|matches[fconfrim_password]'
            ],
            [
                'field' => 'fconfrim_password',
                'label' => 'Konfirmasi Password',
                'rules' => 'required|matches[fpassword]'
            ],
            [
                'field' => 'falamat',
                'label' => 'Alamat',
                'rules' => 'required'
            ],
        ];
    }

    public function add()
    {
        $post = $this->input->post();
        $this->id_customer = uniqid('cs-');
        $this->nama_lengkap = $post['fnama_lengkap'];
        $this->email = $post['femail'];
        $this->telepon = $post['ftelepon'];
        $this->alamat = $post['falamat'];
        $this->tanggal_daftar = date('Y-m-d');
        $this->username = $post['fusername'];
        $this->password = md5($post['fpassword']);
        $this->db->insert($this->_table, $this);
    }
}

/* End of file customer_m.php */
