<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    public function index()
    {
        $data = [
            'header' => 'template/v_header_supplier',
            'footer' => 'template/v_footer_supplier',
        ];
        return $this->load->view('supplier/v_supplier',$data);
    }

}

/* End of file supplier.php */
