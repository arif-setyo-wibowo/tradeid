<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

   function getSupplier(){
        return $this->db->get('supplier')->result();
   } 

   function getWhereUsername($username){
        $this->db->where('username', $username);
        $query = $this->db->get('admin');

        return $query->row();
   }

   function update($id,$data){
        $this->db->update('supplier', $data, array('idsupplier' => $id));
   }
   function insertAdmin($data){
     $this->db->insert('admin', $data);
   }
   
   function getWhereSupplier($id) {
      $this->db->select('*')
              ->from('supplier')
              ->where('idsupplier',$id);
                  
      return $this->db->get()->result();
    }

   function getWhere($id) {
     $query = $this->db->get_where('admin', array('idadmin' => $id));
     return $query->result();
   }
   function deleteAdmin($id){
     $this->db->where('idadmin', $id);
     $this->db->delete('admin');
   }

}

/* End of file M_Admin.php */
