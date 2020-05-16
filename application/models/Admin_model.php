<?php

class Admin_model extends CI_model
{
	public function insertdb($table,$data){
		
		return	$this->db->insert($table, $data);
	}

	public function login($user,$pass,$table){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('name',$user);
		$this->db->where('password',md5($pass));
		$result=$this->db->get();
		return $result->row();
	}

}

?>