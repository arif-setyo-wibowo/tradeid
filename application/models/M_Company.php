<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Company extends CI_Model {

    function getCompany(){
       return $this->db->get('company')->result();
    }


    function getWhere($id){
        $query = $this->db->get_where('company', array('idcompany' => $id));
        return $query->result();
    }

}

/* End of file M_Supplier.php */
