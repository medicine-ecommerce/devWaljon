<?php
class User_model extends MY_model
{
	
	public function insertdb($table,$data){
		
		return	$this->db->insert($table, $data);
	}

	public function HomeProduct()
	{
		$this->db->select('category_name,id');
		$this->db->from('category');
		$this->db->where('status','active');
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

		$this->db->select('product.name as product_name,product.about_product,product_images.image as product_image,product_item.sale_price,product_item.offerprice,product.id as product_id');
		$this->db->from('product');
		$this->db->join('product_images','product_images.product_id = product.id');
		$this->db->join('product_item','product_item.product_id = product.id');
		$this->db->limit($offset,$limit);
		$query = $this->db->get();
		echo $this->db->last_query();
		return $query->result();

	}
	public function getAllProduct()
	{
		$this->db->select('product.name as product_name,product.about_product,product_images.image as product_image,product_item.sale_price,product_item.offerprice,product.id as product_id');
		$this->db->from('product');
		$this->db->join('product_images','product_images.product_id = product.id');
		$this->db->join('product_item','product_item.product_id = product.id');
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
		$this->db->limit(8);
		$query_product = $this->db->get();
		if ($query_product->num_rows() > 0) {
			$return = $query_product->result();
			return $return;
		}
	}



}