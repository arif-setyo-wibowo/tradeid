<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Buyer extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Supplier');
        $this->load->model('M_Databuyer');
        $this->load->model('M_Member');
        $this->load->model('M_User');

        $this->checkStatusAndRedirect();
    }

    private function checkStatusAndRedirect() {
        $iduser = $this->session->userdata('iduser'); 
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);
        $member = $this->M_Member->getWhere($company[0]->idcompany);
        $tgl_skrg = date('Y-m-d H:i:s');
        

        if ($member[0]->statusMember == 0) {
            redirect('premium');
            
        }
        if (strtotime($tgl_skrg) > strtotime($member[0]->tglakhir)) {
            $data = array(
                 'statusMember' => 0
            );
 
            $this->M_Member->updateMemberStatus($member[0]->idmember,$company[0]->idcompany,$data);
 
            $this->session->set_flashdata('pesan_e', 'Buy Premium Here');
            
            redirect('premium');
         }
        
    }


    public function index()
    {
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'buyer' => $this->M_Databuyer->getDatabuyer(),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('buyer',$data);
    }

    public function detail($id)
    {
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'buyer' => $this->M_Databuyer->getWhere($id),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('detaildemain',$data);
    }
}

/* End of file supplier.php */
