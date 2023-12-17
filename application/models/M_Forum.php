<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Forum extends CI_Model {

    function insertPosting($data){
        $this->db->insert('posting',$data);
    }

    function getPosting(){
        $this->db->select('*')
                ->from('posting')
                ->join('company', 'company.idcompany = posting.idcompany')
                ->join('supplier', 'supplier.idsupplier = company.idsupplier');

        return $this->db->get()->result();
    }

    function countkomen($idposting){
        $this->db->from('komen');
        $this->db->where('idposting', $idposting);
        return $this->db->count_all_results();
    }

    function getWherePosting($idposting){
        $this->db->select('*')
                ->from('posting')
                ->where('idposting',$idposting)
                ->join('company', 'company.idcompany = posting.idcompany')
                ->join('supplier', 'supplier.idsupplier = company.idsupplier');

        return $this->db->get()->result();
    }

    function insertKomen($data){
        $this->db->insert('komen',$data);
    }

    function getWhereKomen($idposting){
        $this->db->select('*')
                ->from('komen')
                ->where('komen.idposting',$idposting)
                ->join('posting', 'posting.idposting = komen.idposting')
                ->join('company', 'company.idcompany = posting.idcompany')
                ->join('supplier', 'supplier.idsupplier = company.idsupplier');

        return $this->db->get()->result();
    }

    function getWhereBalas($idkomen){
        $this->db->select('*')
                ->from('komen')
                ->where('komen.idkomen',$idkomen)
                ->where('idbalas',$idkomen)
                ->join('posting', 'posting.idposting = komen.idposting')
                ->join('company', 'company.idcompany = posting.idcompany')
                ->join('supplier', 'supplier.idsupplier = company.idsupplier');

        return $this->db->get()->result();
    }


}

/* End of file M_Forum.php */
