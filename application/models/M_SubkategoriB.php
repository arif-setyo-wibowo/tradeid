<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_SubkategoriB extends CI_Model {

    public function countAllData() {
        return $this->db->count_all('subkategori_b');
    }
    function getSubKategori() {
        $this->db->select('*')
                 ->from('subkategori_b')
                 ->join('subkategori_a', 'subkategori_a.idsubkategori_a = subkategori_b.idsubkategori_a')
                 ->join('kategori', 'kategori.idkategori = subkategori_b.idkategori');

        return  $this->db->get()->result();
    }

    function insertSubKategori($data){
        $this->db->insert('subkategori_b',$data);
    }

    function getWhere($id) {
        $query = $this->db->select('*')
                            ->from('subkategori_b')
                            ->join('subkategori_a', 'subkategori_a.idsubkategori_a = subkategori_b.idsubkategori_a')
                            ->join('kategori', 'kategori.idkategori = subkategori_b.idkategori')
                            ->where('idsubkategori_b', $id)->get();
        return $query->result();
    }

    function updateSubKategori($id,$data) {
        $this->db->where('idsubkategori_b', $id);
        $this->db->update('subkategori_b',$data);
    }

    function deleteSubKategori($id){
        $this->db->where('idsubkategori_b', $id);
        $this->db->delete('subkategori_b');
    }

    public function getSubkategoriAOptions($idkategori) {
        $this->db->select('idsubkategori_a, namaSubKategori');
        $this->db->from('subkategori_a');
        $this->db->where('idkategori', $idkategori);
        $query = $this->db->get();
        return $query->result();
    }

}

/* End of file Kategori.php */
