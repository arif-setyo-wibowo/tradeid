<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Admin extends CI_Model {

   function getSupplier(){
        return $this->db->get('supplier')->result();
   } 

   function update($id,$data){
        $this->db->update('supplier', $data, array('iduser' => $id));
   }

}

/* End of file M_Admin.php */
