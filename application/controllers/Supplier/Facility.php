<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Supplier');
        $this->load->model('M_Facility');
    }
    
    public function index()
    {
        $iduser = $this->session->userdata('iduser');
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $companyCek = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);

        if ($companyCek[0] == null) {
            $this->session->set_flashdata('pesan', 'Complete Your Data Company');
            redirect('dashboard/supplier/company');
            
        }else{
            if ($companyCek[0]->namaPerusahaan == null || $companyCek[0]->alamat == null || $companyCek[0]->kota == null || $companyCek[0]->gambarCompany == null || $companyCek[0]->idkategori == null || $companyCek[0]->idsubkategori_a == null) {
                $this->session->set_flashdata('pesan', 'Complete Your Data Company');
                redirect('dashboard/supplier/company');

            }else{
                $data = [
                    'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                    'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                    'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                    'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                    'facility' => $this->M_Facility->getWhereFacility($companyCek[0]->idcompany),
                    'header' => 'template/v_header_supplier',
                    'footer' => 'template/v_footer_supplier',
                ];

                return $this->load->view('supplier/v_facility',$data);
            }
        }
    }

    public function add()
    {
        $iduser = $this->session->userdata('iduser');
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $companyCek = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);

        if ($companyCek[0] == null) {
            $this->session->set_flashdata('pesan', 'Complete Your Data Company');
            redirect('dashboard/supplier/company');
            
        }else{
            if ($companyCek[0]->namaPerusahaan == null || $companyCek[0]->alamat == null || $companyCek[0]->kota == null || $companyCek[0]->gambarCompany == null || $companyCek[0]->idkategori == null || $companyCek[0]->idsubkategori_a == null) {
                $this->session->set_flashdata('pesan', 'Complete Your Data Company');
                redirect('dashboard/supplier/company');

            }else{
            
                $data = [
                    'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                    'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                    'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                    'header' => 'template/v_header_supplier',
                    'footer' => 'template/v_footer_supplier',
                ];
                return $this->load->view('supplier/v_facilityForm',$data);
            }
        }
    }

    function store() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['overwrite']     = FALSE;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

        $uploaded_images = array();

        foreach ($_FILES['gambar']['name'] as $key => $file_name) {
            $_FILES['userfile']['name']     = $_FILES['gambar']['name'][$key];
            $_FILES['userfile']['type']     = $_FILES['gambar']['type'][$key];
            $_FILES['userfile']['tmp_name'] = $_FILES['gambar']['tmp_name'][$key];
            $_FILES['userfile']['error']    = $_FILES['gambar']['error'][$key];
            $_FILES['userfile']['size']     = $_FILES['gambar']['size'][$key];

            if ($this->upload->do_upload('userfile')) {
                $uploaded_images[] = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('pesan_e', 'Failed Upload Images');
                redirect('dashboard/supplier/facility');
            }
        }
            $data = array(
                'idcompany' => $this->input->post('idcompany'),
                'gambarFacility' => implode(',', $uploaded_images),
                'namaFacility' => $this->input->post('nama'),
                'deskripsiFacility' => $this->input->post('deskripsi')
            );
        
            $this->M_Facility->insertfacility($data);
            $this->session->set_flashdata('pesan', 'Succesfully Insert Facility');
            redirect('dashboard/supplier/facility');
    }
}

/* End of file supplier.php */
