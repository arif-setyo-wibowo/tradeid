<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function index()
    {
        $data = [
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_pembelian',$data);
    }

    

    
}

/* End of file User.php */
