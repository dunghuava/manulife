<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_M extends MY_model {
	protected $table = 'db_customer';

	public function getSearchCustomer($staff_id,$customer_name,$customer_phone,$job,$source,$insurance,$key_sort,$type_sort,$arr_staff,$steps)
	{
		$this->db->select("*");
		if ($staff_id !='') {
			$this->db->where('staff_id',$staff_id);
		}else{
			if($arr_staff != '') $this->db->where_in('staff_id',$arr_staff);
		}
		
		if($customer_name != '') $this->db->like("customer_name",$customer_name);
		if($customer_phone != '') $this->db->like("customer_phone",$customer_phone);
		if($job != '') $this->db->like('job', $job);
		if($source != '') $this->db->like('source', $source);
		if($insurance != '') $this->db->like('insurance', $insurance);
		$this->db->where('processing_steps',$steps);
		if ($key_sort !='' && $type_sort != '') {

			if ($key_sort == 'updated_at' && $type_sort == 'desc') {
				$this->db->order_by('updated_at','asc');
			}else if ($key_sort == 'updated_at' && $type_sort == 'asc'){
				$this->db->order_by('updated_at','desc');
			}else{
				$this->db->order_by($key_sort,$type_sort);
			}
			
		}
		$this->db->order_by('updated_at','desc');
		return $this->db->get($this->table)->result_array();
	}


	public function listCustomerbyStaff($arr_staff,$steps)
	{
		$this->db->select("*");
		if($arr_staff != '')$this->db->where_in('staff_id',$arr_staff);
		$this->db->where('processing_steps',$steps);
		$this->db->order_by('updated_at','desc');
		return $this->db->get($this->table)->result_array();
	}

	
}

/* End of file Account_M.php */
/* Location: ./application/models/admin/Account_M.php */