<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product_M extends MY_model {
	protected $table = 'db_product';
	protected $key   = 'product_id';

	public function searchProduct($cate_id,$input_search)
	{
		$this->db->select('*');
		$this->db->where("product_active",1);
		$this->db->where("product_category_id ",$cate_id);
		$this->db->like("product_title ",$input_search);
		$this->db->order_by("product_id", "desc");
		return $this->db->get($this->table)->result_array();
	}

}

/* End of file Account_M.php */
/* Location: ./application/models/admin/Account_M.php */