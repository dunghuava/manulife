<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Other extends MY_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Other_M');
	}
	public function index()
	{
        $data['page_name']='Nội dung khác';
		$data['page_menu']='other';
		if (isset($_GET['filter'])){
			$data['filter']=$_GET['filter'];
		}
		if (isset($data['filter']) && $data['filter']>0){
			$data['list_content']=$this->Other_M->all(['other_id'=>$data['filter']]);
		}else{
			$data['list_content']=$this->Other_M->all(['other_category_id'=>0]);
		}

		// print_r($data['list_content']);die();
		$this->getHeader($data);
		$this->load->view('admin/pages/other/index.php',$data);
		$this->getFooter();
	}
	public function add()
	{
        $data['page_name']='Thêm nội dung';
		$data['page_menu']='other';
		$data['cate']=$this->Other_M->all(['other_category_id'=>0]);
		$post = $this->input->post();

		if ($this->input->post()) {
			if (!empty($_FILES['other_img']['name'])){
				$file = $_FILES['other_img'];
				$filename = time().$file['name'];
				$path='upload/images/'.$filename;
				move_uploaded_file($file['tmp_name'],$path);
			}else{
				$filename = '';
			}

			if ($post['other_active'] == '') {
				$post['other_active'] = 0;
			}


			$data_insert = array(
				'other_title' => $post['other_title'], 
				'other_description' => $post['other_description'], 
				'other_content' => $post['other_content'], 
				'other_active' => $post['other_active'], 
				'other_category_id' => $post['other_category_id'], 
				'other_url' => $post['other_url'],
				'other_img' => $filename, 
			);


			$this->Other_M->create($data_insert);

			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/other/'),'location');

		}

		$this->getHeader($data);
		$this->load->view('admin/pages/other/add.php',$data);
		$this->getFooter();
	}
	function edit($id=0){
        $data['page_name']='Chỉnh sửa nội dung';
		$data['page_menu']='other';
		$data['cate']=$this->Other_M->all(['other_category_id'=>0]);
		$data['info_other']=$this->Other_M->find_row(['other_id'=>$id]);
		$post = $this->input->post();

		if ($this->input->post()) {
			if (!empty($_FILES['other_img']['name'])){
				$file = $_FILES['other_img'];
				$filename = time().$file['name'];
				$path='upload/images/'.$filename;
				move_uploaded_file($file['tmp_name'],$path);
			}else{
				$filename = $data['info_other']['other_img'];
			}

			if ($post['other_active'] == '') {
				$post['other_active'] = 0;
			}


			$data_update = array(
				'other_title' => $post['other_title'], 
				'other_description' => $post['other_description'], 
				'other_content' => $post['other_content'], 
				'other_active' => $post['other_active'], 
				'other_category_id' => $post['other_category_id'], 
				'other_url' => $post['other_url'],
				'other_img' => $filename, 
			);


			$this->Other_M->update(['other_id' => $id],$data_update);

			$status = array(
				'code'=>'success',
				'message'=>'Đã sửa'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/other/'),'location');

		}

		$this->getHeader($data);
		$this->load->view('admin/pages/other/edit.php',$data);
		$this->getFooter();
	}
	public function destroy(){
		$this->Other_M->delete(['other_id'=>$this->input->post('other_id')]);
	}
	public function update(){
		$post = $this->input->post();
		$this->Other_M->update(['other_id'=>$post['other_id']],$post);
	}
}
