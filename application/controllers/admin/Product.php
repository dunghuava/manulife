<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Product_M');
		$this->load->model('Category_M');
		$this->load->model('Other_M');
	}

	public function index()
	{
		$data['page_name']='Danh sản phẩm';
		$data['page_menu']='product';
		$data['list_product']=$this->Product_M->all();
		$this->getHeader($data);
		$this->load->view('admin/pages/product/index.php',$data);
		$this->getFooter();
	}

	public function add()
	{

		$post = $this->input->post();

		if ($this->input->post()) {
			if (isset($_FILES['product_img']['name'])){
				$file_img = $_FILES['product_img'];
				$filename_img = time().$file_img['name'];
				$path='upload/images/'.$filename_img;
				move_uploaded_file($file_img['tmp_name'],$path);
			}


			if (isset($_FILES['product_banner']['name'])){
				$file_banner = $_FILES['product_banner'];
				$filename_banner = time().$file_banner['name'];
				$path='upload/images/'.$filename_banner;
				move_uploaded_file($file_banner['tmp_name'],$path);
			}


			if ($post['product_active'] == '') {
				$post['product_active'] = 0;
			}


			$data_insert = array(
				'product_category_id' => $post['product_category_id'], 
				'product_title' => $post['product_title'], 
				'product_alias' => $post['product_alias'], 
				'product_description' => $post['product_description'], 
				'product_content' => $post['product_content'], 
				'product_keyword' => $post['product_keyword'], 
				'product_highlights' => 0, 
				'product_active' => $post['product_active'], 
				'product_img' => $filename_img, 
				'product_banner' => $filename_banner, 
				'product_benefits' => implode(',', $post['product_benefits']), 
			);

			$this->Product_M->create($data_insert);

			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/product/add/'),'location');

		}
		
		$list_category = $this->get_option_category(2);
		$list_benefits = $this->Other_M->all(['other_category_id' => 7]);

		// print_r($list_category);die();
		$data['list_category'] = $list_category;
		$data['list_benefits'] = $list_benefits;
		$data['page_name']='Thêm sản phẩm';
		$data['page_menu']='product';
		$this->getHeader($data);
		$this->load->view('admin/pages/product/add.php',$data);
		$this->getFooter();
	}

	public function edit($id)
	{
		$info_product = $this->Product_M->find_row(['product_id' => $id]);

		$post = $this->input->post();

		if ($this->input->post()) {
			if (!empty($_FILES['product_img']['name'])){
				$file_img = $_FILES['product_img'];
				$filename_img = time().$file_img['name'];
				$path='upload/images/'.$filename_img;
				move_uploaded_file($file_img['tmp_name'],$path);
				@unlink('upload/images/'.$info_post['product_img']);

			}else{
				$filename_img = $info_product['product_img'];
			}


			if (!empty($_FILES['product_banner']['name'])){
				$file_banner = $_FILES['product_banner'];
				$filename_banner = time().$file_banner['name'];
				$path='upload/images/'.$filename_banner;
				move_uploaded_file($file_banner['tmp_name'],$path);
				@unlink('upload/images/'.$info_post['product_banner']);

			}else{
				$filename_banner = $info_product['product_banner'];
			}


			if ($post['product_active'] == '') {
				$post['product_active'] = 0;
			}

			$data_update = array(
				'product_category_id' => $post['product_category_id'], 
				'product_title' => $post['product_title'], 
				'product_alias' => $post['product_alias'], 
				'product_description' => $post['product_description'], 
				'product_content' => $post['product_content'], 
				'product_keyword' => $post['product_keyword'], 
				'product_active' => $post['product_active'], 
				'product_img' => $filename_img, 
				'product_banner' => $filename_banner, 
				'product_benefits' => implode(',', $post['product_benefits']), 
			);

			$this->Product_M->update(['product_id' => $id],$data_update);

			$status = array(
				'code'=>'success',
				'message'=>'Đã sửa'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/product/edit/'.$id),'location');

		}

		$list_category = $this->get_option_category(2);
		$list_benefits = $this->Other_M->all(['other_category_id' => 7]);
		$data['list_benefits'] = $list_benefits;
		$data['list_category'] = $list_category;
		$data['info_product'] = $info_product;
		$data['page_name']='Chỉnh sửa sản phẩm';
		$data['page_menu']='product';
		$this->getHeader($data);
		$this->load->view('admin/pages/product/edit.php',$data);
		$this->getFooter();
	}

	public function update(){
		$post = $this->input->post();
		$this->Product_M->update(['product_id'=>$post['product_id']],$post);
	}

	public function destroy()
	{
		$product_id = $this->input->post('product_id');
		$this->Product_M->delete(['product_id' => $product_id]);
		$status = array(
				'code'=>'success',
				'message'=>'Đã xóa'
			);
		$this->session->set_flashdata('reponse',$status);
	}

	public function get_option_category($cate_module_id=0){
		$where['cate_parent_id']=0;
		// if ($cate_module_id!=0){
		// 	$where['cate_module_id']=$cate_module_id;
		// }
		$oder_by= 'asc';
		$all = $this->Category_M->all($where,$oder_by);
		$str='';
		foreach ($all as $val){
			if ($val['cate_module_id'] == $cate_module_id) {
				$str.='<option value="'.$val['cate_id'].'">'.$val['cate_title'].'</option>';
			}
			
			$sub1 = $this->Category_M->all(['cate_parent_id'=>$val['cate_id'],'cate_module_id'=> $cate_module_id],$oder_by);
			// echo'<pre>';
			// print_r($sub1);
			if (count($sub1) >0){
				foreach ($sub1 as $val1){
					$str.='<option value="'.$val1['cate_id'].'">|__'.$val1['cate_title'].'</option>';
					$sub2 = $this->Category_M->all(['cate_parent_id'=>$val1['cate_id'],'cate_module_id'=> $cate_module_id],$oder_by);
					if (count($sub2) >0){
						foreach ($sub2 as $val2){
							$str.='<option value="'.$val2['cate_id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|__'.$val2['cate_title'].'</option>';
							$sub3 = $this->Category_M->all(['cate_parent_id'=>$val2['cate_id'],'cate_module_id'=> $cate_module_id],$oder_by);
							if (count($sub3) >0){
								foreach ($sub3 as $val3){
									$str.='<option value="'.$val3['cate_id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|__'.$val3['cate_title'].'</option>';
									$sub4 = $this->Category_M->all(['cate_parent_id'=>$val3['cate_id'],'cate_module_id'=> $cate_module_id],$oder_by);
									if (count($sub4) >0){
										foreach ($sub4 as $val4){
											$str.='<option value="'.$val4['cate_id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|__'.$val4['cate_title'].'</option>';
										}
									}
								}
							}
						}
					}
				}
			}
		}
		return $str;
	}

}

/* End of file Post.php */
/* Location: ./application/controllers/admin/Post.php */