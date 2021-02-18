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
        $this->db->join('paket', 'paket.id_paket = transaksi.id_paket');
        $this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
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
    public function add_detail($post)
    {
        $post = $this->input->post();
        $this->db->set('id_detail_transaksi', uniqid('det-'));
        $this->db->set('id_transaksi', $post['fid_transaksi']);
        $this->db->set('tanggal_acara', $post['ftgl_acara']);
        $this->db->set('alamat_acara', $post['falamat_acara']);
        $this->db->insert('detail_transaksi');
    }
    public function get_by_id($id)
    {
        $this->db->select('*');
        $this->db->from($this->_table);
        $this->db->where('transaksi.id_transaksi', $id);
        $this->db->join('customer', 'customer.id_customer = transaksi.id_customer');
        $this->db->join('paket', 'paket.id_paket = transaksi.id_paket');
        $this->db->join('bayar', 'bayar.id_transaksi = transaksi.id_transaksi', 'left');
        $this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $query = $this->db->get();
        return $query->row();
    }
    public function update_konfirmasi_pembayaran($id)
    {
        $this->db->set('status_transaksi', 'menunggu konfirmasi');
        $this->db->where('id_transaksi', $id);
        $this->db->update($this->_table);
    }
}

/* End of file pesanan_m.php */
