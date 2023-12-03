<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Admin');
        $this->load->model('M_User');

    }
    
    public function index()
    {
        $data = [
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_admin',$data);
    }

    function registrasiSupplier(){
        $data = [
            'supplier'  => $this->M_Admin->getSupplier(),
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_registrasiSupplier',$data);
    }

    function verify($id){

        $data = array(
            'verify' => 2
        );
        $data_user = array(
            'cSupplier' => 1
        );
            $this->M_User->update($id,$data_user);
        $this->M_Admin->update($id,$data);
        redirect('admin/supplier');
    }
}

/* End of file Admin.php */
