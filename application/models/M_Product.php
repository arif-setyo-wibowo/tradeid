<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Product extends CI_Model {

    public function getAllData() {
        return $this->db->get('product');
    }

    function search_data_product($query){
        $this->db->select('*')
                ->from('product')
                ->join('kategori', 'kategori.idkategori = product.idkategori', 'left') 
                ->join('company', 'company.idcompany = product.idcompany', 'left') 
                ->join('subkategori_a', 'subkategori_a.idsubkategori_a = product.idsubkategori_a', 'left')
                ->join('subkategori_b', 'subkategori_b.idsubkategori_b = product.idsubkategori_b', 'left')
                ->group_start()
                    ->like('kategori.namaKategori', $query)
                    ->or_like('subkategori_b.namaSubKategori_b', $query)
                    ->or_like('subkategori_a.namaSubKategori', $query)
                ->group_end();

        return $this->db->get()->result();
    }

    function countProduct($idcompany){
        $this->db->from('product');
        $this->db->where('idcompany', $idcompany);
        return $this->db->count_all_results();
    }

    
    function getAllProduct() {
        $this->db->select('*')
                 ->from('product')
                 ->join('company', 'product.idcompany = company.idcompany')
                 ->join('kategori', 'kategori.idkategori = product.idkategori')
                 ->join('subkategori_a', 'subkategori_a.idsubkategori_a = product.idsubkategori_a')
                 ->join('subkategori_b', 'subkategori_b.idsubkategori_b = product.idsubkategori_b');
    
        return $this->db->get()->result();
    }
    

    function getWhereIdSupplier($id){
        $query = $this->db->get_where('company', array('idsupplier' => $id));
        return $query->result();
    }
    
    function getProduct($id){
        $this->db->select('*,product.deskripsiPendek AS despen')
                 ->from('product')
                 ->where('product.idcompany',$id)
                 ->join('company', 'company.idcompany = product.idcompany')
                 ->join('subkategori_a', 'subkategori_a.idsubkategori_a = product.idsubkategori_a')
                 ->join('subkategori_b', 'subkategori_b.idsubkategori_b = product.idsubkategori_b');

        return  $this->db->get()->result();
    }


    function getWhereProduct($id){
        $this->db->select('*')
                 ->from('product')
                 ->where('idproduct',$id)
                 ->join('company', 'company.idcompany = product.idcompany')
                 ->join('kategori', 'kategori.idkategori = product.idkategori')
                 ->join('subkategori_a', 'subkategori_a.idsubkategori_a = product.idsubkategori_a')
                 ->join('subkategori_b', 'subkategori_b.idsubkategori_b = product.idsubkategori_b');
        
         return  $this->db->get()->result();
    }


    function getProductAll($limit, $start){
        $this->db->select('*')
                 ->from('product')
                 ->join('company', 'company.idcompany = product.idcompany')
                 ->join('kategori', 'kategori.idkategori = product.idkategori')
                 ->join('subkategori_a', 'subkategori_a.idsubkategori_a = product.idsubkategori_a')
                 ->join('subkategori_b', 'subkategori_b.idsubkategori_b = product.idsubkategori_b')
                 ->limit($limit, $start);
        
         return $query =  $this->db->get();
    }

    function getWhereCategory($id){
        $this->db->select('*')
                ->from('product')
                ->where('product.idkategori',$id)    
                ->join('company', 'company.idcompany = product.idcompany')
                ->join('kategori', 'kategori.idkategori = product.idkategori');

        return  $this->db->get()->result();
    }

    function getWhereSubCategoryA($id,$idSuba){
        $this->db->select('*')
                    ->from('product')
                    ->where('product.idkategori',$id)    
                    ->where('product.idsubkategori_a',$idSuba)  
                    ->join('company', 'company.idcompany = product.idcompany')
                    ->join('kategori', 'kategori.idkategori = product.idkategori')
                    ->join('subkategori_a', 'subkategori_a.idsubkategori_a = product.idsubkategori_a');

        return  $this->db->get()->result();
    }

    function getWhereSubCategoryB($id,$idSuba,$idSubb){
        $this->db->select('*')
                    ->from('product')
                    ->where('product.idkategori',$id)    
                    ->where('product.idsubkategori_a',$idSuba) 
                    ->where('product.idsubkategori_b',$idSubb)  
                    ->join('company', 'company.idcompany = product.idcompany')
                    ->join('kategori', 'kategori.idkategori = product.idkategori')
                    ->join('subkategori_a', 'subkategori_a.idsubkategori_a = product.idsubkategori_a')
                    ->join('subkategori_b', 'subkategori_b.idsubkategori_b = product.idsubkategori_b');

        return  $this->db->get()->result();
    }



    function getWhereOne($id){
        $this->db->select('*')
                ->from('product')
                ->where('idproduct',$id)    
                ->join('company', 'company.idcompany = product.idcompany')
                ->join('kategori', 'kategori.idkategori = product.idkategori')
                ->join('subkategori_a', 'subkategori_a.idsubkategori_a = product.idsubkategori_a')
                ->join('subkategori_b', 'subkategori_b.idsubkategori_b = product.idsubkategori_b');

        return  $this->db->get()->result();
    }

    function getWhere($id,$idsup) {
        $this->db->select('*')
                ->from('product')
                ->where('idproduct',$id)
                ->where('idcompany', $idsup)
                ->join('kategori', 'kategori.idkategori = product.idkategori')
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

    public function updateProduct($productId, $data,$idcompany) {
        $this->db->where('idproduct', $productId)->where('idcompany',$idcompany)->update('product', $data);
    }

    function deleteProduct($id,$idsupplier){
        $this->db->where('idproduct', $id);
        $this->db->where('idcompany', $idsupplier);
        $this->db->delete('product');
    }

}

/* End of file M_Product.php */
