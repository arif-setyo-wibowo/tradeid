<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Supplier');
    }
    
    public function index()
    {
        if (!$this->session->userdata('iduser')) {
            redirect('logout');
         }else{
            $iduser = $this->session->userdata('iduser');
            $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
            if ($supplier[0]->verify == 2) {
                $data = [
                    'header' => 'template/v_header_supplier',
                    'footer' => 'template/v_footer_supplier',
                ];
                return $this->load->view('supplier/v_supplier',$data);
            }else{
                
                redirect('profil');
                
            }
            
        }
    }

}

/* End of file supplier.php */
