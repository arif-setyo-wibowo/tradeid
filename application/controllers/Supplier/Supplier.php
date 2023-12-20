<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Member');
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
            $companyCek = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);

            if ($supplier[0]->verify == 2) {

                if ($company[0] == null) {
    
                    $this->session->set_flashdata('pesan', 'Complete Your Data Company');
                        
                    redirect('dashboard/supplier/company');
                }else{
                    if ($companyCek[0]->namaPerusahaan == null || $companyCek[0]->alamat == null || $companyCek[0]->kota == null || $companyCek[0]->gambarCompany == null || $companyCek[0]->idkategori == null || $companyCek[0]->idsubkategori_a == null) {
    
                        $this->session->set_flashdata('pesan', 'Complete Your Data Company');

                        redirect('dashboard/supplier/company');
                    }else{
                        if ($this->M_Member->getWhere($companyCek[0]->idcompany)) {
                            $data = [
                                'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                                'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                                'product' =>  $this->M_Product->countProduct($company[0]->idcompany),
                                'inquireCount' =>  $this->M_Inquire->countInquire($company[0]->idcompany),
                                'inquire' => $this->M_Inquire->getWhereCompany($company[0]->idcompany),
                                'member' => $this->M_Member->getWhere($companyCek[0]->idcompany),
                                'header' => 'template/v_header_supplier',
                                'footer' => 'template/v_footer_supplier',
                            ];
        
                            return $this->load->view('supplier/v_supplier',$data);
                        }else{
                            $data = [
                                'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                                'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                                'product' =>  $this->M_Product->countProduct($company[0]->idcompany),
                                'inquireCount' =>  $this->M_Inquire->countInquire($company[0]->idcompany),
                                'inquire' => $this->M_Inquire->getWhereCompany($company[0]->idcompany),
                                'member' => array(''),
                                'header' => 'template/v_header_supplier',
                                'footer' => 'template/v_footer_supplier',
                            ];
        
                            return $this->load->view('supplier/v_supplier',$data);
                        }
                    }
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
        $companyCek = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);

        if ($company[0] == null) {
    
            $this->session->set_flashdata('pesan', 'Complete Your Data Company');
                
            redirect('dashboard/supplier/company');
        }else{
            if ($companyCek[0]->namaPerusahaan == null || $companyCek[0]->alamat == null || $companyCek[0]->kota == null || $companyCek[0]->gambarCompany == null || $companyCek[0]->idkategori == null || $companyCek[0]->idsubkategori_a == null) {

                $this->session->set_flashdata('pesan', 'Complete Your Data Company');

                redirect('dashboard/supplier/company');
            }else{
                if ($this->M_Member->getWhere($companyCek[0]->idcompany)) {
                    $data = [
                        'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                        'inquire' => $this->M_Inquire->getWhereInquire($id,$company[0]->idcompany),
                        'member' => $this->M_Member->getWhere($companyCek[0]->idcompany),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];
                    return $this->load->view('supplier/v_detailInquire',$data);
                }else{
                    $data = [
                        'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                        'inquire' => $this->M_Inquire->getWhereInquire($id,$company[0]->idcompany),
                        'member' => array(),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];
                    return $this->load->view('supplier/v_detailInquire',$data);
                }
                
            }
        }
    }
}

/* End of file supplier.php */
