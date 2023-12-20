<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Member');
        $this->load->model('M_User');
        $this->load->model('M_Supplier');
        $this->load->model('M_Product');
        $this->load->model('M_Kategori');
        $this->load->model('M_Company');
        $this->load->model('M_SubkategoriB');
    }
    
    public function index()
    {
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Product->getWhereIdSupplier($supplier[0]->idsupplier);
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
                        'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                        'product' => $this->M_Product->getProduct($company[0]->idcompany),
                        'kategori' => $this->M_Kategori->getKategori(),
                        'member' => $this->M_Member->getWhere($companyCek[0]->idcompany),
                        'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];
                    return $this->load->view('supplier/v_product',$data);
                }else{
                    $data = [ 
                        'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                        'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                        'product' => $this->M_Product->getProduct($company[0]->idcompany),
                        'kategori' => $this->M_Kategori->getKategori(),
                        'member' => array(''),
                        'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];
                    return $this->load->view('supplier/v_product',$data);
                }
            }
        }
    }

    public function detail($id)
    {
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Product->getWhereIdSupplier($supplier[0]->idsupplier);
        $companyCek = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);

        if (!$this->M_Product->getWhere($id,$company[0]->idcompany)) {
            $this->session->set_flashdata('pesan_e', 'Cannot acces URL Product');
            redirect('supplier/product');
        }else{
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
                            'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                            'member' => $this->M_Member->getWhere($companyCek[0]->idcompany),
                            'product' => $this->M_Product->getWhere($id,$company[0]->idcompany),
                            'header' => 'template/v_header_supplier',
                            'footer' => 'template/v_footer_supplier',
                        ];
                
                        return $this->load->view('supplier/v_productDetail',$data);
                    }else{
                        $data = [
                            'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                            'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                            'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                            'product' => $this->M_Product->getWhere($id,$company[0]->idcompany),
                            'member' => array(''),
                            'header' => 'template/v_header_supplier',
                            'footer' => 'template/v_footer_supplier',
                        ];
                
                        return $this->load->view('supplier/v_productDetail',$data);
                    }
                }
            }
        }
    }

    function store(){
    
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
                redirect('dashboard/supplier/product');
            }
        }
            $data = array(
                'namaProduk' => $this->input->post('product'),
                'idcompany' => $this->input->post('idcompany'),
                'idkategori' => $this->input->post('kategori'),
                'idsubkategori_a' => $this->input->post('subkategori_a'),
                'idsubkategori_b' => $this->input->post('subkategori_b'),
                'deskripsiProduk' => $this->input->post('despan'),
                'deskripsiPendek' => $this->input->post('despen'),
                'harga' => $this->input->post('harga'),
                'gambar' => implode(',', $uploaded_images)
            );
        
            $this->M_Product->insertProduct($data);
            $this->session->set_flashdata('pesan', 'Succesfully Insert Product');
            redirect('dashboard/supplier/product');
    }

    function edit($id){
        
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Product->getWhereIdSupplier($supplier[0]->idsupplier);
        $companyCek = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);

        if (!$this->M_Product->getWhere($id,$company[0]->idcompany)) {
            $this->session->set_flashdata('pesan_e', 'Cannot acces URL Product');
            redirect('dashboard/supplier/product');
        }else{
            if ($companyCek[0] == null) {
                $this->session->set_flashdata('pesan', 'Complete Your Data Company');
                redirect('dashboard/supplier/company');
                
            }else{
                if ($companyCek[0]->namaPerusahaan == null || $companyCek[0]->alamat == null || $companyCek[0]->kota == null || $companyCek[0]->gambarCompany == null || $companyCek[0]->idkategori == null || $companyCek[0]->idsubkategori_a == null) {
                    $this->session->set_flashdata('pesan', 'Complete Your Data Company');
                    redirect('dashboard/supplier/company');
    
                }else{
                    $product = $this->M_Product->getWhere($id,$company[0]->idcompany);
                    $data = [
                        'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                        'company' => $companyCek,
                        'product' => $this->M_Product->getWhere($id,$company[0]->idcompany),
                        'kategori' =>  $this->M_Kategori->getKategori(),
                        'subkategoria' => $this->M_Product->getSubkategoriAOptions( $product[0]->idkategori),
                        'subkategorib' => $this->M_Product->getSubkategoriBOptions( $product[0]->idsubkategori_a),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];
            
                    return $this->load->view('supplier/v_productFormUpdate',$data);
                }
            }
        }
    }

    function update(){

        $id = $this->input->post('idproduct');
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
                    redirect('dashboard/supplier/product');
                }
            }
        }


            $allImages = array_merge($existingImages, $uploaded_images);

            $data = array(
                'namaProduk' => $this->input->post('product'),
                'idcompany' => $this->input->post('idcompany'),
                'idkategori' => $this->input->post('kategori'),
                'idsubkategori_a' => $this->input->post('subkategori_a'),
                'idsubkategori_b' => $this->input->post('subkategori_b'),
                'deskripsiProduk' => $this->input->post('despan'),
                'deskripsiPendek' => $this->input->post('despen'),
                'harga' => $this->input->post('harga'),
                'gambar' => implode(',', $allImages)
            );
        
            $this->M_Product->updateProduct($id,$data,$idcompany);

            $this->session->set_flashdata('pesan', 'Succesfully Update Product');
            redirect('dashboard/supplier/product');
    }

    public function productForm()
    {
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
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
                        'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                        'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'kategori' => $this->M_Kategori->getKategori(),
                        'member' => $this->M_Member->getWhere($companyCek[0]->idcompany),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];
                    return $this->load->view('supplier/v_productForm',$data);
                }else{
                    $data = [
                        'companyHeader' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                        'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                        'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                        'kategori' => $this->M_Kategori->getKategori(),
                        'member' => array(''),
                        'header' => 'template/v_header_supplier',
                        'footer' => 'template/v_footer_supplier',
                    ];
                    return $this->load->view('supplier/v_productForm',$data);
                }
            }
        }
    }

    function delete($id){
        $iduser = $this->session->userdata('iduser');
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);

        $data =  $this->M_Product->getWhere($id,$company[0]->idcompany);

        if ($data) {
            // Delete product record from the database
            $this->M_Product->deleteProduct($id,$company[0]->idcompany);
    
            $file_paths = explode(',', $data[0]->gambar);
            foreach ($file_paths as $file_path) {
                $full_path = FCPATH . 'uploads/' . $file_path;
                if (file_exists($full_path)) {
                    unlink($full_path); 
                }
            }
            
            $this->session->set_flashdata('pesan', 'Delete Data Successfully');
            redirect('dashboard/supplier/product');
        } else {
            $this->session->set_flashdata('pesan_e', 'Product not found');
            redirect('dashboard/supplier/product');
        }

    }

    public function getKategoriOptions() {
        $kategoriOptions = $this->M_Product->getKategoriOptions();
        echo json_encode($kategoriOptions);
    }

    public function getSubkategoriAOptions() {
        $idkategori = $this->input->post('idkategori');
        $subkategoria_options = $this->M_Product->getSubkategoriAOptions($idkategori);
        echo json_encode($subkategoria_options);
    }


    public function getSubkategoriBOptions() {
        $idsubkategoria = $this->input->post('idsubkategoria');
        $subkategoriBOptions = $this->M_Product->getSubkategoriBOptions($idsubkategoria);
        echo json_encode($subkategoriBOptions);
    }
}

/* End of file supplier.php */
