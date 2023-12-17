<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Admin');
        $this->load->model('M_User');
        $this->load->model('M_Premium');
        $this->load->model('M_Inquire');
        $this->load->model('M_Company');
        $this->load->model('M_Product');
        $this->load->model('M_Kategori');
        $this->load->model('M_SubkategoriA');
        $this->load->model('M_SubkategoriB');

    }
    
    public function index()
    {
        $data = [
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
            'inquire'=> $this->M_Inquire->getInquireData(),
            'countuser'=> $this->M_User->countAllData(),
            'countmember'=> $this->M_Premium->countAllData(),
            'countcompany'=> $this->M_Company->countAllData(),
            'countproduct'=> $this->M_Product->countAllData(),
            'countinquire'=> $this->M_Inquire->countAllData(),
            'countkategori'=> $this->M_Kategori->countAllData(),
            'countkategoriA'=> $this->M_SubkategoriA->countAllData(),
            'countkategoriB'=> $this->M_SubkategoriB->countAllData(),
        ];
        $top_categories = $this->M_Inquire->getTopCategoriesThisMonth();
        $data['top_categories'] = $top_categories;

        $top_negara = $this->M_Inquire->getTopInquiredCategoriesAndCountries();
        $data['top_negara'] = $top_negara;

        $data['kategoriall'] = $data['countkategori']+$data['countkategoriA']+$data['countkategoriB'];
        $data['subkategori'] = $data['countkategoriA']+$data['countkategoriB'];
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

    function regisdetail($id){
        $data = [
            'supplier' => $this->M_Admin->getWhereSupplier($id),
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];

        return $this->load->view('admin/v_registrasiDetail',$data);
    }

    function verify($id,$iduser){


        $data = array(
            'verify' => 2
        );
        $data_user = array(
            'cSupplier' => 1
        );

        $this->M_User->update($iduser,$data_user);
        $this->M_Admin->update($id,$data);
        redirect('admin/supplier');
    }

    function verify_d($id,$iduser){


        $data = array(
            'verify' => 1
        );
        $data_user = array(
            'cSupplier' => null
        );

        $this->M_User->update($iduser,$data_user);
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
