<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer extends CI_Controller {

    public function index()
    {
        $data = [
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('Buyer',$data);
    }

    public function detail()
    {
        $data = [
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('detaildemain',$data);
    }
}

/* End of file supplier.php */
