<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Supplier');
        $this->load->model('M_User');
    }
    
    function cekSup(){
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);

        if ($user->negara == 'Indonesia') {
            if ($supplier->verify == 1) {
                $this->session->set_flashdata('pesan', 'Tunggu pengajuanmu diverifikasi Admin 1x24 Jam');
                redirect('profil');
            }else{
                redirect('regisSupplier');
            }
        }else{
            $this->session->set_flashdata('pesan_e', 'Supplier only for indonesia country');
            redirect('profil');
        }
        
    }
    function regis(){

        if ($this->input->post()) {
            
            $data = array(
                'namaPerusahaan' => $this->input->post('company'),
                'deskripsiPerusahaan' => $this->input->post('deskrip'),
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'telp' => $this->input->post('telp'),
                'iduser' => $this->input->post('iduser'),
                'verify' => '1'
            );
            
            $this->M_Supplier->insertSupplier($data);

            $this->session->set_flashdata('pesan', 'Tunggu pengajuanmu diverifikasi Admin');

            redirect('profil');
        }else{
            $data = array(
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            );

            return $this->load->view('regisSupplier',$data);
        }
    }

}

/* End of file Supplier.php */
