<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Premium extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Premium');
        $this->load->model('M_Supplier');
        $this->load->model('M_User');
    }
    
    public function index()
    {
        
        $iduser = $this->session->userdata('iduser');
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);

        if ($supplier[0]->verify == 2) {
            $data = [
                'userHeader' => $this->M_User->get_where($iduser),
                'supplier' => $supplier,
                'premium' =>  $this->M_Premium->getPremium(),
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            ];
            
            return $this->load->view('premium',$data);
        }else{
            redirect('profil');
        }
    }

    public function checkoutView($id)
    {
        $iduser = $this->session->userdata('iduser');
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);

        $pembelian = $this->M_Premium->getWhereCompany($company[0]->idcompany);
        
        if ($supplier[0]->verify == 2) {
            if ($company[0] == null) {
                $this->session->set_flashdata('pesan', 'Complete Your Data Company');
                redirect('dashboard/supplier/company');
            }else{
                if ($pembelian == null) {

                    $data = [
                        'userHeader' => $this->M_User->get_where($iduser),
                        'supplier' =>  $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                        'premium' => $this->M_Premium->getWhere($id),
                        'header' => 'componen/header',
                        'footer' => 'componen/footer',
                    ];
                    
                    return $this->load->view('checkout',$data);

                } else{
                    if ($pembelian[0]->statusPembelian == 0) {
                        $this->session->set_flashdata('pesan','Buy Premium Still Need Wait 1x24 for Verification Admin');
    
                        redirect('profil');
                    }else{
                        $data = [
                            'userHeader' => $this->M_User->get_where($iduser),
                            'supplier' =>  $this->M_Supplier->getWhereIdCompanyAndSupplier($supplier[0]->idsupplier),
                            'premium' => $this->M_Premium->getWhere($id),
                            'header' => 'componen/header',
                            'footer' => 'componen/footer',
                        ];
                        
                        return $this->load->view('checkout',$data);
                    }
                }
            }
        }else{
            redirect('profil');
        }
    }

    public function checkout()
    {
        $gambar = $_FILES['gambarPembelian']['name'];
        $config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']        = $gambar;
        $config['encrypt_name'] = TRUE;
        
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambarPembelian')) {
            $this->session->set_flashdata('pesan_e', 'Gambar gagal diupload');
            redirect('supplier/company');
        } else {
            $data = array(
                'idcompany' => $this->input->post('idcompany'),
                'namaPembelian' => $this->input->post('nama'),
                'emailPembelian' => $this->input->post('email'),
                'tglPembelian' => date('Y-m-d H:i:s'),
                'idpremium' => $this->input->post('idpremium'),
                'gambarPembelian' => $this->upload->data('file_name'),
                'statusPembelian' => '0',
                'statusAdmin' => '0'
            );

            $this->M_Premium->insertPembelian($data);

            $this->session->set_flashdata('pesan','Buy Premium Succesfully Wait 1x24 for Verification Admin');

            redirect('profil');
        }
    }
        
}

/* End of file supplier.php */
