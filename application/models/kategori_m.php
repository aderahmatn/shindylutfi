<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kategori_m extends CI_Model
{

    private $_table = "kategori";

    public $id_kategori;
    public $nama_kategori;
    public $deleted;

    public function rules()
    {
        return [
            [
                'field' => 'fnama_kategori',
                'label' => 'Kategori',
                'rules' => 'required'
            ],
        ];
    }
    public function get_all()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('deleted', 0);
        $query = $this->db->get();
        return $query->result();
    }
    public function get_by_id($id)
    {
        return $this->db->get_where($this->_table, ["id_kategori" => $id])->row();
    }
    public function add($post)
    {
        $post = $this->input->post();
        $this->id_kategori = uniqid('kt-');
        $this->nama_kategori = $post['fnama_kategori'];
        $this->deleted = 0;
        $this->db->insert($this->_table, $this);
    }

    public function update($post)
    {
        $post = $this->input->post();
        $this->db->set('nama_kategori', $post['fnama_kategori']);
        $this->db->where('id_kategori', $post['fid_kategori']);
        $this->db->update($this->_table);
    }
    public function delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_kategori', $id);
        $this->db->update($this->_table);
    }
}

/* End of file kategori_m.php */
