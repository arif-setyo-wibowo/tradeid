<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

    function getUser() {
        return $this->db->get('user')->result();
    }

    function insertUser($data){
        $this->db->insert('user',$data);
    }

    function get_where($id){
        $query = $this->db->get_where('user', array('iduser' => $id));
        return $query->row();
    }

    public function get_email_or_username($username_or_email) {
        $this->db->where('email', $username_or_email);
        $this->db->or_where('username', $username_or_email);
        $query = $this->db->get('user');

        return $query->row();
    }

    public function get_all_countries() {
        $api_url = 'https://restcountries.com/v3.1/all';
        $response = file_get_contents($api_url);
        return json_decode($response, true);
    }
    
    function update($id,$data){
        $this->db->update('user', $data, array('iduser' => $id));
    }

}

/* End of file M_User.php */
