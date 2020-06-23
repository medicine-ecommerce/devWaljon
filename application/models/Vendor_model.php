<?php
class Vendor_model extends MY_model
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

		if($query->num_rows() > 0) {
			return $query->row();
		}
	}
	public function checkExistEmail($where1,$where2)
	{
		$this->db->select('email');
		$this->db->from('users');
		$this->db->where('email',$where1); 
		$this->db->where_not_in('id',$where2); 
		$query = $this->db->get();
		if($query->num_rows() > 0){
            return $query->row();
        }
	}
	public function forgotPasswordCheckEmail($where1)
	{
		$this->db->select('email');
		$this->db->from('users');
		$this->db->where('email',$where1); 		
		$query = $this->db->get();
		if($query->num_rows() > 0){
            return $query->row();
        }
	}
	public function checkExistMobile($where1,$where2)
	{
		$this->db->select('email');
		$this->db->from('users');
		$this->db->where('mobile',$where1); 
		$this->db->where_not_in('id',$where2); 
		$query = $this->db->get();
		if($query->num_rows() > 0){
            return $query->row();
        }
	}
	public function updateEmail($where1,$where2)
	{
		
	}
	public function updateMobile($where1,$where2)
	{
		
	}
	public function vendorRegistration($data)
	{
		return $this->insertData('users',$data);
	}
	public function vendorProfileUpdate($data,$where)
	{
		return $this->updateData('users',$data,$where);
	}
	public function addBankAccount($data)
	{
		return $this->insertData('bank_account',$data);
	}

	public function VendorList()
	{
		return $this->getData('users','*','');
	}
	public function VendorStatus($status,$id)
	{
		return $this->updateData('users',array('is_active'=>$status),array('id'=>$id));
	}
	public function getUploadedBulkData()
	{		
		if(!empty($this->session->userdata('user_id'))){			
			$this->db->select('product.*,product_item.*,manufacturer.name as manufacturer_name,product_form.name as product_form');
			$this->db->from('product');
			$this->db->join('product_item','product_item.product_id=product.id','left');
			$this->db->join('manufacturer','manufacturer.id=product.manufacturer_id','left');
			$this->db->join('product_form','product_form.id=product.product_form_id','left');
			$this->db->where('product.created_by',$this->session->userdata('user_id'));
			$this->db->where('update_at is NULL', NULL, FALSE);
			$query = $this->db->get();

			
			// $this->db->get();
			// echo $this->db->last_query();
			// die();
			if($query->num_rows() > 0){
			$data['allCount'] = $this->db->query('SELECT FOUND_ROWS() count;')->row()->count;
            $data['uploaded_bulk_data'] = $query->result();
	            return  $data;
	        }else{
	            return  json_encode(array('status'=>0,'message'=>'No record Found'));
	        }

		}
		
	}


	public function getAllProductData()
	{		
		//if(!empty($this->session->userdata('vendor_id'))){			
		$this->db->select('product.id,product.name,manufacturer.name as manufacturer_name,category.category_name as category_name,subcategory.subcategory as subcategory_name,product_item.mrp,product_item.sale_price,product_item.quantity,product.created_at,product_form.name as product_form,product_item.unit,product.status');
		$this->db->from('product');
		$this->db->join('product_item','product_item.product_id=product.id','left');
		$this->db->join('category','category.id=product.category_id','left');
		$this->db->join('subcategory','subcategory.id=product.sucategory_id','left');
		$this->db->join('manufacturer','manufacturer.id=product.manufacturer_id','left');
		$this->db->join('product_form','product_form.id=product.product_form_id','left');
		if($this->session->userdata('user_type')=='vendor' ){
			$this->db->where('product.created_by',$this->session->userdata('user_id'));
		}
		$query = $this->db->get();
		// print_r($this->db->last_query());
		// die();		
		if($query->num_rows() > 0){
        	return $query->result();
        }else{
            return  0;
        }	
		
	}
	public function getProductForStockDetails()
	{		
		if(!empty($this->session->userdata('user_id'))){			
			$this->db->select('product.*,product_item.*,manufacturer.name as manufacturer_name,product_form.name as product_form');
			$this->db->from('product');
			$this->db->join('product_item','product_item.product_id=product.id','left');
			$this->db->join('manufacturer','manufacturer.id=product.manufacturer_id','left');
			$this->db->join('product_form','product_form.id=product.product_form_id','left');
			$this->db->where('product.created_by',$this->session->userdata('user_id'));
			$query = $this->db->get();			
			// $this->db->get();
			// echo $this->db->last_query();
			// die();
			if($query->num_rows() > 0){
			// $data['allCount'] = $this->db->query('SELECT FOUND_ROWS() count;')->row()->count;
            $data = $query->result();
	            return  $data;
	        }else{
	        	return 0;
	            // return  json_encode(array('status'=>0,'message'=>'No record Found'));
	        }

		}
		
	}
	public function productDelete($id)
	{
		return $this->deleteData('product',array('id'=>$id));
	}

}

?>