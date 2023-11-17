<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_SubkategoriB extends CI_Model {

    function getSubKategori() {
        $this->db->select('*');
        $this->db->from('subkategori_a');
        $this->db->join('kategori', 'kategori.idkategori = subkategori_a.idkategori');

        return  $this->db->get()->result();
    }

    function insertSubKategori($data){
        $this->db->insert('subkategori_a',$data);
    }

    function getWhere($id) {
        $query = $this->db->select('*')
                            ->from('subkategori_a')
                            ->join('kategori', 'kategori.idkategori = subkategori_a.idkategori')
                            ->where('idsubkategori_a', $id)->get();
        return $query->result();
    }
    function updateSubKategori($id,$data) {
        $this->db->where('idsubkategori_a', $id);
        $this->db->update('subkategori_a',$data);
    }

    function deleteSubKategori($id){
        $this->db->where('idsubkategori_a', $id);
        $this->db->delete('subkategori_a');
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
