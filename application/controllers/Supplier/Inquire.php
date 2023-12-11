<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Inquire extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $data = [
            'header' => 'template/v_header_supplier',
            'footer' => 'template/v_footer_supplier',
        ];
        return $this->load->view('supplier/v_detailInquire',$data);
    }

}

/* End of file Inquire.php */
