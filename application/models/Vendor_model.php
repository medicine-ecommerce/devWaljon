<?php

class Vendor_model extends MY_model
{
	
	public function insertdb($table,$data){
		
		return	$this->db->insert($table, $data);
	}

	public function login($data){		
		$this->db->select('*');
		$this->db->from('vendors');
		$this->db->group_start();
		$this->db->where('email',$data['email']);		
		$this->db->or_where('mobile',$data['email']);
		$this->db->group_end();
		$this->db->where('password',md5($data['password']));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		}
	}
	public function vendorRegistration($data)
	{
		return $this->insertData('vendors',$data);
	}
	public function vendorProfileUpdate($data,$where)
	{
		return $this->updateData('vendors',$data,$where);
	}
	public function addBankAccount($data)
	{
		return $this->insertData('bank_account',$data);
	}

	public function VendorList()
	{
		return $this->getData('vendors','*','');
	}
	public function VendorStatus($status,$id)
	{
		return $this->updateData('vendors',array('is_active'=>$status),array('id'=>$id));
	}

}

?>