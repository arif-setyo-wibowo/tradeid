<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Kategori');
        $this->load->model('M_Supplier');
        $this->load->model('M_User');
        $this->load->model('M_Company');
        $this->load->model('M_Product');
        $this->load->model('M_Facility');
        
        $this->load->library('pagination');
    }

    public function index()
    {
        $data['jmlh'] = $this->M_Supplier->getAllData()->num_rows();
    
        $config["base_url"] = site_url('supplier/page_page');
        $config["total_rows"] = $data['jmlh'];
        $config["per_page"] = 5;

        $config['full_tag_open'] = '<nav class="d-flex" aria-label="pagination"><ul class="pagination">';
        $config['full_tag_close'] = '</ul></nav>';

        $config['prev_link'] = '<span aria-hidden="true"><i class="uil uil-arrow-left"></i></span>';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';

        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';

        $config['next_link'] = '<span aria-hidden="true"><i class="uil uil-arrow-right"></i></span>';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';

        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';

        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';

        $config['attributes'] = array('class' => 'page-link');
    
        $this->pagination->initialize($config);
        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'supplier' => $this->M_Supplier->getAllSupplier($config["per_page"], $page)->result(),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        $data['pagination'] = $this->pagination->create_links();

        return $this->load->view('supplierFind',$data);
    }

    public function detailCompany($id)
    {

        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'supplier' => $this->M_Company->getWhereJoin($id),
            'product' => $this->M_Product->getProduct($id),
            'facility' => $this->M_Facility->getWhereFacility($id),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('viewCompany',$data);
    }


    
    function cekSup(){
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);
        $supplier = $this->M_Supplier->getWhereIdSupplier($iduser);

        if (!$this->session->userdata('iduser')) {
            redirect('logout');
         }else{
            if($user->nama && $user->alamat && $user->email && $user->negara && $user->telp){
                if ($user->negara == 'Indonesia') {
                    if ($supplier[0]->verify == 0) {
                        $this->session->set_flashdata('pesan', 'Tunggu pengajuanmu diverifikasi Admin 1x24 Jam');
                        redirect('profil');
                    }else{
                        redirect('regisSupplier');
                    }
                }else{
                    $this->session->set_flashdata('pesan_e', 'Supplier only for indonesia country');
                    redirect('profil');
                }
            }else{
                $this->session->set_flashdata('pesan_e', 'Please fill the all profile data');
                redirect('profil');
            }
            
        }
        
    }
    function regis(){
        $iduser = $this->session->userdata('iduser');
        $user = $this->M_User->get_where($iduser);

        if (!$this->session->userdata('iduser')) {
            redirect('logout');
         }else{
            if ($this->input->post()) {
                    
                    $data = array(
                        'NamaUsaha' => $this->input->post('company'),
                        'deskripsiPerusahaan' => $this->input->post('deskrip'),
                        'nama' => $this->input->post('nama'),
                        'email' => $this->input->post('email'),
                        'telp' => $this->input->post('telp'),
                        'iduser' => $this->input->post('iduser'),
                        'verify' => '0',
                        'tgl' => date('Y-m-d H:i:s')
                    );
                    
                    $this->M_Supplier->insertSupplier($data);

                    $this->session->set_flashdata('pesan', 'Tunggu pengajuanmu diverifikasi Admin');

                    redirect('profil');
                }else{
                    $data = array(
                        'userHeader' => $this->M_User->get_where($iduser),
                        'header' => 'componen/header',
                        'footer' => 'componen/footer',
                    );

                    return $this->load->view('regisSupplier',$data);
            }
        }
    }

    function supplierCategory($id){
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'supplier' => $this->M_Company->getWhereCategory($id),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('supplierFindCategory',$data);
    }

    function supplierSubCategoryA($id,$idsuba){
        $iduser = $this->session->userdata('iduser');
        $data = [
            'userHeader' => $this->M_User->get_where($iduser),
            'kategori_structure' => $this->M_Kategori->getKategoriandSubkategoriA(),
            'supplier' => $this->M_Company->getWhereSubCategoryA($id,$idsuba),
            'header' => 'componen/header',
            'footer' => 'componen/footer',
        ];
        
        return $this->load->view('supplierFindCategoryA',$data);
    }

}

/* End of file Supplier.php */
