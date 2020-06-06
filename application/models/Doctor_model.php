<?php

class Doctor_model extends MY_model
{
	
	public function insertdb($table,$data){
		
		return	$this->db->insert($table, $data);
	}
 
	public function login($data){		
		$this->db->select('*');
		$this->db->from('users');
		$this->db->group_start();
		$this->db->where('email',$data['email']);		
		$this->db->or_where('mobile',$data['email']);
		$this->db->group_end();
		$this->db->where('password',$data['password']);
		$query = $this->db->get();
		// $this->db->get();
		// echo $this->db->last_query();
		// die();

		if ($query->num_rows() > 0) {
			return $query->row();
		}
	}
	public function doctorRegistration($data)
	{
		return $this->insertData('users',$data);
	}
	public function doctorProfileUpdate($data,$where)
	{
		return $this->updateData('users',$data,$where);

	}
	public function addBankAccount($data)
	{
		return $this->insertData('bank_account',$data);
	}

	public function doctorList()
	{
		return $this->getData('users','*','');
	}
	public function doctortatus($status,$id)
	{
		return $this->updateData('users',array('is_active'=>$status),array('id'=>$id));
	}

}

?>