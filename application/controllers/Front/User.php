<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_User');
    }
    
    public function index()
    {
        
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

                return redirect('register');
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
                $this->session->set_userdata('username', $user->username);
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
        $this->session->unset_userdata('username');
        redirect('login');
    }
}

/* End of file User.php */
