<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Facility extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Member');
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
                if ($this->M_Member->getWhere($companyCek[0]->idcompany)) {
                    $data = [
                    'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                    'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                    'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                    'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                    'member' => $this->M_Member->getWhere($companyCek[0]->idcompany),
                    'facility' => $this->M_Facility->getWhereFacility($companyCek[0]->idcompany),
                    'header' => 'template/v_header_supplier',
                    'footer' => 'template/v_footer_supplier',
                    ];

                    return $this->load->view('supplier/v_facility',$data);
                }else{
                    $data = [
                        'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                        'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                        'member' => array(''),
                        'facility' => $this->M_Facility->getWhereFacility($companyCek[0]->idcompany),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];

                    return $this->load->view('supplier/v_facility',$data);
                }
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
                if ($this->M_Member->getWhere($companyCek[0]->idcompany)) {
                    $data = [
                        'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                        'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'member' => $this->M_Member->getWhere($companyCek[0]->idcompany),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];

                    return $this->load->view('supplier/v_facilityForm',$data);
                }else{
                    $data = [
                        'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                        'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'member' => array(''),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];
                    return $this->load->view('supplier/v_facilityForm',$data);
                }   
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

    function edit($id){
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
                if ($this->M_Member->getWhere($companyCek[0]->idcompany)) {
                    $data = [
                        'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                        'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'facility' => $this->M_Facility->getWhereFacilityUpdate($id),
                        'member' => $this->M_Member->getWhere($companyCek[0]->idcompany),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];
                    return $this->load->view('supplier/v_facilityFormUpdate',$data);

                }else{
                    $data = [
                        'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                        'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'facility' => $this->M_Facility->getWhereFacilityUpdate($id),
                        'member' => array(''),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];
                    return $this->load->view('supplier/v_facilityFormUpdate',$data);
                }
                
            }
        }
    }

    function update(){

        $id = $this->input->post('idfacility');
        $idcompany = $this->input->post('idcompany');

        $this->load->library('upload');

        $existingImages = explode(',', $this->input->post('gambar_lama'));

        $removed_images = $this->input->post('remove_images');

        if (!empty($this->input->post('remove_images'))) {
            $removedImages = $this->input->post('remove_images');
            foreach ($removedImages as $removedImage) {
                // Remove the image file from the server
                $imagePath = FCPATH . 'uploads/' . $removedImage;
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
    
                // Remove the image from the existing images array
                $key = array_search($removedImage, $existingImages);
                if ($key !== false) {
                    unset($existingImages[$key]);
                }
            }
        }

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['overwrite']     = FALSE;
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload', $config);

         $uploaded_images = array();

        if (!empty($_FILES['gambar']['name'][0])) {
            foreach ($_FILES['gambar']['name'] as $key => $file_name) {

                $config['upload_path'] = 'uploads/';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['overwrite']     = FALSE;
                $config['encrypt_name'] = TRUE;

                $this->upload->initialize($config);

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
        }

        $allImages = array_merge($existingImages, $uploaded_images);

            $data = array(
                'idcompany' => $this->input->post('idcompany'),
                'gambarFacility' => implode(',', $allImages),
                'namaFacility' => $this->input->post('nama'),
                'deskripsiFacility' => $this->input->post('deskripsi')
            );
        
            $this->M_Facility->updateFacility($id,$data,$idcompany);
            $this->session->set_flashdata('pesan', 'Succesfully Update Facility');
            redirect('dashboard/supplier/facility');


    }

    function delete($id){
        $iduser = $this->session->userdata('iduser');
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);

        $data =  $this->M_Facility->getWhere($id,$company[0]->idcompany);

        if ($data) {
            // Delete product record from the database
            $this->M_Facility->deleteFacility($id,$company[0]->idcompany);
    
            $file_paths = explode(',', $data[0]->gambar);
            foreach ($file_paths as $file_path) {
                $full_path = FCPATH . 'uploads/' . $file_path;
                if (file_exists($full_path)) {
                    unlink($full_path); 
                }
            }
            
            $this->session->set_flashdata('pesan', 'Delete Data Successfully');
            redirect('dashboard/supplier/facility');
        } else {
            $this->session->set_flashdata('pesan_e', 'Facility not found');
            redirect('dashboard/supplier/facility');
        }
    }
}

/* End of file supplier.php */
