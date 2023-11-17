<?php 

class Home extends CI_Controller{

    function index(){
        $this->load->view('componen/header');
        $this->load->view('home');
        $this->load->view('componen/footer');
    }

    function register(){
        $this->load->view('componen/header');
        $this->load->view('register');
        $this->load->view('componen/footer');
    }

    function login(){
        $this->load->view('componen/header');
        $this->load->view('login');
        $this->load->view('componen/footer');
    }

    function dasboard(){
        $this->load->view('componen/header');
        $this->load->view('dasboard');
        $this->load->view('componen/footer');
    }

    function regisSupplier(){
        $this->load->view('componen/header');
        $this->load->view('regisSupplier');
        $this->load->view('componen/footer');
    }
}