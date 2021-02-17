<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pesanan_m extends CI_Model
{
    private $_table = "transaksi";

    public $id_transaksi;
    public $id_customer;
    public $status_transaksi;
    public $tanggal_transaksi;
    public $no_transaksi;
    public $id_paket;

    public function get_all()
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->join('customer', 'customer.id_customer = transaksi.id_customer');
        $query = $this->db->get();
        return $query->result();
    }

    public function add($post)
    {
        $post = $this->input->post();
        $this->id_transaksi = $post['fid_transaksi'];
        $this->id_customer = $post['fid_customer'];
        $this->status_transaksi = 'belum bayar';
        $this->tanggal_transaksi = date('Y-m-d');
        $this->id_paket = $post['fid_paket'];
        $this->no_transaksi = uniqid('nt-');
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

/* End of file pesanan_m.php */
