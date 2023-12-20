<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Premium');
        $this->load->model('M_Member');
        

    }
    
    public function index()
    {
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{

            $data = [
                'premium' => $this->M_Premium->getPembelian(),
                'header' => 'template/v_header_admin',
                'footer' => 'template/v_footer_admin',
            ];

            return $this->load->view('admin/v_pembelian',$data);
        }
    }

    public function detail($id)
    {
        $idadmin = $this->session->userdata('idadmin');
        if($idadmin == null){
            redirect('admin/login');
        }else{

            $data = [
                'pembelian' => $this->M_Premium->getwherePembelian($id),
                'header' => 'template/v_header_admin',
                'footer' => 'template/v_footer_admin',
            ];

            return $this->load->view('admin/v_detailpembelian',$data);
        }
    }

    function insertMember($idpembelian,$idcompany,$idpremium){

        $tgl_awal = date('Y-m-d H:i:s');
        if ($idpremium == 1) {
            $tgl_selesai = date('Y-m-d H:i:s', strtotime('+1 month', strtotime($tgl_awal)));
        }elseif($idpremium == 2){
            $tgl_selesai = date('Y-m-d H:i:s', strtotime('+6 month', strtotime($tgl_awal)));
        }elseif ($idpremium == 3) {
            $tgl_selesai = date('Y-m-d H:i:s', strtotime('+1 year', strtotime($tgl_awal)));
        }

        $data = array(
            'statusPembelian' => 1,
            'statusAdmin' => 1
        );

        $this->M_Premium->updatePembelian($idpembelian,$idpremium,$data);
        

        $dataMember = array(
            'idcompany' => $idcompany,
            'tglstart' => $tgl_awal,
            'tglakhir' => $tgl_selesai,
            'statusMember' => 1
        );

        $this->M_Member->insertMember($dataMember);
        
        redirect('admin/pembelian');

    }


    

    
}

/* End of file User.php */
