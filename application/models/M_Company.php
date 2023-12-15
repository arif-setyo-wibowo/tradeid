<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Company extends CI_Model {

    function getCompany(){
       return $this->db->get('company')->result();
    }


    function getWhere($id){
        $query = $this->db->get_where('company', array('idcompany' => $id));
        return $query->result();
    }

    function getWhereJoin($id) {
        $this->db->select('*')
                ->from('company')
                ->where('idcompany',$id)
                ->join('kategori', 'kategori.idkategori = company.idkategori')
                ->join('supplier', 'supplier.idsupplier = company.idsupplier')
                ->join('subkategori_a', 'subkategori_a.idsubkategori_a = company.idsubkategori_a');

        return  $this->db->get()->result();
    }

    function getWhereCategory($id){
        $this->db->select('*')
                ->from('company')
                ->where('company.idkategori',$id)
                ->join('kategori', 'kategori.idkategori = company.idkategori')
                ->join('subkategori_a', 'subkategori_a.idsubkategori_a = company.idsubkategori_a');

        return  $this->db->get()->result();
    }


    function getWhereSubCategoryA($id,$idSuba){
        $this->db->select('*')
                    ->from('company')
                    ->where('company.idkategori',$id)    
                    ->where('company.idsubkategori_a',$idSuba)  
                    ->join('kategori', 'kategori.idkategori = company.idkategori')
                    ->join('subkategori_a', 'subkategori_a.idsubkategori_a = company.idsubkategori_a');

        return  $this->db->get()->result();
    }

    function getWhereKategori($id) {
        $query = $this->db->select('*')
                            ->from('company')
                            ->join('subkategori_a', 'subkategori_a.idsubkategori_a = company.idsubkategori_a')
                            ->join('kategori', 'kategori.idkategori = company.idkategori')
                            ->where('idsupplier', $id)->get();
        return $query->result();
    }

    public function getSubkategoriAOptions($idkategori) {
        $this->db->select('idsubkategori_a, namaSubKategori');
        $this->db->from('subkategori_a');
        $this->db->where('idkategori', $idkategori);
        $query = $this->db->get();
        return $query->result();
    }
}

/* End of file M_Supplier.php */
