<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Supplier extends CI_Model {

    function insertSupplier($data){
        $this->db->insert('supplier',$data);
    }

    function getWhereIdSupplier($id){
        $query = $this->db->get_where('supplier', array('iduser' => $id));
        return $query->row();
    }

}

/* End of file M_Supplier.php */
