<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Member');
        
    }
    
    public function index()
    {   
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{
            $data = [
                'judul' => 'Data Kategori',
                'member' => $this->M_Member->getMember(),
                'header' => 'template/v_header_admin',
                'footer' => 'template/v_footer_admin',
            ];
            return $this->load->view('admin/v_member',$data);
        }
    }

}

/* End of file Member.php */
