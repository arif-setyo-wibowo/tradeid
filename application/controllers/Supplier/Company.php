<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Supplier');
        
        $this->load->library('form_validation');  
    }
    
    public function index()
    {
        if (!$this->session->userdata('iduser')) {
            redirect('logout');
         }else{
            $iduser =  $this->session->userdata('iduser');
            $data = [
                'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                'cekdata' => $this->M_Supplier->getWhereIdCompany($iduser),
                'header' => 'template/v_header_supplier',
                'footer' => 'template/v_footer_supplier',
            ];


            return $this->load->view('supplier/v_profileCompany',$data);
        }
    }

    function store(){

        if (empty($_FILES['gambar']['name']))
        {
            $this->form_validation->set_rules('gambar', 'Image');
        }

        $gambar = $_FILES['gambar']['name'];
        $config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']        = $gambar;
        
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar')) {
            $this->session->set_flashdata('pesan_e', 'Gambar gagal diupload');
            redirect('supplier/company');
        } else {
            $data = array(
                'namaPerusahaan' => $this->input->post('company'),
                'alamat' => $this->input->post('alamat'),
                'kota' => $this->input->post('kota'),
                'gambar' => $this->upload->data('file_name'),
                'iduser' => $this->input->post('iduser')
            );

            $this->M_Supplier->insertCompany($data);
            $this->session->set_flashdata('pesan', 'Update data berhasil');
            redirect('supplier/company');
        }
    }

    function update(){

        $iduser = $this->input->post('iduser');
        $gambar_lama = $this->input->post('lastgambar');
        $gambar_baru = $_FILES['upgambar']['name'];

        $config['upload_path']          = 'uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']        = $gambar_baru;
        
        $this->load->library('upload', $config);

        if ($gambar_baru == TRUE) {
            if (!$this->upload->do_upload('upgambar') ) {
                $this->session->set_flashdata('pesan_e', 'Gambar gagal diupload');
                redirect('supplier/company');
            } else {
                if (file_exists('uploads/'.$gambar_lama)) {
                    unlink('uploads/'.$gambar_lama);
                    $gmb = $this->upload->data('file_name');
                }else{
                    $gmb = $this->upload->data('file_name');
                }
            }
        }else{
            $gmb = $gambar_lama;
        }

        $data = array(
            'namaPerusahaan' => $this->input->post('ucompany'),
            'alamat' => $this->input->post('ualamat'),
            'kota' => $this->input->post('ukota'),
            'gambar' => $gmb
        );

        $this->M_Supplier->updateCompany($iduser,$data);
        $this->session->set_flashdata('pesan', 'Update data berhasil');
        redirect('supplier/company');
    }

    function store_desk() {

        $data = array(
            'deskripsiPendek' => $this->input->post('despen'),
            'deskripsiPanjang' => $this->input->post('despan')
        );

        $this->M_Supplier->insertCompany($data);
        $this->session->set_flashdata('pesan', 'Update data berhasil');
        
        redirect('supplier/company');
    }

    function update_desk(){
        $iduser = $this->input->post('iduser');

        $data = array(
            'deskripsiPendek' => $this->input->post('udespen'),
            'deskripsiPanjang' => $this->input->post('udespan'),
            'iduser' => $this->input->post('iduser')
        );

        $this->M_Supplier->updateCompany($iduser,$data);
        $this->session->set_flashdata('pesan', 'Update data berhasil');

        redirect('supplier/company');
    }

    function store_sosmed(){

        $data = array(
            'instagram' => $this->input->post('instagram'),
            'facebook' => $this->input->post('facebook'),
            'linkedin' => $this->input->post('linkedin'),
            'website' => $this->input->post('website'),
            'iduser' => $this->input->post('iduser')
        );

        $this->M_Supplier->insertCompany($data);
        $this->session->set_flashdata('pesan', 'Update data berhasil');

        redirect('supplier/company');
    }

    function update_sosmed(){
        $iduser = $this->input->post('iduser');

        $data = array(
            'instagram' => $this->input->post('uinstagram'),
            'facebook' => $this->input->post('ufacebook'),
            'linkedin' => $this->input->post('ulinkedin'),
            'website' => $this->input->post('uwebsite'),
            'iduser' => $this->input->post('uiduser')
        );

        $this->M_Supplier->updateCompany($iduser,$data);
        $this->session->set_flashdata('pesan', 'Update data berhasil');

        redirect('supplier/company');
    }




}

/* End of file supplier.php */
