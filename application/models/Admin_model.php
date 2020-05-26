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
	public function VendorAdd($data)
	{
		return $this->insertData('vendors',$data);
	}

	public function VendorList()
	{
		return $this->getData('vendors','*','');
	}
	public function VendorStatus($status,$id)
	{
		return $this->updateData('vendors',array('is_active'=>$status),array('id'=>$id));
	}
	public function getVendorByID($id)
	{
		return $this->getRowData('vendors','*',array('id'=>$id));
	}
	public function VendorUpdate($data,$id)
	{
		return $this->updateData('vendors',$data,array('id'=>$id));
	}
	public function VendorDelete($id)
	{
		return $this->deleteData('vendors',array('id'=>$id));
	}
	public function SubCategoryList()
	{
		$this->db->select('subcategory.*,category.category_name');
		$this->db->from('subcategory');
		$this->db->join('category','category.id = subcategory.category_id');
		return $this->db->get()->result();
	}

}

?>