<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Inquire extends CI_Model {

    function getWhereInquire($id,$company){
        $this->db->select('*')
                 ->from('inquire')
                 ->where('idinquire',$id)
                 ->where('idcompany',$company);
        
         return  $this->db->get()->result();
    }

    function getWhereCompany($id){
        $this->db->select('*')
                 ->from('inquire')
                 ->where('idcompany',$id);
        
         return  $this->db->get()->result();
    }


    function insertInquire($data){
        $this->db->insert('inquire',$data);
    }


}

/* End of file M_Inquire.php */
