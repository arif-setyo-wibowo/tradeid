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

    public function getTopFiveCategoriesPerMonth() {
        $query = $this->db->query("
            SELECT COUNT(i.idinquire) as total, MONTH(i.tgl) as bulan, sa.namaSubKategori
            FROM inquire i
            JOIN product p ON i.idproduct = p.idproduct
            JOIN subkategori_a sa ON p.idsubkategori_a = sa.idsubkategori_a
            GROUP BY MONTH(i.tgl), sa.namaSubKategori
            ORDER BY MONTH(i.tgl), total DESC
            LIMIT 5
        ");
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
                 ->where('idcompany',$company);
        
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
