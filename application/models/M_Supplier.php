<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Supplier extends CI_Model {

    function getSupplier(){
       return $this->db->get('supplier')->result();;
    }

    function insertSupplier($data){
        $this->db->insert('supplier',$data);
    }
    

    function getWhereIdSupplier($id){
        $query = $this->db->get_where('supplier', array('iduser' => $id));
        return $query->result();
    }

    function getWhereIdCompany($id){
        $query = $this->db->get_where('company', array('iduser' => $id));
        return $query->result();
    }

    function insertCompany($data){
        $this->db->insert('company',$data);
    }

    function updateCompany($id,$data){
        $this->db->update('company', $data, array('iduser' => $id));
    }
}

/* End of file M_Supplier.php */
