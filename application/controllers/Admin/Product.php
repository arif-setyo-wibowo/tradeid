<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Product');
    }
    
    public function index()
    {
        $data = [
            'product' => $this->M_Product->getProductAll(),
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_product',$data);
    }

    public function detail($id)
    {
        $data = [
            'product' =>  $this->M_Product->getWhereOne($id),
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_productDetail',$data);
    }



    

    
}

/* End of file User.php */
