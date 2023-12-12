<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Premium extends CI_Controller {

    public function index()
    {
        $data = [
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('Premium',$data);
    }

    public function checkout()
    {
        $data = [
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('checkout',$data);
    }
}

/* End of file supplier.php */
