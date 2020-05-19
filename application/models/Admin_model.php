<?php

class Admin_model extends MY_model
{
	public function insertdb($table,$data){
		
		return	$this->db->insert($table, $data);
	}

	public function login($data){
		$this->db->select('*');
		$this->db->from('admin');
		$this->db->group_start();
		$this->db->where('username',$data['username']);		
		$this->db->or_where('email',$data['username']);
		$this->db->group_end();
		$this->db->where('password',md5($data['password']));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		}
	}

}

?>