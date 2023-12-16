<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Facility extends CI_Model {

    function getFacility(){
        return $this->db->get('facility')->result();
    }

    function getWhere($idfacility,$idcompany){
        $this->db->select('*')
                ->from('facility')
                ->where('idfacility',$idfacility)
                ->where('idcompany',$idcompany);

        return  $this->db->get()->result();
    }

    function getWhereFacility($id){
        $this->db->select('*')
                ->from('facility')
                ->where('idcompany',$id);

        return  $this->db->get()->result();
    }

    function getWhereFacilityUpdate($id){
        $this->db->select('*')
                ->from('facility')
                ->where('idfacility',$id);

        return  $this->db->get()->result();
    }

    function insertfacility($data){
        $this->db->insert('facility',$data);
    }

    public function updateFacility($facilityId, $data,$idcompany) {
        $this->db->where('idfacility', $facilityId)->where('idcompany',$idcompany)->update('facility', $data);
    }


    function deletefacility($id,$idsupplier){
        $this->db->where('idfacility', $id);
        $this->db->where('idcompany', $idsupplier);
        $this->db->delete('facility');
    }

}

/* End of file M_Facility.php */
