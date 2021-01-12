<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
		$this->load->model('Staff_M');

	}

	public function login()
	{
		if ($this->session->has_userdata('staff_infor')){
			redirect(base_url('crm/customer'),'location');
		}
		$post = $this->input->post();
		if ($post){
			$staff_email = $post['staff_email'];
			$staff_password = md5($post['staff_password']);
			if (isset($post['btn_do_login'])){
				$is_login = $this->Staff_M->CheckLogin($staff_email,$staff_password);
				if ($is_login){
					$infor = $this->Staff_M->all(['staff_email'=>$staff_email,'staff_active'=>'1']);
					// print_r($infor);die();
					$this->session->set_userdata('staff_infor', $infor[0] );
					redirect(base_url('crm/customer'),'location');
				}else{
					$this->session->set_flashdata('reponse','Tên đăng nhập hoặc mật khẩu không đúng.');
				}
			}
		}
		$this->load->view('crm/login');
	}
	
	public function logout(){
		$this->session->unset_userdata('staff_infor');
		redirect(base_url().'crm/login','location');
	}

}

/* End of file account.php */
/* Location: ./application/controllers/admin/account.php */