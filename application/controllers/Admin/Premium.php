<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Premium extends CI_Controller {

    
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
        return $this->load->view('admin/v_Premium',$data);
    }

    

    
}

/* End of file User.php */
