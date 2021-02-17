<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('customer_m');
    }

    public function index()
    {
        $data['customer'] = $this->customer_m->get_all();
        $this->template->load('shared/admin/index', 'customer/index', $data);
    }
}

/* End of file Customer.php */
