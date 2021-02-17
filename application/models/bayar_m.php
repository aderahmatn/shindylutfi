<?php
defined('BASEPATH') or exit('No direct script access allowed');

class bayar_m extends CI_Model
{
    private $_table = "bayar";

    public $id_bayar;
    public $id_transaksi;
    public $id_bank;
    public $tanggal_bayar;
    public $bukti_bayar;


    public function add($post, $file)
    {
        $post = $this->input->post();
        $this->id_transaksi = $post['fid_transaksi'];
        $this->id_bayar = uniqid('byr-');
        $this->tanggal_bayar = $post['ftgl_bayar'];
        $this->id_bank = $post['fbank'];
        $this->bukti_bayar = $file;
        $this->db->insert($this->_table, $this);
    }
    public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('id_transaksi', $id);
        $this->db->join('paket', 'paket.id_paket = transaksi.id_paket');
        $query = $this->db->get();
        return $query->row();
    }
}

/* End of file bayar_m.php */
