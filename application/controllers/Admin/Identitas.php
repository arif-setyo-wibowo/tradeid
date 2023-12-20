<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Identitas extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        
    }
    
    public function index()
    {
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{
            $data = [
                'header' => 'template/v_header_admin',
                'footer' => 'template/v_footer_admin',
            ];
            return $this->load->view('admin/v_identitas',$data);
        }
    }

    

    
}

/* End of file User.php */
