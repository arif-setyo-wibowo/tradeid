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
        $data['jmlh'] = $this->M_Product->getAllData()->num_rows();
    
        $config["base_url"] = site_url('Front/product/index');
        $config["total_rows"] = $data['jmlh'];
        $config["per_page"] = 5;

        $config['full_tag_open'] = '<nav class="d-flex" aria-label="pagination"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['prev_link'] = '<span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';

        $config['next_link'] = '<span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['attributes'] = array('class' => 'page-link');
    
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
    
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'product' => $this->M_Product->getProductAll($config["per_page"], $page)->result(),
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
