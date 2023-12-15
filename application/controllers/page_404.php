<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class page_404 extends CI_Controller {

    public function index()
    {
        $data = [
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('404',$data);
    }

}

/* End of file 404.php */
