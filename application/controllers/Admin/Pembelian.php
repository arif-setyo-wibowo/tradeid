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
        $data = [
            'premium' => $this->M_Premium->getPembelian(),
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];

        return $this->load->view('admin/v_pembelian',$data);
    }

    function insertMember($idcompany,$idpembelian,$idpremium){

        $tgl_awal = date('Y-m-d H:i:s');
        if ($idpremium == 1) {
            $tgl_selesai = date('Y-m-d H:i:s', strtotime('+10 seconds', strtotime($tgl_awal)));
        }elseif($idpremium == 2){
            $tgl_selesai = date('Y-m-d H:i:s', strtotime('+20 seconds', strtotime($tgl_awal)));
        }elseif ($idpremium == 3) {
            $tgl_selesai = date('Y-m-d H:i:s', strtotime('+30 seconds', strtotime($tgl_awal)));
        }

        $data = array(
            'statusPembelian' => 1,
            'statusAdmin' => 1
        );

        $this->M_Premium->updatePembelian($idpembelian,$idpremium,$data);
        
        $dataMember = array(
            'idcompany' => $idcompany,
            'idpremium' => $idpremium,
            'tglstart' => $tgl_awal,
            'tglakhir' => $tgl_selesai,
            'statusMember' => 1
        );

        $this->M_Member->insertMember($dataMember);
        
        redirect('admin/pembelian');

    }


    

    
}

/* End of file User.php */
