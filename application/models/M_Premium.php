<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_Premium extends CI_Model {

    public function countAllData() {
        return $this->db->count_all('premium');
    }
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

    function insertPembelian($data){
        $this->db->insert('pembelian',$data);
    }

    function getWhereCompany($idcompany){
        $query = $this->db->get_where('pembelian', array('idcompany' => $idcompany));
        return $query->result();
    }

    function getPembelian() {
        $this->db->select('*')
                ->from('pembelian')
                ->join('company', 'company.idcompany = pembelian.idcompany')
                ->join('premium', 'premium.idpremium = pembelian.idpremium');

        return $this->db->get()->result();
    }

    function getwherePembelian($idpembelian) {
        $this->db->select('*')
                ->from('pembelian')
                ->where('idpembelian',$idpembelian)
                ->join('company', 'company.idcompany = pembelian.idcompany')
                ->join('premium', 'premium.idpremium = pembelian.idpremium');

        return $this->db->get()->result();
    }

    function updatePembelian($idpembelian,$idpremium,$data) {
        $this->db->where('idpembelian', $idpembelian);
        $this->db->where('idpremium', $idpremium);
        $this->db->update('pembelian',$data);
    }
}

/* End of file M_Premium.php */
