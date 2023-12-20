<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kategori');
        
    }
    
    public function index()
    {   
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{
            $data = [
                'judul' => 'Data Kategori',
                'kategori' => $this->M_Kategori->getKategori(),
                'header' => 'template/v_header_admin',
                'footer' => 'template/v_footer_admin',
            ];
            return $this->load->view('admin/v_kategori',$data);
        }
    }

    public function store()
    {
        if ($this->input->post()) {
            $data = array(
                'namaKategori' => $this->input->post('namaKategori'),
            );
    
            $this->M_Kategori->insertKategori($data);

            redirect('admin/kategori');
        }
    }

    function edit($id){
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{
            $data = array(  
                'kategori' =>  $this->M_Kategori->getWhere($id),
                'judul' => "Update Kategori",
                'footer' => 'template/v_footer_admin',
                'header' => 'template/v_header_admin',
            );

            return $this->load->view('admin/v_kategori_update',$data);
        }
    }

    function update(){

        $data = array(
            'namaKategori' => $this->input->post('namaKategoriUpdate'),
        );
        $id = $this->input->post('idkategori');
        $this->M_Kategori->updateKategori($id,$data);
        $this->session->set_flashdata('pesan', 'Succesfully Update kategori');
        redirect('admin/kategori');
            
    }


    function delete($id) {
        $this->M_Kategori->deleteKategori($id);

		redirect('admin/kategori');
    }
}

/* End of file Kategori.php */
