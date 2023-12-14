<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

    public function index()
    {
        $data = [
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('forum',$data);
    }
    public function detailPosting()
    {
        $data = [
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('detailPost',$data);
    }

    
}

/* End of file supplier.php */
