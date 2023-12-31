<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Supplier extends CI_Model {

    public function countAllData() {
        return $this->db->count_all('supplier');
    }

    public function getAllData() {
        return $this->db->get('company');
    }

    function getAllSupplier($limit, $start){ 
        $this->db->select('*')
                ->from('company')
                ->join('kategori', 'kategori.idkategori = company.idkategori')
                ->join('subkategori_a', 'subkategori_a.idsubkategori_a = company.idsubkategori_a')
                ->limit($limit, $start);
            return $query =  $this->db->get();
     }



    public function search_data_supplier($query) {
        
        $this->db->select('*')
                    ->from('company')
                    ->join('kategori', 'company.idkategori = kategori.idkategori', 'left') 
                    ->join('subkategori_a', 'company.idsubkategori_a = subkategori_a.idsubkategori_a', 'left')
                    ->group_start()
                        ->like('kategori.namaKategori', $query)
                        ->or_like('subkategori_a.namaSubKategori', $query)
                        ->or_like('company.namaPerusahaan', $query)
                    ->group_end();
                    
        return $this->db->get()->result();
    }

    function getSupplier(){
       return $this->db->get('supplier')->result();;
    }

    function insertSupplier($data){
        $this->db->insert('supplier',$data);
    }
    

    function getWhereIdSupplier($id){
        $this->db->select('*')
                ->from('supplier')
                ->where('iduser',$id);
                        
        return $this->db->get()->result();
    }

    function getWhereIdCompanyAndSupplier($id) {
        $this->db->select('*')
                ->from('company')
                ->where('company.idsupplier',$id)
                ->join('supplier','supplier.idsupplier = company.idsupplier');
        return $this->db->get()->result();
    }
    function getWhereIdCompany($id){
        $query = $this->db->get_where('company', array('idsupplier' => $id));
        return $query->result();
    }

    function getCompany(){
        return $this->db->get('company')->result();
    }

    function insertCompany($data){
        $this->db->insert('company',$data);
    }

    function updateCompany($id,$data){
        $this->db->update('company', $data, array('idsupplier' => $id));
    }
}

/* End of file M_Supplier.php */
