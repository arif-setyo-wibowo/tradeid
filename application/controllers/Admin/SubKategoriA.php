<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class SubKategoriA extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_SubKategoriA');
        $this->load->model('M_Kategori');
    }
    
    public function index()
    {
        $data = [
            'judul' => 'Data Kategori',
            'kategori' => $this->M_Kategori->getKategori(),
            'subkategori_a' => $this->M_SubKategoriA->getSubKategori(),
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_subkategori_a',$data);
    }

    public function store()
    {
        if ($this->input->post()) {
            $data = array(
                'idkategori' => $this->input->post('namaKategori'),
                'namaSubKategori' => $this->input->post('namaSubKategori'),
            );
    
            $this->M_SubKategoriA->insertSubKategori($data);

            redirect('admin/subkategoriA');
        }
    }

    function edit($id){

        $data = array(
            'subkategoria' =>  $this->M_SubKategoriA->getWhere($id),
            'kategori' => $this->M_Kategori->getKategori(),
            'footer' => 'template/v_footer_admin',
            'header' => 'template/v_header_admin',
        );

        return $this->load->view('admin/v_subkategori_a_update',$data);
    }

    function update(){

        $data = array(
            'idkategori' => $this->input->post('namaKategoriUpdate'),
            'namaSubKategori' => $this->input->post('namaSubKategoriUpdate')
        );
        $id = $this->input->post('idsubkategori_a');
        $this->M_SubKategoriA->updateSubKategori($id,$data);
        $this->session->set_flashdata('pesan', 'Succesfully Update Subkategori A');
        redirect('admin/subkategoriA');
            
    }


    function delete($id) {
        $this->M_SubKategoriA->deleteSubKategori($id);

		redirect('admin/subkategoriA');
    }
}

/* End of file Kategori.php */
