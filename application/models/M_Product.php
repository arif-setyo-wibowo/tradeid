<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model {

    function getProduct($id){
        $this->db->select('*')
                 ->from('product')
                 ->where('idsupplier',$id)
                 ->join('subkategori_a', 'subkategori_a.idsubkategori_a = product.idsubkategori_a')
                 ->join('subkategori_b', 'subkategori_b.idsubkategori_b = product.idsubkategori_b');

        return  $this->db->get()->result();
    
    }

    function getWhere($id,$idsup) {
        $this->db->select('*')
                ->from('product')
                ->where('idproduct',$id)
                ->where('idsupplier', $idsup)
                ->join('subkategori_a', 'subkategori_a.idsubkategori_a = product.idsubkategori_a')
                ->join('subkategori_b', 'subkategori_b.idsubkategori_b = product.idsubkategori_b');
                        
        return $this->db->get()->result();
    }

    public function getKategoriOptions() {
        $this->db->select('idkategori, namaKategori');
        $this->db->from('kategori');
        $query = $this->db->get();
        return $query->result();
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

    function insertProduct($data){
        $this->db->insert('product',$data);
    }

    public function insertImage($product_id, $url) {
        $data = array(
            'product_id' => $product_id,
            'url' => $url
        );
        $this->db->insert('product_images', $data);
    }

    function deleteProduct($id,$idsupplier){
        $this->db->where('idproduct', $id);
        $this->db->where('idsupplier', $idsupplier);
        $this->db->delete('arif_film');
    }

}

/* End of file M_Product.php */
