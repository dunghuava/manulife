<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Info_M');
		
	}

	public function index()
	{
		$data['page_name']='Danh sách thông tin';
		$data['page_menu']='info';
		$data['list_domain']=$this->Info_M->all();
		$this->getHeader($data);
		$this->load->view('admin/pages/info/index.php',$data);
		$this->getFooter();
	}

	public function add()
	{

		// $this->protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		// $this->url = $this->protocol . $_SERVER['HTTP_HOST']; 
		// $this->domain = substr($this->url,7); 
		// print_r($this->domain);die();
		$data['page_name']='Thêm thông tin';
		$data['page_menu']='info';

		// $info = $this->Info_M->find_row(['info_id' => '1']);
		$post = $this->input->post();
		if ($this->input->post()) {
			if (!empty($_FILES['logo_img']['name'])){
				$file_logo = $_FILES['logo_img'];
				$name_logo = md5($file_logo['name'].time());
				$path_logo='upload/images/'.$name_logo;
				move_uploaded_file($file_logo['tmp_name'],$path_logo);
			}


			if (!empty($_FILES['icon_img']['name'])){
				$file_icon = $_FILES['icon_img'];
				$name_icon = md5($file_icon['name'].time());
				$path_icon='upload/images/'.$name_icon;
				move_uploaded_file($file_icon['tmp_name'],$path_icon);
				
			}

			$data_insert = array(
				'domain_name' => $post['domain_name'], 
				'company' => $post['company'], 
				'address' => $post['address'], 
				'twitter' => $post['twitter'], 
				'facebook' => $post['facebook'], 
				'google' => $post['google'], 
				'youtube' => $post['youtube'], 
				'instagram' => $post['instagram'], 
				'email' => $post['email'], 
				'coppy_right' => $post['coppy_right'], 
				'phone' => $post['phone'], 
				'logo_img' => $name_logo, 
				'icon_img' => $name_icon, 
				
			);


			
			$this->Info_M->create($data_insert);
			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu'
			);
			

			
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/info/'),'location');

		}
		// $data['info'] = $info;
		$this->getHeader($data);
		$this->load->view('admin/pages/info/add.php',$data);
		$this->getFooter();
	}


	public function edit($id)
	{

		// $this->protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
		// $this->url = $this->protocol . $_SERVER['HTTP_HOST']; 
		// $this->domain = substr($this->url,7); 
		// print_r($this->domain);die();
		$data['page_name']='Chỉnh sửa thông tin';
		$data['page_menu']='info';

		$info = $this->Info_M->find_row(['info_id' => $id]);
		$post = $this->input->post();
		if ($this->input->post()) {
			if (!empty($_FILES['logo_img']['name'])){
				$file_logo = $_FILES['logo_img'];
				$name_logo = md5($file_logo['name'].time());
				$path_logo='upload/images/'.$name_logo;
				move_uploaded_file($file_logo['tmp_name'],$path_logo);
				@unlink('upload/images/'.$info['logo_img']);
			}else{
				$name_logo = $info['logo_img'];
			}


			if (!empty($_FILES['icon_img']['name'])){
				$file_icon = $_FILES['icon_img'];
				$name_icon = md5($file_icon['name'].time());
				$path_icon='upload/images/'.$name_icon;
				move_uploaded_file($file_icon['tmp_name'],$path_icon);
				@unlink('upload/images/'.$info['icon_img']);
			}else{
				$name_icon = $info['icon_img'];
			}

			

			$data_update = array(
				'domain_name' => $post['domain_name'], 
				'company' => $post['company'], 
				'address' => $post['address'], 
				'twitter' => $post['twitter'], 
				'facebook' => $post['facebook'], 
				'google' => $post['google'], 
				'youtube' => $post['youtube'], 
				'instagram' => $post['instagram'], 
				'email' => $post['email'], 
				'coppy_right' => $post['coppy_right'], 
				'phone' => $post['phone'], 
				'logo_img' => $name_logo, 
				'icon_img' => $name_icon, 
				
			);


			
			$this->Info_M->update(['info_id' => $info['info_id']],$data_update);
			$status = array(
				'code'=>'success',
				'message'=>'Đã sửa'
			);
			

			
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/info/'),'location');

		}
		$data['info'] = $info;
		$this->getHeader($data);
		$this->load->view('admin/pages/info/edit.php',$data);
		$this->getFooter();
	}

	
	public function destroyDomain()
	{
		$info_id = $this->input->post('info_id');
		$this->Info_M->delete(['info_id' => $info_id]);
		$status = array(
				'code'=>'success',
				'message'=>'Đã xóa'
			);
		$this->session->set_flashdata('reponse',$status);
	}


	

}

/* End of file Post.php */
/* Location: ./application/controllers/admin/Post.php */