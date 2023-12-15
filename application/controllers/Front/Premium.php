<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Premium extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Premium');
        $this->load->model('M_Supplier');
        $this->load->model('M_User');
    }
    
    public function index()
    {
        
        $iduser = $this->session->userdata('iduser');
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);

        if ($supplier[0]->verify == 2) {
            $data = [
                'userHeader' => $this->M_User->get_where($iduser),
                'supplier' => $supplier,
                'premium' =>  $this->M_Premium->getPremium(),
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            ];
            
            return $this->load->view('premium',$data);
        }else{
            redirect('profil');
        }
    }

    public function checkoutView($id)
    {
        $iduser = $this->session->userdata('iduser');
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);

        if ($supplier[0]->verify == 2) {
            $data = [
                'userHeader' => $this->M_User->get_where($iduser),
                'supplier' =>  $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                'premium' => $this->M_Premium->getWhere($id),
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            ];
            
            return $this->load->view('checkout',$data);
        }else{
            redirect('profil');
        }
    }

    public function checkout($id)
    {
        $iduser = $this->session->userdata('iduser');
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);

        if ($supplier[0]->verify == 2) {
            $data = [
                'userHeader' => $this->M_User->get_where($iduser),
                'supplier' =>  $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                'premium' => $this->M_Premium->getWhere($id),
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            ];
            
            return $this->load->view('checkout',$data);
        }else{
            redirect('profil');
        }
    }
}

/* End of file supplier.php */
