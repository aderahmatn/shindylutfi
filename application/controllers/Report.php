<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Report extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        check_not_login_user();
        check_role_user();
        $this->load->model('report_m');
    }
    public function index()
    {
        $report = $this->report_m;
        $validation = $this->form_validation;
        $validation->set_rules($report->rules());
        if ($validation->run() == FALSE) {
            $data['result'] = null;
            $this->template->load('shared/admin/index', 'report/index', $data);
        } else {
            $post = $this->input->post();
            $tgl1 = $post['ftgl_awal'];
            $tgl2 = $post['ftgl_akhir'];
            $data['tgl1'] = $post['ftgl_awal'];
            $data['tgl2'] = $post['ftgl_akhir'];
            $data['result'] = $this->report_m->get_by_range($tgl1, $tgl2);
            $this->template->load('shared/admin/index', 'report/index', $data);
        }
    }
}

/* End of file Report.php */
