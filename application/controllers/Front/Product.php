<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kategori');
        $this->load->model('M_Product');
        $this->load->model('M_Inquire');
        $this->load->model('M_User');
    }
    
    public function index() {
        $this->load->library('pagination');
    
        $config["base_url"] = site_url('product/index'); 
        $config["total_rows"] = $this->M_Product->countProduct('product');
        $config["per_page"] = 5; 
        $config["uri_segment"] = 3;
    
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
    
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'product' => $this->M_Product->getProductAll($config["per_page"], $page),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        $data['pagination'] = $this->pagination->create_links();
        $this->load->view('productShop', $data);
    }
    
    

    public function productDetail($id)
    {   
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'user' => $this->M_User->get_where($iduser),
            'product' => $this->M_Product->getWhereProduct($id),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        return $this->load->view('productDetail',$data);
    }

    public function inquireProduct($id)
    {
        $iduser = $this->session->userdata('iduser');

        if (!$this->session->userdata('iduser')) {
            redirect('logout');
         }else{
            $data = array(
                'nama'  => $this->input->post('namaInquire'),
                'email'  => $this->input->post('emailInquire'),
                'telp'  => $this->input->post('telpInquire'),
                'negara'  => $this->input->post('negaraInquire'),
                'pesan'  => $this->input->post('pesanInquire'),
                'idproduct'  => $this->input->post('idproduct'),
                'idcompany'  => $this->input->post('idcompany'),
                'iduser'  => $this->input->post('iduser'),
                'tgl' => date('Y-m-d H:i:s')
            );

            $this->M_Inquire->insertInquire($data);

            $this->session->set_flashdata('pesan', 'Sent Inquire Successfully');

            redirect('product/productDetail/'.$id);
        }
        
    }


    function productShopCategory($id){
        
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'product' => $this->M_Product->getWhereCategory($id),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('productShopCategory',$data);
    }

    function productShopSubCategoryA($id,$idsuba){
        
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'user' => $this->M_User->get_where($iduser),
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'product' => $this->M_Product->getWhereSubCategoryA($id,$idsuba),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('productShopSubCategoryA',$data);
    }

    function productShopSubCategoryB($id,$idsuba,$idsubb){
        
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'user' => $this->M_User->get_where($iduser),
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'product' => $this->M_Product->getWhereSubCategoryB($id,$idsuba,$idsubb),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('productShopSubCategoryB',$data);
    }

}

/* End of file supplier.php */
