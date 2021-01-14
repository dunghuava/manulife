<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_M');
		$this->load->model('Staff_M');
		$this->staff_infor = $this->session->get_userdata('staff_infor');
		$this->staff_id = $this->staff_infor['staff_infor']['staff_id'];
		$this->is_admin = $this->staff_infor['staff_infor']['is_admin'];
	}

	public function index()
	{
		$this->HeaderStaff();
		if ($this->is_admin ==1) {
			$list_staff = $this->Staff_M->all(['is_admin' => 0]);
		}else{
			$list_staff = $this->Staff_M->all(['staff_curator' => $this->staff_id]);
		}

		$data['list_staff'] = $list_staff;
		$data['staff_infor'] = $this->staff_infor['staff_infor'];
		$this->load->view('crm/list_customer.php',$data);
		// $this->FooterStaff();
	}


	public function loadCustomer()
	{
		$key = $this->input->post("key");
		$staff_id = $this->input->post("staff_id");
		$customer_name = $this->input->post('customer_name');
        $customer_phone    = $this->input->post('customer_phone');
        $job    = $this->input->post('job');
        $source    = $this->input->post('source');
        $insurance    = $this->input->post('insurance');
        $key_sort    = $this->input->post('key_sort');
        $type_sort    = $this->input->post('type_sort');
		
		
		if ($this->is_admin ==1) {
			$arr_staff = '';
		}else{
			$arr_staff = array();
			array_push($arr_staff, $this->staff_id);
			$list_staff = $this->Staff_M->all(['staff_curator' => $this->staff_id]);
			if (!empty($list_staff)) {
				foreach ($list_staff as $staff) {
					array_push($arr_staff, $staff['staff_id']);
				}
			}
		}
		
		

		for ($i=0; $i <11 ; $i++) { 
			$list_customer_steps = $this->Customer_M->getSearchCustomer($staff_id,$customer_name,$customer_phone,$job,$source,$insurance,$key_sort,$type_sort,$arr_staff,$i);
			$data['list_customer_'.$i]   = $list_customer_steps;
			$data['count_steps_'.$i]   = count($list_customer_steps);
		}

		$data['key']   = $key;
		$this->load->view('crm/load_customer.php',$data);
	}


	public function add()
	{


		if ($this->is_admin ==1) {
			$list_staff = $this->Staff_M->all(['is_admin' => 0]);
		}else{
			$list_staff = $this->Staff_M->all(['staff_curator' => $this->staff_id]);
		}

		$data['list_staff'] = $list_staff;
		$data['staff_infor'] = $this->staff_infor['staff_infor'];
		$this->HeaderStaff();
		$this->load->view('crm/add_customer.php',$data);
		// $this->FooterStaff();
	}


	public function edit($id)
	{

		$info_customer = $this->Customer_M->find_row(['customer_id' => $id]);

		if ($this->is_admin ==1) {
			$list_staff = $this->Staff_M->all(['is_admin' => 0]);
		}else{
			$list_staff = $this->Staff_M->all(['staff_curator' => $this->staff_id]);
		}
		$data['info_customer']=$info_customer;
		$data['list_staff'] = $list_staff;
		$data['staff_infor'] = $this->staff_infor['staff_infor'];
		$this->HeaderStaff();
		$this->load->view('crm/edit_customer.php',$data);
		// $this->FooterStaff();
	}


	public function addCustomerAjax()
	{
		$post = $this->input->post();

		if ($this->input->post()) {
			$data_insert = array(
				'customer_name' => $post['customer_name'], 
				'customer_email' => $post['customer_email'], 
				'customer_phone' => $post['customer_phone'], 
				'customer_birth' => $post['customer_birth'], 
				'customer_address' => $post['customer_address'], 
				'need' => $post['need'], 
				'commission_level' => $post['commission_level'], 
				'job' => $post['job'], 
				'interests' => $post['interests'], 
				'note' => $post['note'], 
				'insurance' => $post['insurance'], 
				'source' => $post['source'], 
				'marriage' => $post['marriage'], 
				'info_relatives' => $post['info_relatives'], 
				'amount_insurance' => $post['amount_insurance'], 
				'insurance_name' => $post['insurance_name'], 
				'processing_steps' => $post['processing_steps'],
				'staff_id' => $post['staff_id'],
			);

			$this->Customer_M->create($data_insert);
		}
	}


	public function updateCustomerAjax()
	{
		$post = $this->input->post();

		if ($this->input->post()) {
			$data_update = array(
				'customer_name' => $post['customer_name'], 
				'customer_email' => $post['customer_email'], 
				'customer_phone' => $post['customer_phone'], 
				'customer_birth' => $post['customer_birth'], 
				'customer_address' => $post['customer_address'], 
				'need' => $post['need'], 
				'commission_level' => $post['commission_level'], 
				'job' => $post['job'], 
				'interests' => $post['interests'], 
				'note' => $post['note'], 
				'insurance' => $post['insurance'], 
				'source' => $post['source'], 
				'marriage' => $post['marriage'], 
				'info_relatives' => $post['info_relatives'], 
				'amount_insurance' => $post['amount_insurance'], 
				'insurance_name' => $post['insurance_name'], 
				'processing_steps' => $post['processing_steps'],
				'staff_id' => $post['staff_id'],

			);

			$this->Customer_M->update(['customer_id'=>$post['customer_id']],$data_update);
		}
	}

	public function update(){
		$post = $this->input->post();
		$this->Customer_M->update(['customer_id'=>$post['customer_id']],$post);
	}

	public function destroy()
	{
		$customer_id = $this->input->post('customer_id');
		$this->Customer_M->delete(['customer_id' => $customer_id]);
	}
}

/* End of file Post.php */
/* Location: ./application/controllers/admin/Post.php */