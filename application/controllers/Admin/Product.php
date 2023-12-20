<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Product');
        
    }
    
    public function index()
    {
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{

            $data = [
                'product' => $this->M_Product->getAllProduct(),
                'header' => 'template/v_header_admin',
                'footer' => 'template/v_footer_admin',
            ];
            return $this->load->view('admin/v_product',$data);
        }
    }

    public function detail($id)
    {
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{

            $data = [
                'product' =>  $this->M_Product->getWhereOne($id),
                'header' => 'template/v_header_admin',
                'footer' => 'template/v_footer_admin',
            ];
            return $this->load->view('admin/v_productDetail',$data);
        }
    }



    

    
}

/* End of file User.php */
