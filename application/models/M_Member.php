<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_Member extends CI_Model {


    function getWhere($idcompany) {
        $this->db->select('*')
                ->from('member')
                ->where('idcompany',$idcompany)
                ->where('statusMember',1)
                ->order_by('created_at', 'DESC');

        return $this->db->get()->result();
        
    }

    function insertMember($data){
        $this->db->insert('member',$data);
    }

    function updateMemberStatus($id,$idcompany,$data) {
        $this->db->where('idmember', $id)
                ->where('idcompany', $idcompany)
                ->where('statusMember', 1)
                ->update('member',$data);
    }

}

/* End of file M_Member.php */
