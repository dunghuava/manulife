<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Account_M');
		$this->load->model('Setting_M');
		$this->load->model('Info_M');
		$this->load->model('Contact_M');
	}
	public function page_header($seo=null){
		$data['seo'] = $seo;
		$data['info'] = $this->Info_M->all();
		$this->load->view('web/header.php',$data);
	}
	public function page_footer($data=null){
		$data['info'] = $this->Info_M->all();
		$this->load->view('web/footer.php',$data);
	}
	public function view($view,$data=null){
		$this->load->view($view,$data);
	}
	public function getHeader($data=null){
		if (!$this->session->has_userdata('admin_infor')){
			redirect(base_url('admin/login'),'location');
		}
		$this->admin_infor = $this->session->get_userdata('admin_infor');
		$data['admin_infor']=$this->admin_infor['admin_infor'];
		$data['setting']=$this->Setting_M->find(['setting_id'=>1]);
		$this->load->view('admin/header.php',$data);
	}
	public function getFooter(){
		$this->load->view('admin/footer.php');
		$this->load->view('admin/script.php');
	}
	public function getHeaderUser($data=null){
		if (!$this->session->has_userdata('user_data')){
			redirect(base_url('dang-nhap'),'location');
		}
		$this->user_infor = $this->session->get_userdata('user_data');
		$data['user_infor']=$this->user_infor['user_data'];
		$data['setting']=$this->Setting_M->find(['setting_id'=>1]);
		$this->load->view('user/header.php',$data);
	}


	public function getHeaderStaff($data=null){
		if (!$this->session->has_userdata('staff_infor')){
			redirect(base_url('staff/login'),'location');
		}
		$this->staff_infor = $this->session->get_userdata('staff_infor');
		$data['staff_infor']=$this->staff_infor['staff_infor'];
		$data['setting']=$this->Setting_M->find(['setting_id'=>1]);
		$this->load->view('staff/header.php',$data);
	}
	public function getFooterStaff(){
		$this->load->view('staff/footer.php');
		$this->load->view('staff/script.php');
	}


	public function HeaderStaff($data=null){

		if (!$this->session->has_userdata('staff_infor')){
			redirect(base_url('crm/login'),'location');
		}
		$this->staff_infor = $this->session->get_userdata('staff_infor');
		$data['staff_infor']=$this->staff_infor['staff_infor'];
		$this->load->view('crm/header.php',$data);
	}
	// public function FooterStaff(){
	// 	$this->load->view('crm/footer.php');
	// 	// $this->load->view('staff/script.php');
	// }



	function do_upload($userfile)
	{		
		$dir='./upload/img/';
		unlink($dir.$_POST['old_file']);
		if(isset($_FILES[$userfile])){
			$file = $_FILES[$userfile]['name'];
			$file_name = md5($file);
			$file_upload = $dir.$file_name;
			if (move_uploaded_file($_FILES[$userfile]['tmp_name'],$file_upload)){
				return $file_name;
			}
			return false;
		}
	}
	function q($sql){
		return $this->Account_M->query($sql);
	}

}

/* End of file MY_Controller.php */
/* Location: ./application/controllers/MY_Controller.php */