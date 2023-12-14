<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->model('M_Supplier');
        $this->load->model('M_Product');
        $this->load->model('M_Kategori');
    }
    
    public function index()
    {
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Product->getWhereIdSupplier($supplier[0]->idsupplier);

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
                'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                'product' => $this->M_Product->getProduct($company[0]->idcompany),
                'kategori' => $this->M_Kategori->getKategori(),
                'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
                'header' => 'template/v_header_supplier',
                'footer' => 'template/v_footer_supplier',
            ];
            return $this->load->view('supplier/v_product',$data);
        }
    }

    public function detail($id)
    {
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Product->getWhereIdSupplier($supplier[0]->idsupplier);

        if (!$this->M_Product->getWhere($id,$company[0]->idcompany)) {
            $this->session->set_flashdata('pesan_e', 'Cannot acces URL Product');
            redirect('supplier/product');
        }else{
            $data = [
                'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                'product' => $this->M_Product->getWhere($id,$company[0]->idcompany),
                'header' => 'template/v_header_supplier',
                'footer' => 'template/v_footer_supplier',
            ];
    
            return $this->load->view('supplier/v_productDetail',$data);
        }
    }
    private function set_upload_options()
    {   
        //upload an image options
        $config = array();
        $config['upload_path'] = 'uploads/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size']      = '0';
        $config['overwrite']     = FALSE;

        return $config;
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
                redirect('supplier/product');
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
            redirect('supplier/product');
    }

    function edit($id){
        
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Product->getWhereIdSupplier($supplier[0]->idsupplier);

        if (!$this->M_Product->getWhere($id,$company[0]->idcompany)) {
            $this->session->set_flashdata('pesan_e', 'Cannot acces URL Product');
            redirect('supplier/product');
        }else{
            $data = [
                'supplierHeader' => $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                'supplier' => $supplier,
                'product' => $this->M_Product->getWhere($id,$company[0]->idcompany),
                'kategori' =>  $this->M_Kategori->getKategori(),
                'header' => 'template/v_header_supplier',
                'footer' => 'template/v_footer_supplier',
            ];
    
            return $this->load->view('supplier/v_productFormUpdate',$data);
        }
    }

    public function productForm()
    {
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);

        $data = [
            'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
            'company' => $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier),
            'kategori' => $this->M_Kategori->getKategori(),
            'header' => 'template/v_header_supplier',
            'footer' => 'template/v_footer_supplier',
        ];
        return $this->load->view('supplier/v_productForm',$data);
    }

    function delete($id){
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $data =  $this->M_Product->getWhere($id,$supplier[0]->idsupplier);

        if ($data) {
            // Delete product record from the database
            $this->product_model->delete_product($product_id);
    
            // Delete associated files
            $file_paths = explode(',', $data->gambar);
            foreach ($file_paths as $file_path) {
                $full_path = FCPATH . 'uploads/' . $file_path;
                if (file_exists($full_path)) {
                    unlink($full_path); 
                }
            }
            $this->M_Film->deleteFilm($id, $supplier[0]->idsupplier);
            
            $this->session->set_flashdata('pesan', 'Delete Image Successfully');
            redirect('supplier/product');
        } else {
            $this->session->set_flashdata('pesan_e', 'Product not found');
            redirect('supplier/product');
        }

		redirect('film');
    }

    public function getKategoriOptions() {
        $kategoriOptions = $this->M_Product->getKategoriOptions();
        echo json_encode($kategoriOptions);
    }

    public function getSubkategoriAOptions() {
        $idkategori = $this->input->post('idkategori');
        $subkategoriAOptions = $this->M_Product->getSubkategoriAOptions($idkategori);
        echo json_encode($subkategoriAOptions);
    }

    public function getSubkategoriBOptions() {
        $idsubkategoria = $this->input->post('idsubkategoria');
        $subkategoriBOptions = $this->M_Product->getSubkategoriBOptions($idsubkategoria);
        echo json_encode($subkategoriBOptions);
    }
}

/* End of file supplier.php */
