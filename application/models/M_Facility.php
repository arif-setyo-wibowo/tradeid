<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Facility extends CI_Model {

    function getFacility(){
        return $this->db->get('facility')->result();
    }

    function getWhereFacility($id){
        $this->db->select('*')
                ->from('facility')
                ->where('idcompany',$id);

        return  $this->db->get()->result();
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
