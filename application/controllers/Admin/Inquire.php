<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Inquire extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Inquire');
    }
    
    public function index()
{
    $data = [
        'header' => 'template/v_header_admin',
        'footer' => 'template/v_footer_admin',
        'top_categories' => $this->M_Inquire->getTopFiveCategoriesPerMonth(),
    ];

    return $this->load->view('admin/v_inquire', $data);
}


    public function detail($id = NULL)
    {
        $data = [
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
            'inquire' => $this->M_Inquire->getOne($id),
        ];
        return $this->load->view('admin/v_detailinquire',$data);
    }


    
}

/* End of file User.php */
