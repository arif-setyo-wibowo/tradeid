<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Premium extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Premium');
        
    }
    
    public function index()
    {
        $data = [
            'premium' =>  $this->M_Premium->getPremium(),
            'header' => 'template/v_header_admin',
            'footer' => 'template/v_footer_admin',
        ];
        return $this->load->view('admin/v_Premium',$data);
    }

    public function store()
    {
        if ($this->input->post()) {
            $data = array(
                'namaPremium' => $this->input->post('namaPremium'),
                'hargaPremium' => $this->input->post('hargaPremium'),
                'waktuPremium' => $this->input->post('waktuPremium'),
            );
    
            $this->M_Premium->insertPremium($data);

            redirect('admin/premium');
        }
    }

    function edit($id){

        $data = array(
            'premium' =>  $this->M_Premium->getWhere($id),
            'judul' => "Update Premium",
            'footer' => 'template/v_footer_admin',
            'header' => 'template/v_header_admin',
        );

        return $this->load->view('admin/v_premium_update',$data);
    }

    function update(){

        $data = array(
            'namaPremium' => $this->input->post('namaPremium'),
            'hargaPremium' => $this->input->post('hargaPremium'),
            'waktuPremium' => $this->input->post('waktuPremium'),
        );

        $id = $this->input->post('idpremium');
        $this->M_Premium->updatePremium($id,$data);
        redirect('admin/premium');
            
    }


    function delete($id) {
        $this->M_Premium->deletePremium($id);

		redirect('admin/premium');
    }
    

    
}

/* End of file User.php */
