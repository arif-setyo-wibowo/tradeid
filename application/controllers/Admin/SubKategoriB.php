<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class SubKategoriB extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_SubkategoriB');
        $this->load->model('M_SubkategoriA');
        $this->load->model('M_Kategori');
    }
    
    public function index()
    {
        $data = [
            'judul' => 'Data Kategori',
            'kategori' => $this->M_Kategori->getKategori(),
            'subkategori_a' => $this->M_SubkategoriA->getSubKategori(),
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_subkategori_b',$data);
    }

    public function getSubkategoriAOptions() {
        $idkategori = $this->input->post('idkategori');
        $subkategoria_options = $this->M_SubkategoriB->getSubkategoriAOptions($idkategori);
        echo json_encode($subkategoria_options);
    }

    public function store()
    {
        if ($this->input->post()) {
            $data = array(
                'idkategori' => $this->input->post('namaKategori'),
                'namaSubKategori' => $this->input->post('namaSubKategori'),
            );
    
            $this->M_SubkategoriA->insertSubKategori($data);

            redirect('admin/subkategoriA');
        }
    }

    function edit($id){

        $data = array(
            'subkategoria' =>  $this->M_SubkategoriA->getWhere($id),
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
        $this->M_SubkategoriA->updateSubKategori($id,$data);
        redirect('admin/subkategoriA');
            
    }


    function delete($id) {
        $this->M_SubkategoriA->deleteSubKategori($id);

		redirect('admin/subkategoriA');
    }
}

/* End of file Kategori.php */
