<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Databuyer extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Databuyer');
        $this->load->model('M_SubkategoriB');
        $this->load->model('M_SubkategoriA');
        $this->load->model('M_Kategori');
    }
    
    public function index()
    {
        $data = [
            'kategori' => $this->M_Kategori->getKategori(),
            'subkategori_a' => $this->M_SubkategoriA->getSubKategori(),
            'subkategori_b' => $this->M_SubkategoriB->getSubKategori(),
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_databuyer',$data);
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
                'idsubkategori_a' => $this->input->post('namasubkategori_a'),
                'namaSubKategori_b' => $this->input->post('namasubkategori_b'),
                'idkategori' => $this->input->post('namaKategori')
            );
    
            $this->M_SubkategoriB->insertSubKategori($data);

            redirect('admin/subkategoriB');
        }
    }

    function edit($id){

        // Mendapatkan data subkategori B berdasarkan ID
        $subkategoriB = $this->M_SubkategoriB->getWhere($id);

        // Mendapatkan data subkategori A berdasarkan ID Kategori
        $subkategoriAOptions = $this->M_SubkategoriB->getSubkategoriAOptions($subkategoriB->idkategori);

        $data = array(
            'subkategorib' => $subkategoriB,
            'subkategoria' => $subkategoriAOptions,
            'kategori' => $this->M_Kategori->getKategori(),
            'footer' => 'template/v_footer_admin',
            'header' => 'template/v_header_admin',
        );
        
        return $this->load->view('admin/v_subkategori_b_update',$data);
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

/* End of file Databuyer.php */
