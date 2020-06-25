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
}