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
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{

            $data = [
                'header' => 'template/v_header_admin',
                'footer' => 'template/v_footer_admin',
                'company' => $this->M_Company->getCompany(),
            ];
            return $this->load->view('admin/v_company',$data);
        }
    }

    public function detail($id)
    {
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{

            $data = [
                'company' =>  $this->M_Company->getWhere($id),
                'header' => 'template/v_header_admin',
                'footer' => 'template/v_footer_admin',
            ];
            return $this->load->view('admin/v_detailCompany',$data);
        }
    }



    

    
}

/* End of file User.php */
