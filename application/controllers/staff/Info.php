<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('Staff_M');
		$this->staff_infor = $this->session->get_userdata('staff_infor');
		$this->staff_id = $this->staff_infor['staff_infor']['staff_id'];

	}
	public function index(){
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

			if ($post['staff_active'] == '') {
				$post['staff_active'] = 0;
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
				'staff_active' => $post['staff_active'], 
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
			redirect(base_url('staff/info'),'location');
		}



		$_data['page_name']='Chỉnh sửa thông tin cá nhân';
		$_data['page_menu']='info';

		$_data['info_staff']=$info_staff;
		$this->getHeaderStaff($_data);
		$this->load->view('staff/pages/info/index.php',$_data);
		$this->getFooterStaff();
	}

}

/* End of file account.php */
/* Location: ./application/controllers/admin/account.php */