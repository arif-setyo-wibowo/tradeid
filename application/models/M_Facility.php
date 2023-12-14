<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Facility extends CI_Model {

    function getFacility(){
        return $this->db->get('facility')->result();
    }

    function insertfacility($data){
        $this->db->insert('facility',$data);
    }


    function deletefacility($id,$idsupplier){
        $this->db->where('idproduct', $id);
        $this->db->where('idcompany', $idsupplier);
        $this->db->delete('arif_film');
    }

}

/* End of file M_Facility.php */
