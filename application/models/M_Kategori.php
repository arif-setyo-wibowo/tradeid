<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Kategori extends CI_Model {

    function getKategori() {
        return $this->db->get('kategori')->result();
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
