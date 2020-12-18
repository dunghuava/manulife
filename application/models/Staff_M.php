<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff_M extends MY_model {
	protected $table = 'db_staff';
	protected $key   = 'staff_id';

	public function Check_Username($staff_email,$staff_id)
	{
		$this->db->select('*');
		if ($staff_id!='')$this->db->where('staff_id !=',$staff_id);
		$this->db->where('staff_email',$staff_email);
		return $this->db->get($this->table)->result_array();
	}

	public function CheckLogin($staff_email,$staff_password){
		$this->db->where(['staff_email'=>$staff_email,'staff_password'=>$staff_password,'staff_active'=>1]);
		$row = $this->db->get($this->table)->num_rows();
		if ($row==1){
			return true;
		}
		return false;
	}

}

/* End of file Account_M.php */
/* Location: ./application/models/admin/Account_M.php */