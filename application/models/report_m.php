<?php
defined('BASEPATH') or exit('No direct script access allowed');

class report_m extends CI_Model
{

    public function rules()
    {
        return [
            [
                'field' => 'ftgl_awal',
                'label' => 'Tanggal Awal',
                'rules' => 'required'
            ],
            [
                'field' => 'ftgl_akhir',
                'label' => 'Tanggal Akhir',
                'rules' => 'required'
            ],
        ];
    }
    public function get_by_range($tgl1, $tgl2)
    {
        $this->db->select('*');
        $this->db->where('transaksi.tanggal_transaksi >=', $tgl1);
        $this->db->where('transaksi.tanggal_transaksi <=', $tgl2);
        $this->db->from('transaksi');
        $this->db->join('customer', 'customer.id_customer = transaksi.id_customer');
        $this->db->join('paket', 'paket.id_paket = transaksi.id_paket');
        $this->db->join('detail_transaksi', 'detail_transaksi.id_transaksi = transaksi.id_transaksi');
        $this->db->join('petugas', 'detail_transaksi.id_petugas = petugas.id_petugas', 'left');
        $this->db->order_by('transaksi.tanggal_transaksi', 'asc');

        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file report_m.php */
