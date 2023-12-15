<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Premium extends CI_Model {

    function getPremium() {
        return $this->db->get('premium')->result();
    }

    function insertPremium($data){
        $this->db->insert('premium',$data);
    }

    function getWhere($id) {
        $query = $this->db->get_where('premium', array('idpremium' => $id));
        return $query->result();
    }
    function updatePremium($id,$data) {
        $this->db->where('idpremium', $id);
        $this->db->update('premium',$data);
    }

    function deletePremium($id){
        $this->db->where('idpremium', $id);
        $this->db->delete('premium');
    }


    function insertPembelian(){
        $this->db->insert('pembelian',$data);
    }

}

/* End of file M_Premium.php */
