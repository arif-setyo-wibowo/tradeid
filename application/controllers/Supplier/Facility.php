<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller {

    public function index()
    {
        $data = [
            'header' => 'template/v_header_supplier',
            'footer' => 'template/v_footer_supplier',
        ];
        return $this->load->view('supplier/v_facility',$data);
    }

    public function add()
    {
        $data = [
            'header' => 'template/v_header_supplier',
            'footer' => 'template/v_footer_supplier',
        ];
        return $this->load->view('supplier/v_facilityForm',$data);
    }

}

/* End of file supplier.php */
