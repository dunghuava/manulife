<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Web_M');
        $this->load->model('Category_M');
        $this->load->model('Other_M');
        $this->load->model('Post_M');
        $this->load->model('Product_M');
    }
    public function route($alias=null){
        $category = $this->Category_M->find_row(['cate_alias'=>$alias]);
        if(!empty($alias) || !empty($category)){
            switch($category['cate_module_id']){
                case 1: $this->tintuc($category);break;
                case 2: $this->product($category);break;
                case 3: $this->service($category);break;
                case 4: $this->aboutUs();break;
                case 5: $this->contact($category);break;
                default: $this->index();break;
            }
        }else{
            $this->index();
        }
    }
    public function index(){
        $seo = array(
            'title'=>'Bảo hiểm Manulife Việt Nam',
        );

        $data['seo'] = $seo;
        $this->page_header($seo);
        $this->view('web/index');
        $this->page_footer();
    }
    public function product($category=null){
        $data['category']=$category;
        $seo = array(
            'title'=>$category['cate_title'],
            'description'=>strip_tags($category['cate_description']),
            'image'=>$category['cate_img']
        );

        $data['seo'] = $seo;
        $this->page_header($seo);
        $this->view('web/category',$data);
        $this->page_footer();
    }
    public function service($category=null){
        $data['category']=$category;
        $seo = array(
            'title'=>$category['cate_title'],
            'description'=>strip_tags($category['cate_description']),
            'image'=>$category['cate_img']
        );
        
        $data['seo'] = $seo;
        $this->page_header($seo);
        $this->view('web/service',$data);
        $this->page_footer();
    }
    public function contact(){
        $seo = array(
            'title'=>'Liên hệ tư vấn',
        );
        
        $data['seo'] = $seo;
        $this->page_header($seo);
        $this->view('web/contact');
        $this->page_footer();
    }
    public function aboutUs(){
        $seo = array(
            'title'=>'Về chúng tôi',
        );
        
        $data['seo'] = $seo;
        $this->page_header($seo);
        $this->view('web/about-us');
        $this->page_footer();
    }
    public function tintuc_detail($alias=null){
        $id = getID($alias);
        $data['post']=$this->Post_M->find_row(['post_id'=>$id]);
        
        $seo = array(
            'title'=>$data['post']['post_title'],
            'description'=>strip_tags($data['post']['post_description']),
            'image'=>$data['post']['post_img']
        );
        
        $data['seo'] = $seo;

        $this->page_header($seo);
        $this->view('web/tin-tuc-detail',$data);
        $this->page_footer();
    }
    public function dichvu_detail($alias=null){
        $id = getID($alias);
        $data['category']=$this->Category_M->find_row(['cate_id'=>$id]);
        $data['service']=$this->Post_M->all(['post_category_id'=>$id,'post_active'=>1]);

        $seo = array(
            'title'=>$data['category']['cate_title'],
            'description'=>strip_tags($data['category']['cate_description']),
            'image'=>$data['category']['cate_img']
        );
        
        $data['seo'] = $seo;

        $this->page_header($seo);
        $this->view('web/dichvu-detail',$data);
        $this->page_footer();
    }
    public function product_detail($alias=null){
        $id = getID($alias);
        $data['product']=$this->Product_M->find_row(['product_id'=>$id]);

        $seo = array(
            'title'=>$data['product']['product_title'],
            'description'=>strip_tags($data['product']['product_description']),
            'image'=>$data['product']['product_img']
        );
        
        $data['seo'] = $seo;

        $this->page_header($seo);
        $this->view('web/product-detail',$data);
        $this->page_footer();
    }
    public function tintuc($category=array()){      
        $data['category']=$category;

        $seo = array(
            'title'=>$category['cate_title'],
            'description'=>strip_tags($category['cate_description']),
            'image'=>$category['cate_img']
        );
        
        $data['seo'] = $seo;

        $this->page_header($seo);
        $this->view('web/tin-tuc',$data);
        $this->page_footer();
    }


    public function addContact()
    {
        $post = $this->input->post();

        $data_insert = array(
            'contact_name' => $post['contact_name'],
            'contact_phone' => $post['contact_phone'], 
            'contact_email' => $post['contact_email'], 
            'contact_info' => $post['contact_info'], 
            'contact_title' => $post['contact_title'], 
            'contact_to_staff' => $post['contact_to_staff'], 
            'contact_status' => 0, 
            
        );

        $this->Contact_M->create($data_insert);
    }
}