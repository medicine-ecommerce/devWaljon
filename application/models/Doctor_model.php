<?php

class Doctor_model extends MY_model
{
	
	public function insertdb($table,$data){
		
		return	$this->db->insert($table, $data);
	}
 
	public function login($data){		
		$this->db->select('*');
		$this->db->from('doctor');
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
		return $this->insertData('doctor',$data);
	}
	public function doctorProfileUpdate($data,$where)
	{
		return $this->updateData('doctor',$data,$where);
	}
	public function addBankAccount($data)
	{
		return $this->insertData('bank_account',$data);
	}

	public function doctorList()
	{
		return $this->getData('doctor','*','');
	}
	public function doctortatus($status,$id)
	{
		return $this->updateData('doctor',array('is_active'=>$status),array('id'=>$id));
	}

}

?>