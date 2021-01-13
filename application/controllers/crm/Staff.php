<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('Staff_M');
		$this->staff_infor = $this->session->get_userdata('staff_infor');
		$this->staff_id = $this->staff_infor['staff_infor']['staff_id'];
		$this->is_admin = $this->staff_infor['staff_infor']['is_admin'];

	}
	public function info(){
		$info_staff = $this->Staff_M->find_row(['staff_id'=>$this->staff_id]);

		$post = $this->input->post();
		if ($this->input->post()) {
			if (!empty($_FILES['staff_img']['name'])){
				$file = $_FILES['staff_img'];
				$filename = time().$file['name'];
				$path='upload/images/'.$filename;
				move_uploaded_file($file['tmp_name'],$path);
				@unlink('upload/images/'.$info_staff['staff_img']);

			}else{
				$filename = $info_staff['staff_img'];
			}

			if ($post['staff_password'] != '') {
				$password = md5($post['staff_password']);
			}else{
				$password = $info_staff['staff_password'];
			}

			
			$data_update = array(
				'staff_name' => $post['staff_name'], 
				'staff_position' => $post['staff_position'], 
				'staff_phone' => $post['staff_phone'], 
				'subdomain' => $post['subdomain'], 
				'staff_email' => $post['staff_email'], 
				'staff_password' => $password, 
				'staff_img' => $filename, 
			);
			
			

			$this->Staff_M->update(['staff_id' => $this->staff_id],$data_update);
			$status = array(
				'code'=>'success',
				'message'=>'Đã sửa'
			);

			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('crm/staff/info'),'location');
		}


		$_data['info_staff']=$info_staff;
		$this->HeaderStaff($_data);
		$this->load->view('crm/info_staff.php',$_data);
	}



	public function edit($id){
		$info_staff = $this->Staff_M->find_row(['staff_id'=>$id]);

		$post = $this->input->post();
		if ($this->input->post()) {
			if (!empty($_FILES['staff_img']['name'])){
				$file = $_FILES['staff_img'];
				$filename = time().$file['name'];
				$path='upload/images/'.$filename;
				move_uploaded_file($file['tmp_name'],$path);
				@unlink('upload/images/'.$info_staff['staff_img']);

			}else{
				$filename = $info_staff['staff_img'];
			}

			if ($post['staff_password'] != '') {
				$password = md5($post['staff_password']);
			}else{
				$password = $info_staff['staff_password'];
			}

			
			$data_update = array(
				'staff_name' => $post['staff_name'], 
				'staff_position' => $post['staff_position'], 
				'staff_phone' => $post['staff_phone'], 
				'subdomain' => $post['subdomain'], 
				'staff_email' => $post['staff_email'], 
				'staff_password' => $password, 
				'staff_img' => $filename, 
			);
			
			

			$this->Staff_M->update(['staff_id' => $id],$data_update);
			$status = array(
				'code'=>'success',
				'message'=>'Đã sửa'
			);

			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('crm/staff'),'location');
		}


		$_data['info_staff']=$info_staff;
		$this->HeaderStaff($_data);
		$this->load->view('crm/edit_staff.php',$_data);
	}

	public function add()
	{
		$post = $this->input->post();
		if ($this->input->post()) {

			if (isset($_FILES['staff_img']['name'])){
				$file = $_FILES['staff_img'];
				$filename = time().$file['name'];
				$path='upload/images/'.$filename;
				move_uploaded_file($file['tmp_name'],$path);
			}


			$data_insert = array(
				'staff_name' => $post['staff_name'], 
				'staff_position' => $post['staff_position'], 
				'staff_phone' => $post['staff_phone'], 
				'subdomain' => $post['subdomain'], 
				'staff_email' => $post['staff_email'], 
				'staff_password' => md5($post['staff_password']), 
				'staff_img' => $filename, 
				'staff_curator' => $this->staff_id, 
			);
			

			$this->Staff_M->create($data_insert);
			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu'
			);

			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('crm/staff'),'location');
		}


		$this->HeaderStaff();
		$this->load->view('crm/add_staff.php');
	}


	public function index()
	{

		if ($this->is_admin ==1) {
			$list_staff = $this->Staff_M->all(['is_admin' => 0]);
		}else{
			$list_staff = $this->Staff_M->all(['staff_curator' => $this->staff_id]);
		}

		$_data['list_staff']=$list_staff;
		$this->HeaderStaff();
		$this->load->view('crm/list_staff.php',$_data);
	}

	public function check_staff_username()
	{
		$staff_email = $this->input->post('staff_email');
		$staff_id = $this->input->post('staff_id');
		$check = $this->Staff_M->Check_Username($staff_email,$staff_id);

		if (count($check) >0) {
			echo "exist";
		}else{
			echo "ok";
		}
	}

	public function destroy()
	{
		$staff_id = $this->input->post('staff_id');
		$this->Staff_M->delete(['staff_id' => $staff_id]);
		$status = array(
				'code'=>'success',
				'message'=>'Đã xóa'
			);
		$this->session->set_flashdata('reponse',$status);
	}

}

/* End of file account.php */
/* Location: ./application/controllers/admin/account.php */