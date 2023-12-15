<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kategori');
        $this->load->model('M_Supplier');
        $this->load->model('M_User');
        $this->load->model('M_Company');
        $this->load->model('M_Product');
        $this->load->model('M_Facility');
    }

    public function index()
    {
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'supplier' => $this->M_Supplier->getSupplierCategory(),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('supplierFind',$data);
    }

    public function detailCompany($id)
    {

        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'supplier' => $this->M_Company->getWhereJoin($id),
            'product' => $this->M_Product->getProduct($id),
            'facility' => $this->M_Facility->getWhereFacility($id),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('viewCompany',$data);
    }


    
    function cekSup(){
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);

        if (!$this->session->userdata('iduser')) {
            redirect('logout');
         }else{
            if($user->nama && $user->alamat && $user->email && $user->negara && $user->telp){
                if ($user->negara == 'Indonesia') {
                    if ($supplier[0]->verify == 1) {
                        $this->session->set_flashdata('pesan', 'Tunggu pengajuanmu diverifikasi Admin 1x24 Jam');
                        redirect('profil');
                    }else{
                        redirect('regisSupplier');
                    }
                }else{
                    $this->session->set_flashdata('pesan_e', 'Supplier only for indonesia country');
                    redirect('profil');
                }
            }else{
                $this->session->set_flashdata('pesan_e', 'Please fill the all profile data');
                redirect('profil');
            }
            
        }
        
    }
    function regis(){
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);

        if (!$this->session->userdata('iduser')) {
            redirect('logout');
         }else{
            if ($this->input->post()) {
                    
                    $data = array(
                        'NamaUsaha' => $this->input->post('company'),
                        'deskripsiPerusahaan' => $this->input->post('deskrip'),
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'telp' => $this->input->post('telp'),
                        'iduser' => $this->input->post('iduser'),
                        'verify' => '0',
                        'tgl' => date('Y-m-d H:i:s')
                    );
                    
                    $this->M_Supplier->insertSupplier($data);

                    $this->session->set_flashdata('pesan', 'Tunggu pengajuanmu diverifikasi Admin');

                    redirect('profil');
                }else{
                    $data = array(
                        'userHeader' => $this->M_User->get_where($iduser),
                        'header' => 'componen/header',
                        'footer' => 'componen/footer',
                    );

                    return $this->load->view('regisSupplier',$data);
            }
        }
    }

    function supplierCategory($id){
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'supplier' => $this->M_Company->getWhereCategory($id),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('supplierFindCategory',$data);
    }

    function supplierSubCategoryA($id,$idsuba){
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'supplier' => $this->M_Company->getWhereSubCategoryA($id,$idsuba),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('supplierFindCategoryA',$data);
    }

}

/* End of file Supplier.php */
