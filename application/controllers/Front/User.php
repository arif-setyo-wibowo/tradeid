<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
        $this->load->model('M_Supplier');
    }
    
    public function index()
    {
        if (!$this->session->userdata('iduser')) {
           redirect('logout');
        }else{
            $iduser = $this->session->userdata('iduser');
            $data = [
                'supplier' => $this->M_Supplier->getWhereIdSupplier($iduser),
                'user' => $this->M_User->get_where($iduser),
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            ];
            
            return $this->load->view('profile',$data);
        }
    
    }

    public function editProfile()
    { 
        $iduser = $this->session->userdata('iduser');

        if (!$this->session->userdata('iduser')) {
            redirect('logout');
         }else{
            if ($this->input->post()) {
                $data = array(
                    'nama' => $this->input->post('nama'),
                    'email' => $this->input->post('email'),
                    'alamat' => $this->input->post('alamat'),
                    'telp' => $this->input->post('telp'),
                    'negara' => $this->input->post('negara'),
                );

                $this->M_User->update($iduser,$data);

                redirect('profil');
            }else{
                $data = [
                    'user' => $this->M_User->get_where($iduser),
                    'header' => 'componen/header',
                    'footer' => 'componen/footer',
                ];
                
                return $this->load->view('editProfile',$data);
            }
        }
    }

    public function get_countries() {
        $countries = $this->M_User->get_all_countries();
        echo json_encode($countries);
    }

    function regis(){

        if ($this->input->post()) {
             //Validation
             $this->load->library('form_validation'); 

             $password = $this->input->post('password');
             $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
             $this->form_validation->set_rules('email', 'Email', 'required|is_unique[user.email]');
             $this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[20]|alpha_numeric');
             $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

             if ($this->form_validation->run() == TRUE) {
                $data = array(
                    'username' => $this->input->post('username'),
                    'email' => $this->input->post('email'),
                    'password' => password_hash($password, PASSWORD_DEFAULT)
                );

                $this->M_User->insertUser($data);

                 redirect('login');
             }else{
                $data = [
                    'header' => 'componen/header',
                    'footer' => 'componen/footer',
                ];
                
                return $this->load->view('register',$data);
             }
        }else{
            $data = [
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            ];
            
            return $this->load->view('register',$data);
        }
    }

    function login(){
        
        if ($this->input->post()) {

            $username_or_email = $this->input->post('username_or_email');
            $password = $this->input->post('password');
            $user = $this->M_User->get_email_or_username($username_or_email);

            if ($user && password_verify($password, $user->password)) {
                $this->session->set_userdata('iduser', $user->iduser);
                $this->session->set_userdata('email', $user->email);
                $this->session->set_userdata('username', $user->username);
                $this->session->set_userdata('nama', $user->nama);
                $this->session->set_userdata('alamat', $user->alamat);
                $this->session->set_userdata('negara', $user->negara);
                $this->session->set_userdata('telp', $user->telp);
                $this->session->set_userdata('cSupplier', $user->cSupplier);
                redirect('home');
            } else {
                $data = array(
                    'header' => 'componen/header',
                    'footer' => 'componen/footer',
                    'error' => 'Username, email, atau password salah.'
                );
                $this->load->view('login', $data);
            }

        }else{
            $data = array(
                'header' => 'componen/header',
                'footer' => 'componen/footer',
                'error' => ''
            );

            $this->load->view('login',$data);
        }
    }

    function logout(){
        $this->session->unset_userdata('iduser');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('alamat');
        $this->session->unset_userdata('negara');
        $this->session->unset_userdata('telp');
        $this->session->unset_userdata('cSupplier');
        redirect('login');
    }

    
}

/* End of file User.php */
