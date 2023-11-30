<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

    function getUser() {
        return $this->db->get('user')->result();
    }

    function insertUser($data){
        $this->db->insert('user',$data);
    }

    public function get_email_or_username($username_or_email) {
        $this->db->where('email', $username_or_email);
        $this->db->or_where('username', $username_or_email);
        $query = $this->db->get('user');

        return $query->row();
    }
}

/* End of file M_User.php */
