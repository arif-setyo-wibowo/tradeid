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

    public function loginadmin()
    {  
        $data = [
        'header' => 'template/v_header_admin',
        'footer' => 'template/v_footer_admin',
               ];
        return $this->load->view('admin/v_login_admin',$data);
    }

    public function akunbaru()
    {  
        $data = [
        'header' => 'template/v_header_admin',
        'footer' => 'template/v_footer_admin',
               ];
        return $this->load->view('admin/v_signup_admin',$data);
    }


    function registrasiSupplier(){
        $data = [
            'supplier'  => $this->M_Admin->getSupplier(),
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_registrasiSupplier',$data);
    }

    function registrasiDetail(){
        $data = [
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_registrasiDetail',$data);
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

    public function store()
    {
        if ($this->input->post()) {
            $data = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password'),
            );
    
            $this->M_Admin->insertAdmin($data);

            redirect('admin/admin');
        }
    }

    function edit($id){

        $data = array(
            'admin' =>  $this->M_Admin->getWhere($id),
            'judul' => "Update Admin",
            'footer' => 'template/v_footer_admin',
            'header' => 'template/v_header_admin',
        );

        return $this->load->view('admin/v_admin_update',$data);
    }

    function delete($id) {
        $this->M_Admin->deleteAdmin($id);

		redirect('admin/admin');
    }
}

/* End of file Admin.php */
