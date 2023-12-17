<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Databuyer extends CI_Model {

    function getDatabuyer() {
        $this->db->select('*')
                 ->from('buyer')
                 ->join('kategori', 'kategori.idkategori = buyer.idkategori')
                 ->join('subkategori_b', 'subkategori_b.idsubkategori_b = buyer.idsubkategori_b')
                 ->join('subkategori_a', 'subkategori_a.idsubkategori_a = buyer.idsubkategori_a');

        return  $this->db->get()->result();
    }

    function insertDatabuyer($data){
        $this->db->insert('buyer',$data);
    }

    function getWhere($id) {
        $query = $this->db->select('*')
                        ->where('idbuyer', $id)
                        ->from('buyer')
                        ->join('subkategori_b', 'subkategori_b.idsubkategori_b = buyer.idsubkategori_b')
                        ->join('subkategori_a', 'subkategori_a.idsubkategori_a = buyer.idsubkategori_a')
                        ->join('kategori', 'kategori.idkategori = buyer.idkategori')
                        ->get();
        return $query->result();
    }

    function updateBuyer($id,$data) {
        $this->db->where('idbuyer', $id);
        $this->db->update('buyer',$data);
    }

    function deleteBuyer($id){
        $this->db->where('idbuyer', $id);
        $this->db->delete('buyer');
    }

    public function getSubkategoriAOptions($idkategori) {
        $this->db->select('idsubkategori_a, namaSubKategori');
        $this->db->from('subkategori_a');
        $this->db->where('idkategori', $idkategori);
        $query = $this->db->get();
        return $query->result();
    }

    public function getSubkategoriBOptions($idsubkategoria) {
        $this->db->select('idsubkategori_b, namaSubKategori_b');
        $this->db->from('subkategori_b');
        $this->db->where('idsubkategori_a', $idsubkategoria);
        $query = $this->db->get();
        return $query->result();
    }

}

/* End of file Kategori.php */
