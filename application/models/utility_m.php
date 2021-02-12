<?php
defined('BASEPATH') or exit('No direct script access allowed');

class utility_m extends CI_Model
{
    private $_table = "utility";

    public $id_utility;
    public $nama_website;
    public $judul_hero;
    public $sub_judul_hero;
    public $image_hero;

    public function rules()
    {
        return [
            [
                'field' => 'fnama_website',
                'label' => 'Nama Website',
                'rules' => 'required'
            ],
            [
                'field' => 'fjudul_hero',
                'label' => 'Judul Hero',
                'rules' => 'required'
            ],
            [
                'field' => 'fsub_judul_hero',
                'label' => 'Sub Judul Hero',
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
        $this->db->where('utility.id_utility', $id);
        $query = $this->db->get();
        return $query->row();
    }
    public function add($post, $file)
    {
        $post = $this->input->post();
        $this->id_paket = uniqid('pkt-');
        $this->id_kategori = $post['fkategori'];
        $this->nama_paket = $post['fnama_paket'];
        $this->harga = $post['fharga'];
        $this->foto = $file;
        $this->deleted = 0;
        $this->deskripsi = $post['fdeskripsi'];
        $this->db->insert($this->_table, $this);
    }

    public function update($post, $file)
    {
        $post = $this->input->post();
        $this->db->set('nama_website', $post['fnama_website']);
        $this->db->set('judul_hero', $post['fjudul_hero']);
        $this->db->set('sub_judul_hero', $post['fsub_judul_hero']);
        $this->db->set('image_hero', $file);
        $this->db->where('id_utility', $post['fid_utility']);
        $this->db->update($this->_table);
    }
    public function delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_paket', $id);
        $this->db->update($this->_table);
    }
}

/* End of file utility_m.php */
