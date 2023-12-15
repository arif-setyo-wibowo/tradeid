<?php 

class Home extends CI_Controller{

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }
    
    function index(){
        $iduser = $this->session->userdata('iduser');
            $data = [
                'userHeader' => $this->M_User->get_where($iduser),
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            ];

            return $this->load->view('home',$data);
            
    }
}