<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer extends CI_Controller {

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
        
        return $this->load->view('Buyer',$data);
    }

    public function detail()
    {
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('detaildemain',$data);
    }
}

/* End of file supplier.php */
