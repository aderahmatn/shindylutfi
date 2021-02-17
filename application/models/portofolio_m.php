<?php
defined('BASEPATH') or exit('No direct script access allowed');

class portofolio_m extends CI_Model
{

    private $_table = "portofolio";

    public $id_portofolio;
    public $image;
    public $id_kategori;

    public function rules()
    {
        return [
            [
                'field' => 'fkategori',
                'label' => 'Kategori',
                'rules' => 'required'
            ],
        ];
    }
    public function get_all()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('kategori', 'kategori.id_kategori = portofolio.id_kategori');
        $query = $this->db->get();
        return $query->result();
    }
    public function get_all_group()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('kategori', 'kategori.id_kategori = portofolio.id_kategori');
        $this->db->group_by('portofolio.id_kategori');

        $query = $this->db->get();
        return $query->result();
    }
    public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('portofolio.id_portofolio', $id);
        $this->db->join('kategori', 'kategori.id_kategori = portofolio.id_kategori');
        $query = $this->db->get();
        return $query->row();
    }
    public function add($post, $file)
    {
        $post = $this->input->post();
        $this->id_portofolio = uniqid('por-');
        $this->id_kategori = $post['fkategori'];
        $this->image = $file;
        $this->db->insert($this->_table, $this);
    }
    public function Delete($id)
    {
        $this->db->where('id_portofolio', $id);
        $this->db->delete($this->_table);
    }
    public function update($post, $file)
    {
        $post = $this->input->post();
        $this->db->set('id_kategori', $post['fkategori']);
        $this->db->set('image', $file);
        $this->db->where('id_portofolio', $post['fid_portofolio']);
        $this->db->update($this->_table);
    }
}

/* End of file portofolio_m.php */
