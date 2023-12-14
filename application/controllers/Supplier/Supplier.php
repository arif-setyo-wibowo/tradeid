<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Product');
        $this->load->model('M_Supplier');
        $this->load->model('M_Inquire');
    }
    
    public function index()
    {
        if (!$this->session->userdata('iduser')) {
            redirect('logout');
         }else{
            $iduser = $this->session->userdata('iduser');
            $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
            $company = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);
            
            if ($supplier[0]->verify == 2) {

                if ($this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier) == null) {
                    $data = [
                        'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                        'cekdata' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];

                    $this->session->set_flashdata('pesan', 'Complete Your Data Company');

                    return $this->load->view('supplier/v_profileCompany',$data);
                }else{
                    $data = [
                        'inquire' => $this->M_Inquire->getWhereCompany($company[0]->idcompany),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];
                    return $this->load->view('supplier/v_supplier',$data);
                }
            }else{
                redirect('profil');
            }
            
        }
    }

    function buyerDetail($id){

        $iduser = $this->session->userdata('iduser');
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Product->getWhereIdSupplier($supplier[0]->idsupplier);

        $data = [
            'inquire' => $this->M_Inquire->getWhereInquire($id,$company[0]->idcompany),
            'header' => 'template/v_header_supplier',
            'footer' => 'template/v_footer_supplier',
        ];
        return $this->load->view('supplier/v_detailInquire',$data);
    }
}

/* End of file supplier.php */
