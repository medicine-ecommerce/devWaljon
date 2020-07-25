<?php

class Admin_model extends MY_model
{
	public function insertdb($table,$data){
		
		return	$this->db->insert($table, $data);
	}

	public function login($data){
		$this->db->select('*');
		$this->db->from('users');
		//$this->db->group_start();
		$this->db->where('type','admin');
		//$this->db->where('username',$data['username']);		
		$this->db->where('email',$data['username']);
		//$this->db->group_end();
		$this->db->where('password',md5($data['password']));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		}
	}
	/*public function VendorAdd($data)
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
	}*/
	/*public function getVendorByID($id)
	{
		return $this->getRowData('vendors','*',array('id'=>$id));
	}*/
	public function VendorUpdate($data,$id)
	{
		return $this->updateData('vendors',$data,array('id'=>$id));
	}
	public function VendorDelete($id)
	{
		return $this->deleteData('vendors',array('id'=>$id));
	}
	public function rowsCount($table,$column,$where) 
    {
        $this->db->select($column);
        if($where){
            $this->db->where($where);
        }        
        $query = $this->db->get($table);
        return $query->num_rows();   
    }

    public function ParentCategoryList()
	{
		$this->db->select('users.full_name as username,main_category.*');
		$this->db->from('main_category');
		$this->db->join('users','users.id = main_category.created_by','left');
		if($this->session->userdata('user_type')=='vendor' ){
			$this->db->where('main_category.created_by',$this->session->userdata('user_id'));
		}
		$this ->db->order_by("FIELD(main_category.status,'pending','active','reject')");
		return $this->db->get()->result();
	}
	
	public function CategoryList()
	{
		$this->db->select('users.full_name as username,category.id,category.category_name,category.status,main_category.category_name as main_category,category.created_at');
		$this->db->from('category');
		$this->db->join('users','users.id = category.created_by','left');
		$this->db->join('main_category','main_category.id = category.main_category_id');
		if($this->session->userdata('user_type')=='vendor' ){
			$this->db->where('category.created_by',$this->session->userdata('user_id'));
		}
		$this ->db->order_by("FIELD(category.status,'pending','active','reject')");
		return $this->db->get()->result();
	}
	public function SubCategoryList($id=null)
	{
		$this->db->select('users.full_name as username,subcategory.*,category.category_name');
		$this->db->from('subcategory');
		$this->db->join('category','category.id = subcategory.category_id','left');
		$this->db->join('users','users.id = subcategory.created_by','left');
		if($this->session->userdata('user_type')=='vendor' ){
				$this->db->where('subcategory.created_by',$this->session->userdata('user_id'));
		}
		$this ->db->order_by("FIELD(subcategory.status,'pending','active','reject')");
		
		return $this->db->get()->result();
	}
	public function ManufacturerList()
	{
		$this->db->select('users.full_name as username,manufacturer.*');
		$this->db->from('manufacturer');
		$this->db->join('users','users.id = manufacturer.created_by','left');
		if($this->session->userdata('user_type')=='vendor' ){
			$this->db->where('manufacturer.created_by',$this->session->userdata('user_id'));
		}
		$this ->db->order_by("FIELD(manufacturer.status,'pending','active','reject')");
		return $this->db->get()->result();
	}
	public function ProducFormList()
	{
		$this->db->select('users.full_name as username,product_form.*');
		$this->db->from('product_form');
		$this->db->join('users','users.id = product_form.created_by','left');
		if($this->session->userdata('user_type')=='vendor' ){
			$this->db->where('product_form.created_by',$this->session->userdata('user_id'));
		}
		$this ->db->order_by("FIELD(product_form.status,'pending,active,reject')");
		return $this->db->get()->result();
	}
	public function brandList()
	{
		$this->db->select('users.full_name as username,brand.*');
		$this->db->from('brand');
		$this->db->join('users','users.id = brand.created_by','left');
		if($this->session->userdata('user_type')=='vendor' ){
			$this->db->where('brand.created_by',$this->session->userdata('user_id'));
		}
		// $this ->db->order_by("FIELD(brand.status,'pending','active','reject')");
		return $this->db->get()->result();
	}
	public function saltCompositionList()
	{
		$this->db->select('users.full_name as username,saltcomposition.*');
		$this->db->from('saltcomposition');
		$this->db->join('users','users.id = saltcomposition.created_by','left');
		if($this->session->userdata('user_type')=='vendor' ){
			$this->db->where('saltcomposition.created_by',$this->session->userdata('user_id'));
		}
		// $this ->db->order_by("FIELD(saltComposition.status,'pending','active','reject')");
		return $this->db->get()->result();
	}
	public function GetAllOrders($status)
	{
		$this->db->select('users. full_name,users.mobile,orders.created_at,orders.status, orders.order_number,orders.id as order_id');
		$this->db->from('orders');
		if (!empty($status)) {
			$this->db->where('orders.status',$status);
		}
		$this->db->join('users','users.id = orders.user_id');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
	}
	public function OrderView($id)
	{
		$this->db->select('orders.*,orders.id as order_id,user_address.*,(select sum(subtotal) from order_item where order_id=orders.id) as order_subtotal');
		$this->db->from('orders');
		$this->db->where('orders.id',$id);
		$this->db->join('user_address','user_address.id = orders.address_id');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$data = (array) $query->row();
			$this->db->select('order_item.*,product.name as product_name,(select product_images.image from product_images where product_id = product.id) as product_image');
			$this->db->from('order_item');
			$this->db->join('product_item','product_item.id = order_item.item_id');
			$this->db->join('product','product.id = product_item.product_id');
			$this->db->where('order_id',$data['order_id']);
			$data['item'] = $this->db->get()->result();
		}
		return $data;
	}
}

?>