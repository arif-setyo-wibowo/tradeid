<?php 

class Home extends CI_Controller{

    function index(){
        $this->load->view('componen/header');
        $this->load->view('home');
        $this->load->view('componen/footer');
    }

    function dasboard(){
        $this->load->view('componen/header');
        $this->load->view('dasboard');
        $this->load->view('componen/footer');
    }

    function notFound(){
        $data = [
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('404',$data);
        
    }
}