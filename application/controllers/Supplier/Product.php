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

        $data = [ 
            'product' => $this->M_Product->getProduct($supplier[0]->idsupplier),
            'kategori' => $this->M_Kategori->getKategori(),
            'header' => 'template/v_header_supplier',
            'footer' => 'template/v_footer_supplier',
        ];
        return $this->load->view('supplier/v_product',$data);
    }

    public function detail($id)
    {
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        if (!$this->M_Product->getWhere($id,$supplier[0]->idsupplier)) {
            $this->session->set_flashdata('pesan_e', 'Cannot acces URL Product');
            redirect('supplier/product');
        }else{
            $data = [
                'product' => $this->M_Product->getWhere($id,$supplier[0]->idsupplier),
                'header' => 'template/v_header_supplier',
                'footer' => 'template/v_footer_supplier',
            ];
    
            return $this->load->view('supplier/v_productDetail',$data);
        }
    }
    function store(){
    
        $this->load->library('upload');
        $uploaded_files = array();

        foreach ($_FILES['gambar']['name'] as $data) {
            $_FILES['userfile']['name']     = $_FILES['gambar']['name'][$data];
            $_FILES['userfile']['type']     = $_FILES['gambar']['type'][$data];
            $_FILES['userfile']['tmp_name'] = $_FILES['gambar']['tmp_name'][$data];
            $_FILES['userfile']['error']    = $_FILES['gambar']['error'][$data];
            $_FILES['userfile']['size']     = $_FILES['gambar']['size'][$data];

            if ($this->upload->do_upload('userfile')) {
                $uploaded_files[] = $this->upload->data('file_name');
            } else {
                $this->session->set_flashdata('pesan_e', 'Gambar gagal diupload');
                redirect('supplier/product');
            }
        }

        if (!$this->upload->do_upload('gambar')) {
            $this->session->set_flashdata('pesan_e', 'Gambar gagal diupload');
            redirect('supplier/product');
        } else {
            $data = array(
                'namaProduk' => $this->input->post('product'),
                'idsupplier' => $this->input->post('idsupplier'),
                'idkategori' => $this->input->post('kategori'),
                'idsubkategori_a' => $this->input->post('subkategori_a'),
                'idsubkategori_b' => $this->input->post('subkategori_b'),
                'deskripsiProduk' => $this->input->post('despan'),
                'deskripsiPendek' => $this->input->post('despen'),
                'harga' => $this->input->post('harga'),
                'gambar' => $this->upload->data('file_name')
            );
            

            $this->M_Product->insertProduct($data);
            $this->session->set_flashdata('pesan', 'Succesfully Insert Product');
            redirect('supplier/product');
        }

    }

    function edit($id){
        
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        if (!$this->M_Product->getWhere($id,$supplier[0]->idsupplier)) {
            $this->session->set_flashdata('pesan_e', 'Cannot acces URL Product');
            redirect('supplier/product');
        }else{
            $data = [
                'supplier' => $supplier,
                'product' => $this->M_Product->getWhere($id,$supplier[0]->idsupplier),
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
            'supplier' => $supplier,
            'kategori' => $this->M_Kategori->getKategori(),
            'header' => 'template/v_header_supplier',
            'footer' => 'template/v_footer_supplier',
        ];
        return $this->load->view('supplier/v_productForm',$data);
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
