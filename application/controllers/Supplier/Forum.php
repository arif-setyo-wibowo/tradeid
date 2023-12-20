<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Forum extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Forum');
        $this->load->model('M_Supplier');
        $this->load->model('M_Member');
        $this->load->model('M_User');

        $this->checkStatusAndRedirect();
    }
    
    public function index()
    {
        $iduser = $this->session->userdata('iduser'); 
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);
        $member = $this->M_Member->getWhere($company[0]->idcompany);

            $data = [
                'userHeader' => $this->M_User->get_where($iduser),
                'company' => $company,
                'posting' => $this->M_Forum->getPosting(),
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            ];
            
            return $this->load->view('forum',$data);
        
       
    }
    public function detailPosting($id)
    {
        $iduser = $this->session->userdata('iduser'); 
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);
        $company = $this->M_Supplier->getWhereIdCompany($supplier[0]->idsupplier);

        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'company' => $company,
            'posting' => $this->M_Forum->getWherePosting($id),
            'countcomment' => $this->M_Forum->countkomen($id),
            'komen' => $this->M_Forum->getWhereKomen($id),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('detailPost',$data);
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

    function store() {

        $data = array(
            'idcompany' => $this->input->post('idcompany'),
            'topic' => $this->input->post('topic'),
            'pesan' => $this->input->post('pesan')
        );

        $this->M_Forum->insertPosting($data);

        redirect('forum');
    }

    function storeKomen() {

        $data = array(
            'idposting' => $this->input->post('idposting'),
            'pesankomen' => $this->input->post('pesan')
        );

        $this->M_Forum->insertKomen($data);

        redirect('forum/post/'.$this->input->post('idposting'));
    }

    function storeBalas() {

        $data = array(
            'idposting' => $this->input->post('idposting'),
            'idbalas' => $this->input->post('idkomen'),
            'pesankomen' => $this->input->post('pesan')
        );

        $this->M_Forum->insertKomen($data);

        redirect('forum/post/'.$this->input->post('idposting'));
    }
    
}

/* End of file supplier.php */
