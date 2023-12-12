<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kategori extends CI_Model {

    function getKategori() {
        return $this->db->get('kategori')->result();
    }

    function getKategoriandSubkategoriA() {
        $this->db->select('kategori.idkategori AS idkategori, kategori.namaKategori AS kategori, subkategori_a.namaSubKategori AS subkategori_a, subkategori_a.idsubkategori_a AS idsubkategori_a, subkategori_b.namaSubKategori_b AS subkategori_b')
                ->from('kategori')
                ->join('subkategori_a', 'kategori.idkategori = subkategori_a.idkategori', 'left')
                ->join('subkategori_b', 'subkategori_a.idsubkategori_a = subkategori_b.idsubkategori_a', 'left')
                ->order_by('kategori.namaKategori, subkategori_a.namaSubKategori, subkategori_b.namaSubKategori_b');

        $query = $this->db->get();

        return $query->result_array();
    }


    function insertKategori($data){
        $this->db->insert('kategori',$data);
    }

    function getWhere($id) {
        $query = $this->db->get_where('kategori', array('idkategori' => $id));
        return $query->result();
    }
    function updateKategori($id,$data) {
        $this->db->where('idkategori', $id);
        $this->db->update('kategori',$data);
    }

    function deleteKategori($id){
        $this->db->where('idkategori', $id);
        $this->db->delete('kategori');
    }

}

/* End of file Kategori.php */
