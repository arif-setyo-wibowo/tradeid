<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Supplier extends CI_Model {

    function getSupplier(){
       return $this->db->get('supplier')->result();
    }

    function insertSupplier($data){
        $this->db->insert('supplier',$data);
    }
    
    function getWhereIdCompanyAndSupplier($id){
        $this->db->select('*')
                ->from('company')
                ->join('supplier', 'supplier.idsupplier = company.idsupplier')
                ->where('supplier.idsupplier',$id);
                        
        return $this->db->get()->result();
    }

    function getWhereIdSupplier($id){
        $this->db->select('*')
                ->from('supplier')
                ->where('iduser',$id);
                        
        return $this->db->get()->result();
    }

    function getWhereIdCompany($id){
        $this->db->select('*')
                ->from('company')
                ->where('idsupplier',$id);
                        
        return $this->db->get()->result();
    }

    function insertCompany($data){
        $this->db->insert('company',$data);
    }

    function updateCompany($id,$data){
        $this->db->update('company', $data, array('idsupplier' => $id));
    }
}

/* End of file M_Supplier.php */
