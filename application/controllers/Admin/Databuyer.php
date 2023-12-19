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
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{
            $data = [
                'kategori' => $this->M_Kategori->getKategori(),
                'buyer' => $this->M_Databuyer->getDatabuyer(),
                'header' => 'template/v_header_admin',
                'footer' => 'template/v_footer_admin',
            ];
            return $this->load->view('admin/v_databuyer',$data);
        }
    }

    public function detail()
    {
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{

            $data = [
                'header' => 'template/v_header_admin',
                'footer' => 'template/v_footer_admin',
            ];
            return $this->load->view('admin/v_detailDataBuyer',$data);
        }
    }


    public function store()
    {
            $data = array(
                'namaBuyer' => $this->input->post('nama'),
                'emailBuyer' => $this->input->post('email'),
                'alamatBuyer' => $this->input->post('alamat'),
                'negaraBuyer' => $this->input->post('negara'),
                'telpBuyer' => $this->input->post('telp'),
                'tglbuyer' => date('Y-m-d H:i:s'),
                'produkBuyer' => $this->input->post('produk'),
                'deskripsiBuyer' => $this->input->post('deskripsi'),
                'idkategori' => $this->input->post('kategori'),
                'idsubkategori_a' => $this->input->post('subkategori_a'),
                'idsubkategori_b' => $this->input->post('subkategori_b'),
            );
    
            $this->M_Databuyer->insertDatabuyer($data);

            redirect('admin/databuyer');
    }

    function edit($id){
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{
            $buyer = $this->M_Databuyer->getWhere($id);

            $data = array(
                'subkategoria' => $this->M_Databuyer->getSubkategoriAOptions( $buyer[0]->idkategori),
                'subkategorib' => $this->M_Databuyer->getSubkategoriBOptions( $buyer[0]->idsubkategori_a),
                'kategori' => $this->M_Kategori->getKategori(),
                'buyer' => $this->M_Databuyer->getWhere($id),
                'footer' => 'template/v_footer_admin',
                'header' => 'template/v_header_admin',
            );
            
            return $this->load->view('admin/v_databuyerUpdate',$data);
        }
    }

    function update(){

        $data = array(
            'namaBuyer' => $this->input->post('nama'),
            'emailBuyer' => $this->input->post('email'),
            'alamatBuyer' => $this->input->post('alamat'),
            'negaraBuyer' => $this->input->post('negara'),
            'telpBuyer' => $this->input->post('telp'),
            'produkBuyer' => $this->input->post('produk'),
            'deskripsiBuyer' => $this->input->post('deskripsi'),
            'idkategori' => $this->input->post('kategori'),
            'idsubkategori_a' => $this->input->post('subkategori_a'),
            'idsubkategori_b' => $this->input->post('subkategori_b'),
        );
        
        $id = $this->input->post('idbuyer');
        $this->M_Databuyer->updateBuyer($id,$data);
        redirect('admin/databuyer');

    }


    function delete($id) {
        $this->M_Databuyer->deleteBuyer($id);

		redirect('admin/databuyer');
    }

    public function getSubkategoriAOptions() {
        $idkategori = $this->input->post('idkategori');
        $subkategoria_options = $this->M_Databuyer->getSubkategoriAOptions($idkategori);
        echo json_encode($subkategoria_options);
    }


    public function getSubkategoriBOptions() {
        $idsubkategoria = $this->input->post('idsubkategoria');
        $subkategoriBOptions = $this->M_Databuyer->getSubkategoriBOptions($idsubkategoria);
        echo json_encode($subkategoriBOptions);
    }
}

/* End of file Databuyer.php */
