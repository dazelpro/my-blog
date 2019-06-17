<?php
class Login_model extends CI_Model{

	function auth($email,$password){
        $result = $this->db->query("SELECT * FROM t_user WHERE user_email='$email' AND user_password=MD5('$password') LIMIT 1");
        return $result;
    }

} 