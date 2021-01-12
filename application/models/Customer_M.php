<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_M extends MY_model {
	protected $table = 'db_customer';

	public function getSearchCustomer($customer_name,$insurance_name,$customer_phone,$commission_level,$arr_staff,$steps)
	{
		$this->db->select("*");
		if($arr_staff != '') $this->db->where_in('staff_id',$arr_staff);
		if($customer_name != '') $this->db->like("customer_name",$customer_name);
		if($insurance_name != '') $this->db->like("insurance_name",$insurance_name);
		if($customer_phone != '') $this->db->like('customer_phone', $customer_phone);
		if($commission_level != '') $this->db->like('commission_level', $commission_level);
		$this->db->where('processing_steps',$steps);
		$this->db->order_by('updated_at');
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