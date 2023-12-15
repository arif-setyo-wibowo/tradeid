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
            'subkategori_b' => $this->M_SubkategoriB->getSubKategori(),
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
        $subkategoriAOptions = $this->M_SubkategoriB->getSubkategoriAOptions($subkategoriB[0]->idkategori);

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
            'idsubkategori_a' => $this->input->post('namasubkategori_a'),
            'namaSubKategori_b' => $this->input->post('namasubkategori_b'),
            'idkategori' => $this->input->post('namaKategori')
        );


        $id = $this->input->post('idsubkategori_b');
        $this->M_SubkategoriB->updateSubKategori($id,$data);

        redirect('admin/subkategoriB');
            
    }


    function delete($id) {
        $this->M_SubkategoriB->deleteSubKategori($id);

		redirect('admin/subkategoriB');
    }
}

/* End of file Kategori.php */
