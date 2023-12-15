<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class page_404 extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }
    
    public function index()
    {
        $iduser = $this->session->userdata('iduser');
            $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('404',$data);
    }

}

/* End of file 404.php */
