<?php
class User_model extends MY_model
{
	
	public function insertdb($table,$data){
		
		return	$this->db->insert($table, $data);
	}

	public function HomeProduct()
	{
		$this->db->select('category_name,category.id');
		$this->db->from('category');
		$this->db->where('category.status','active');
		$this->db->join('subcategory','subcategory.category_id = category.id');
		$this->db->join('product','product.category_id = subcategory.id');
		$this->db->group_by('category.id');
		$this->db->limit('5');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result = $query->result();
			foreach ($result as $key => $value) {
				$return[$key]['category_id'] = $value->id;
				$return[$key]['category_name'] = $value->category_name;
				$this->db->select('product.name,product.id as product_id,image,sale_price,product_form.name as product_form');
				$this->db->from('product');
				$this->db->join('product_images','product_images.product_id = product.id','left');
				$this->db->join('product_item','product_item.product_id = product.id');
				$this->db->join('product_form','product_form.id = product.product_form_id','left');
				$this->db->limit(8);
				$query_product = $this->db->get();
				if ($query_product->num_rows() > 0) {
					$return[$key]['category_product'] = $query_product->result();
				}
			}
			return $return;
		}
	}
	public function getAllProductWithLimit($offset,$limit)
	{
		$this->db->select('product.name as product_name,LEFT(product.about_product,50) as about_product,product_images.image as product_image,product_item.sale_price, product_item.offerprice,product.id as product_id');
		$this->db->from('product');
		$this->db->join('product_images','product_images.product_id = product.id','left');
		$this->db->join('product_item','product_item.product_id = product.id');
		if (!empty($this->input->post('product_form'))) {
			$this->db->group_start();
			$this->db->where_in('product_form_id',$this->input->post('product_form'));
			$this->db->group_end();
		}
		if (!empty($this->input->post('brand_id'))) {
			$this->db->group_start();
			$this->db->where_in('brand_id',$this->input->post('brand_id'));
			$this->db->group_end();
		}
		if (!empty($this->input->post('product_category_id'))) {
			$this->db->group_start();
			$this->db->where_in('category_id',$this->input->post('product_category_id'));
			$this->db->group_end();
		}
		if (!empty($this->input->post('discount'))) {
			
			foreach ($this->input->post('discount') as $key => $value) {
				$explode = explode('-',$value);
				$this->db->or_group_start();
				$this->db->or_where('offerprice >= '.$explode[0].' and offerprice <='.$explode[1]);
				$this->db->group_end();
			}
			
		}
		
		$this->db->limit($limit,$offset);
		if (!empty($this->input->post('sortby')) && $this->input->post('sortby')=='lowest') {
			$this->db->order_by('sale_price','asc');
		}
		elseif (!empty($this->input->post('sortby')) && $this->input->post('sortby')=='highest') {
			$this->db->order_by('sale_price','desc');
		}
		elseif (!empty($this->input->post('sortby')) && $this->input->post('sortby')=='newest') {
			$this->db->order_by('product.id','desc');
		}
		else{
			$this->db->order_by('product.id','desc');
		}
		$query = $this->db->get();
		//echo $this->db->last_query(); 
		return $query->result();

	}
	public function getAllProduct()
	{
		$this->db->select('product.id as product_id');
		$this->db->from('product');
		$this->db->join('product_images','product_images.product_id = product.id','left');
		$this->db->join('product_item','product_item.product_id = product.id');
		if (!empty($this->input->post('product_form'))) {
			$this->db->group_start();
			$this->db->where_in('product_form_id',$this->input->post('product_form'));
			$this->db->group_end();
		}
		if (!empty($this->input->post('brand_id'))) {
			$this->db->group_start();
			$this->db->where_in('brand_id',$this->input->post('brand_id'));
			$this->db->group_end();
		}
		if (!empty($this->input->post('product_category_id'))) {
			$this->db->group_start();
			$this->db->where_in('category_id',$this->input->post('product_category_id'));
			$this->db->group_end();
		}
		if (!empty($this->input->post('discount'))) {
			
			foreach ($this->input->post('discount') as $key => $value) {
				$explode = explode('-',$value);
				$this->db->or_group_start();
				$this->db->or_where('offerprice >= '.$explode[0].' and offerprice <='.$explode[1]);
				$this->db->group_end();
			}
			
		}
		$query = $this->db->get();
		return $query->num_rows();

	}
	public function getProductByID($id)
	{
		$this->db->select('product.*,brand.brand_name,brand.status,manufacturer.name as manufacturer_name,manufacturer.status,category.category_name,category.status,subcategory.subcategory,subcategory.status,product_form.name as product_form,saltcomposition.name as saltcomposition_name, product_form.status,product_item.*');
		$this->db->from('product');
		$this->db->join('product_item','product_item.product_id = product.id');		
		$this->db->join('product_form','product_form.id = product.product_form_id','left');
		$this->db->join('manufacturer','manufacturer.id = product.manufacturer_id','left');
		$this->db->join('saltcomposition','saltcomposition.id = product.salt_composition_id','left');
		$this->db->join('category','category.id = product.category_id','left');
		$this->db->join('subcategory','subcategory.id = product.sucategory_id','left');
		$this->db->join('brand','brand.id = product.brand_id','left');
		$this->db->where('product.id',$id);		
		$query = $this->db->get();
		$result['product'] = $query->row();			

		$this->db->select('product.id,product_images.image');
		$this->db->from('product_images');
		$this->db->join('product','product_images.product_id = product.id');
		$this->db->where('product_images.product_id',$id);		
		$query = $this->db->get();
		$result['product_images'] = $query->result();			

		$this->db->select('question.id,question.question,question.answer');
		$this->db->from('question');		
		$this->db->where('question.product_id',$id);		
		$query = $this->db->get();
		$result['question'] = $query->result();			

		if ($query->num_rows() > 0) {
			return $result;
		}
	}
	public function getAllProductComments($id)
	{
		$this->db->select('product_comment.comments,product_comment.comment_date,users.full_name, users.image');
		$this->db->from('product_comment');
		$this->db->join('users','users.id = product_comment.user_id','left');		
		$this->db->where('product_comment.product_id',$id);		
		$query = $this->db->get();		
		if ($query->num_rows() > 0) {
			echo json_encode(array('status'=>1,'data'=>$query->result()));			
		}		
	}
	public function getAlternateBrandsByID()
	{					
		$this->db->select('product.name,product.id as product_id,image,sale_price,product_form.name as product_form');
		$this->db->from('product');
		$this->db->join('product_images','product_images.product_id = product.id','left');
		$this->db->join('product_item','product_item.product_id = product.id');
		$this->db->join('product_form','product_form.id = product.product_form_id','left');
		$this->db->group_by('product.id');
		$this->db->limit(8);
		$query_product = $this->db->get();
		if ($query_product->num_rows() > 0) {
			$return = $query_product->result();
			return $return;
		}
	}
	public function getCategoryData()
	{	

		$this->db->select('main_category.id as main_category_id, main_category.category_name as main_category_name');		
		$this->db->from('main_category');
		$this->db->where('main_category.status','active');
		$this->db->join('category','category.main_category_id = main_category.id');		
		$this->db->group_by('main_category.id');		
		//$this->db->limit('8');
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$result = $query->result();		

			foreach ($result as $key => $value) {
				// $return[$key]['main_category_id'] = $value->main_category_id;
				// $return[$key]['category_name'] = $value->category_name;
				$return[$key] = (array)$value;
				$this->db->select('category.id as category_id, category.category_name');				
				$this->db->from('category');
				$this->db->where('main_category_id',$value->main_category_id);
				// $this->db->limit(8);
				$query_product = $this->db->get();
				if ($query_product->num_rows() > 0) {
					$return[$key]['sub_category'] = $query_product->result();
					
					foreach ($return[$key]['sub_category'] as $key1 => $value1) {
						// $return[$key]['main_category_id'] = $value->main_category_id;
						// $return[$key]['category_name'] = $value->category_name;
						$return[$key]['sub_category'] = (array)$value1;
						$this->db->select('subcategory.id as nested_category_id, subcategory.subcategory as nested_category_name');				
						$this->db->from('subcategory');
						$this->db->where('category_id',$value1->category_id);
						// $this->db->limit(8);
						$query_product1 = $this->db->get();
						if ($query_product1->num_rows() > 0) {
							$return[$key]['sub_category']['nested_category'][$key1] = $query_product1->result();
						}
					}

				}
			}	
			// echo "<pre>";
			// print_r($return);		
			// exit();
			return $return;
		}			
	}

	public function orderList()
	{
		$this->db->select('order_number,created_at,delivery_date,status,id');
		$this->db->from('orders');
		$this->db->where('user_id',$this->session->userdata('user_id'));
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}

	}
	public function OrderView($id)
	{
		$this->db->select('orders.*,orders.id as order_id,user_address.*');
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