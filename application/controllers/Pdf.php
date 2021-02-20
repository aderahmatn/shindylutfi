<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pdf extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('report_m');
        include_once APPPATH . '/third_party/fpdf/fpdf.php';
    }


    public function report($tgl1, $tgl2)
    {
        $data['result'] = $this->report_m->get_by_range($tgl1, $tgl2);
        $data['tgl1'] = $tgl1;
        $data['tgl2'] = $tgl2;
        $this->load->view('report/pdf_report', $data);
    }
}

/* End of file Pdf.php */
