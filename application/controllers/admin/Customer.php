<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends MY_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_M');
	}

	public function index($offset = 1)
	{
		$data['page_name']='Danh sách khách hàng';
		$data['page_menu']='customer';
		$list_customer = $this->Customer_M->all();

		$config['base_url']    = base_url().'admin/customer/index';
        $config['uri_segment'] = 4;
        $config['per_page']    = 20;
        $count      = count($list_customer);
        $config['total_rows']       = $count ;
        $total_rows                 = CEIL($config['total_rows']/$config['per_page']);
        $config['use_page_numbers'] = TRUE;
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="#">';
        $config['cur_tag_close']    = '</a></li>';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '>';
        $config['prev_link']        = '<';
        $config['first_tag_open']   = '<li>';
        $config['first_tag_close']  = '</li>';
        $config['last_tag_open']    = '<li>';
        $config['last_tag_close']   = '</li>';
        $config['last_link']        = 'Last';
        $config['first_link']       = 'First';
        $this->pagination->initialize($config);
        $pagination = $this->pagination->create_links();
        
        $off      = ($offset - 1) * $config['per_page'];
        $list_all = array_slice($list_customer,$off, $config['per_page']);

        $data['count']          = $count;
        $data['pagination']     = $pagination;
        $data['total_rows']     = $total_rows;
        $data['offset']         = $offset;
        $data['list_customer']   = $list_all;
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
        $list_customer = $this->Customer_M->getSearchCustomer($customer_name,$insurance_name,$customer_phone,$commission_level);

        $data['list_customer'] = $list_customer;
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
			);

			$this->Customer_M->create($data_insert);

			$status = array(
				'code'=>'success',
				'message'=>'Đã lưu'
			);
			$this->session->set_flashdata('reponse',$status);
			redirect(base_url('admin/customer/'),'location');

		}

		$data['page_name']='Thêm khách hàng';
		$data['page_menu']='customer';
		$this->getHeader($data);
		$this->load->view('admin/pages/customer/add.php',$data);
		$this->getFooter();
	}

	public function loadDetails()
	{
		$customer_id = $this->input->post('customer_id');
		$info_customer = $this->Customer_M->find_row(['customer_id' => $customer_id]);

		
		$data['info_customer']=$info_customer;
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
		$post_id = $this->input->post('post_id');
		$this->Post_M->delete(['post_id' => $post_id]);
		$status = array(
				'code'=>'success',
				'message'=>'Đã xóa'
			);
		$this->session->set_flashdata('reponse',$status);
	}

	public function get_option_category($cate_module_id=0){
		$where['cate_parent_id']=0;
		if ($cate_module_id!=0){
			$where['cate_module_id']=$cate_module_id;
		}
		$oder_by= 'asc';
		$all = $this->Category_M->all($where,$oder_by);
		$str='';
		foreach ($all as $val){
			$str.='<option value="'.$val['cate_id'].'">'.$val['cate_title'].'</option>';
			$sub1 = $this->Category_M->all(['cate_parent_id'=>$val['cate_id']],$oder_by);
			if (count($sub1) >0){
				foreach ($sub1 as $val1){
					$str.='<option value="'.$val1['cate_id'].'">|__'.$val1['cate_title'].'</option>';
					$sub2 = $this->Category_M->all(['cate_parent_id'=>$val1['cate_id']],$oder_by);
					if (count($sub2) >0){
						foreach ($sub2 as $val2){
							$str.='<option value="'.$val2['cate_id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|__'.$val2['cate_title'].'</option>';
							$sub3 = $this->Category_M->all(['cate_parent_id'=>$val2['cate_id']],$oder_by);
							if (count($sub3) >0){
								foreach ($sub3 as $val3){
									$str.='<option value="'.$val3['cate_id'].'">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|__'.$val3['cate_title'].'</option>';
									$sub4 = $this->Category_M->all(['cate_parent_id'=>$val3['cate_id']],$oder_by);
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