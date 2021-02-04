<?php
defined('BASEPATH') or exit('No direct script access allowed');

class paket_m extends CI_Model
{
    private $_table = "paket";

    public $id_paket;
    public $nama_paket;
    public $id_kategori;
    public $deskripsi;
    public $harga;
    public $foto;
    public $deleted;
    public function rules()
    {
        return [
            [
                'field' => 'fnama_paket',
                'label' => 'Nama Paket',
                'rules' => 'required'
            ],
            [
                'field' => 'fkategori',
                'label' => 'Kategori',
                'rules' => 'required'
            ],
            [
                'field' => 'fdeskripsi',
                'label' => 'Deskripsi',
                'rules' => 'required'
            ],
            [
                'field' => 'fharga',
                'label' => 'Harga',
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
        return $this->db->get_where($this->_table, ["id_paket" => $id])->row();
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
        $this->db->set('id_kategori', $post['fkategori']);
        $this->db->set('nama_paket', $post['fnama_paket']);
        $this->db->set('harga', $post['fharga']);
        $this->db->set('deskripsi', $post['fdeskripsi']);
        $this->db->set('foto', $file);
        $this->db->where('id_paket', $post['fid_paket']);
        $this->db->update($this->_table);
    }
    public function delete($id)
    {
        $this->db->set('deleted', 1);
        $this->db->where('id_paket', $id);
        $this->db->update($this->_table);
    }
}

/* End of file paket_m.php */
