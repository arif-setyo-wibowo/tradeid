<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Supplier');
    }
    
    public function index()
    {
        $data = [
            'supplier' => $this->M_Supplier->getSupplier(),
            'header' => 'template/v_header_supplier',
            'footer' => 'template/v_footer_supplier',
        ];
        return $this->load->view('supplier/v_profileCompany',$data);
    }

}

/* End of file supplier.php */
