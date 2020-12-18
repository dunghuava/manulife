<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_M');
		$this->load->model('Staff_M');
	}

	public function index($offset = 1)
	{
		$data['page_name']='Danh sách khách hàng';
		$data['page_menu']='customer';
		$arr_customer = array();

		for ($i=0; $i <11 ; $i++) { 
			$list_customer_steps = $this->Customer_M->listCustomerbyStaff('',$i);
			array_push($arr_customer, count($list_customer_steps));
			$data['count_steps_'.$i]   = count($list_customer_steps);
		}

        $data['max_item']        = max($arr_customer);

		$this->getHeader($data);
		$this->load->view('admin/pages/customer/index.php',$data);
		$this->getFooter();
	}



	public function search($offset = 1)
	{
		$customer_name = $this->input->post('customer_name');
        $insurance_name    = $this->input->post('insurance_name');
        $commission_level    = $this->input->post('commission_level');
        $customer_phone    = $this->input->post('customer_phone');
        $arr_customer = array();

		for ($i=0; $i <11 ; $i++) { 
			$list_customer_steps = $this->Customer_M->getSearchCustomer($customer_name,$insurance_name,$customer_phone,$commission_level,'',$i);
			array_push($arr_customer, count($list_customer_steps));
			$data['count_steps_'.$i]   = count($list_customer_steps);
		}

        $data['max_item']        = max($arr_customer);

        $data['customer_name']   = $customer_name;
        $data['insurance_name']   = $insurance_name;
        $data['commission_level']   = $commission_level;
        $data['customer_phone']   = $customer_phone;
        $this->load->view('admin/pages/customer/search.php',$data);
	}

	public function add()
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

			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/customer/'),'location');

		}

		$list_staff = $this->Staff_M->all();
		$data['list_staff'] = $list_staff;
		$data['page_name']='Thêm khách hàng';
		$data['page_menu']='customer';
		$this->getHeader($data);
		$this->load->view('admin/pages/customer/add.php',$data);
		$this->getFooter();
	}


	public function edit($id)
	{
		$info_customer = $this->Customer_M->find_row(['customer_id' => $id]);
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

			$this->Customer_M->update(['customer_id'=>$id],$data_update);

			$status = array(
				'code'=>'success',
				'message'=>'Đã sửa'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/customer/'),'location');
		}

		$data['info_customer']=$info_customer;
		$list_staff = $this->Staff_M->all();
		$data['list_staff'] = $list_staff;
		$data['page_name']='Chỉnh sửa khách hàng';
		$data['page_menu']='customer';
		$this->getHeader($data);
		$this->load->view('admin/pages/customer/edit.php',$data);
		$this->getFooter();
	}



	public function loadDetails()
	{
		$customer_id = $this->input->post('customer_id');
		$info_customer = $this->Customer_M->find_row(['customer_id' => $customer_id]);

		
		$data['info_customer']=$info_customer;
		$list_staff = $this->Staff_M->all();
		$data['list_staff'] = $list_staff;
		$this->load->view('admin/pages/customer/load_details.php',$data);
	}

	public function updateDetails()
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
		$status = array(
				'code'=>'success',
				'message'=>'Đã xóa'
			);
		$this->session->set_flashdata('reponse',$status);
	}

}

/* End of file Post.php */
/* Location: ./application/controllers/admin/Post.php */