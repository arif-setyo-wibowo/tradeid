<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kategori');
    }
    
    public function index()
    {
        $data = [
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('productShop',$data);
    }

    public function productDetail()
    {
        $data = [
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        return $this->load->view('productDetail',$data);
    }

    public function productForm()
    {
        $data = [
            'header' => 'template/v_header_supplier',
            'footer' => 'template/v_footer_supplier',
        ];
        return $this->load->view('supplier/v_productForm',$data);
    }

    function productShop($id){
        echo 'hallo';
    }

}

/* End of file supplier.php */
