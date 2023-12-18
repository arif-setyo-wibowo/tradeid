<?php 

class Home extends CI_Controller{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->model('M_Supplier');
        $this->load->model('M_Kategori');
        $this->load->model('M_Product');
    }
    
    function index(){
        $iduser = $this->session->userdata('iduser');
            $data = [
                'userHeader' => $this->M_User->get_where($iduser),
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            ];

            return $this->load->view('home',$data);
    }

    function searchView() {
        $query = $this->input->get('search');
        $searchType = $this->input->get('search_type');

        if ($searchType === 'supplier') {
            $iduser = $this->session->userdata('iduser');
            $data = [
                'userHeader' => $this->M_User->get_where($iduser),
                'results' => $this->M_Supplier->search_data_supplier($query),
                'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            ];

            $this->load->view('supplierSearch', $data);
        } elseif ($searchType === 'product') {
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
                'product' => $this->M_Product->search_data_product($query),
                'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            ];
            $data['pagination'] = $this->pagination->create_links();

            $this->load->view('productSearch', $data);
        } else {
            $data['results'] = array();
        }
    }

}