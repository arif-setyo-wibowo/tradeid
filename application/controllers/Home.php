<?php 

class Home extends CI_Controller{

    function index(){
        $this->load->view('componen/header');
        $this->load->view('landing');
        $this->load->view('componen/footer');
    }

    function materi(){
        $this->load->view('componen/header');
        $this->load->view('materi');
        $this->load->view('componen/footer');
    }
}