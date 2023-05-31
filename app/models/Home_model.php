<?php

class Home_model extends CI_Model{

    public function __construct()
    {
        parent::__construct();
    }

    public function  create_user($data)
    {
        $this->db->insert('users', $data);
        return $this->db->affected_rows();
    }
    
}
?>
