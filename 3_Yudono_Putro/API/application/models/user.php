<?php
class user extends CI_Model {
    public function checkToken($token = ''){
        $r = $this->db->get_where('users', ['token' => $token]);
        return $r->num_rows();
    }
    public function checkAdmin($token){
        $r = $this->db->get_where('users', ['token' => $token])->result()[0];
        return ($r->role == 'admin');
    }
}