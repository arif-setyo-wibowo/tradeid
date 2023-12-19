<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Perusahaan extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Company');
        
    }
    
    public function index()
    {
        $data = [
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
            'company' => $this->M_Company->getCompany(),
        ];
        return $this->load->view('admin/v_company',$data);
    }

    public function detail($id)
    {
        $data = [
            'company' =>  $this->M_Company->getWhere($id),
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_detailCompany',$data);
    }



    

    
}

/* End of file User.php */
