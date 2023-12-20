<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Inquire extends CI_Model {

    public function countAllData() {
        return $this->db->count_all('inquire');
    }
    function countInquire($idcompany){
        $this->db->from('inquire');
        $this->db->where('idcompany', $idcompany);
        return $this->db->count_all_results();
    }

    public function getInquireData() {
        $query = $this->db->query("SELECT COUNT(idinquire) as total, MONTH(tgl) as bulan FROM inquire GROUP BY MONTH(tgl)");
        return $query->result_array();
    }

    public function getTopCategoriesThisMonth() {
        $query = $this->db->select('ska.namaSubKategori_b AS category, COUNT(*) AS total_inquires')
                          ->from('inquire i')
                          ->join('product p', 'i.idproduct = p.idproduct')
                          ->join('subkategori_b ska', 'p.idsubkategori_b = ska.idsubkategori_b')
                          ->where('MONTH(i.tgl)', date('m'))
                          ->group_by('ska.namaSubKategori_b')
                          ->order_by('total_inquires', 'DESC')
                          ->limit(7)
                          ->get();

        return $query->result_array();
    }

    public function getTopInquiredCategoriesAndCountries() {
        $query = $this->db->select('ska.namaSubKategori_b AS category, COUNT(i.idinquire) AS total_inquires, i.negara')
                          ->from('inquire i')
                          ->join('product p', 'i.idproduct = p.idproduct')
                          ->join('subkategori_b ska', 'p.idsubkategori_b = ska.idsubkategori_b')
                          ->where('MONTH(i.tgl)', date('m')) 
                          ->group_by('ska.namaSubKategori_b, i.negara')
                          ->order_by('total_inquires', 'DESC')
                          ->limit(7)
                          ->get();

        return $query->result_array();
    }


    
    function getOne($id) {
        $this->db->select('*')
                 ->from('inquire')
                 ->where('idinquire',$id)                
                 ->join('product', 'product.idproduct = inquire.idproduct')
                 ->join('company', 'company.idcompany = inquire.idcompany')
                 ->join('user', 'user.iduser = inquire.iduser');
        
         return  $this->db->get()->result();
    }

    function getAll() {
        $this->db->select('*')
                ->from('inquire')
                ->join('product', 'product.idproduct = inquire.idproduct')
                ->join('company', 'company.idcompany = inquire.idcompany')
                ->join('user', 'user.iduser = inquire.iduser');

        return  $this->db->get()->result();
    }

    function getWhereInquire($id,$company){
        $this->db->select('*')
                 ->from('inquire')
                 ->where('idinquire',$id)
                 ->where('inquire.idcompany',$company)
                 ->join('product', 'product.idproduct = inquire.idproduct')
                 ->join('company', 'company.idcompany = inquire.idcompany')
                 ->join('subkategori_a', 'subkategori_a.idsubkategori_a = company.idsubkategori_a');
        
         return  $this->db->get()->result();
    }

    function getWhereCompany($id){
        $this->db->select('*')
                 ->from('inquire')
                 ->where('idcompany',$id);
        
         return  $this->db->get()->result();
    }


    function insertInquire($data){
        $this->db->insert('inquire',$data);
    }


}

/* End of file M_Inquire.php */
