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
		$this->db->where('password',$data['password']);
		$query = $this->db->get();
		// $this->db->get();
		// echo $this->db->last_query();
		// die();

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
	public function getUploadedBulkData()
	{		
		if(!empty($this->session->userdata('vendor_id'))){			
			$this->db->select('product.*,product_item.*,manufacturer.name as manufacturer_name,product_form.name as product_form');
			$this->db->from('product');
			$this->db->join('product_item','product_item.product_id=product.id','left');
			$this->db->join('manufacturer','manufacturer.id=product.manufacturer_id','left');
			$this->db->join('product_form','product_form.id=product.product_form','left');
			$this->db->where('vendor_id',$this->session->userdata('vendor_id'));
			$this->db->where('update_at is NULL', NULL, FALSE);
			$query = $this->db->get();
			if($query->num_rows() > 0){
            $data = $query->result();
	            return  $data;
	        }else{
	            return  json_encode(array('status'=>0,'message'=>'No record Found'));
	        }

		}
		
	}
	public function getAllProductData()
	{		
		if(!empty($this->session->userdata('vendor_id'))){			
			$this->db->select('product.*,product_item.*,manufacturer.name as manufacturer_name,product_form.name as product_form');
			$this->db->from('product');
			$this->db->join('product_item','product_item.product_id=product.id','left');
			$this->db->join('manufacturer','manufacturer.id=product.manufacturer_id','left');
			$this->db->join('product_form','product_form.id=product.product_form','left');
			$this->db->where('vendor_id',$this->session->userdata('vendor_id'));
			$query = $this->db->get();
			if($query->num_rows() > 0){
            $data = $query->result();
	            return  $data;
	        }else{
	            return  json_encode(array('status'=>0,'message'=>'No record Found'));
	        }

		}
		
	}
	public function productDelete($id)
	{
		return $this->deleteData('product',array('id'=>$id));
	}

}

?>