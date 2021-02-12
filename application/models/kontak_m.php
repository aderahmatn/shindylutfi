<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kontak_m extends CI_Model
{

    private $_table = "kontak";

    public $id_kontak;
    public $telepon;
    public $email;
    public $instagram;
    public $twitter;
    public $youtube;
    public $facebook;
    public $alamat;

    public function rules()
    {
        return [
            [
                'field' => 'ftelepon',
                'label' => 'Telepon',
                'rules' => 'required'
            ],
            [
                'field' => 'femail',
                'label' => 'Email',
                'rules' => 'required'
            ],
            [
                'field' => 'finstagram',
                'label' => 'Instagram',
                'rules' => 'required'
            ],
            [
                'field' => 'ftwitter',
                'label' => 'Twitter',
                'rules' => 'required'
            ],
            [
                'field' => 'fyoutube',
                'label' => 'Youtube',
                'rules' => 'required'
            ],
            [
                'field' => 'ffacebook',
                'label' => 'Facebook',
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
        return $query->row();
    }
    public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('kontak.id_kontak', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function update($post)
    {
        $post = $this->input->post();
        $this->db->set('telepon', $post['ftelepon']);
        $this->db->set('email', $post['femail']);
        $this->db->set('instagram', $post['finstagram']);
        $this->db->set('twitter', $post['ftwitter']);
        $this->db->set('facebook', $post['ffacebook']);
        $this->db->set('youtube', $post['fyoutube']);
        $this->db->set('alamat', $post['falamat']);
        $this->db->where('id_kontak', $post['fid_kontak']);
        $this->db->update($this->_table);
    }
}

/* End of file kontak_m.php */
