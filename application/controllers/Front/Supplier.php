<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    function regis(){
        
        if ($this->input->post()) {
            # code...
        }else{
            $data = array(
                'header' => 'componen/header',
                'footer' => 'componen/footer',
            );

            return $this->load->view('regisSupplier',$data);
        }
    }

}

/* End of file Supplier.php */
