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
            'title'=>'Bảo hiểm Manucare Việt Nam',
        );

        $data['seo'] = $seo;
        $data['list_post'] = $this->Post_M->getListPost_byCategory(1,4);
        $data['list_service'] = $this->Post_M->getListPost_byCategory(2,6);
        $data['list_brands'] = $this->Other_M->all(['other_category_id'=>31]);
        $this->page_header($seo);
        $this->view('web/index',$data);
        $this->page_footer();
    }
    public function product($category=null){
        
        if ($category['cate_parent_id']==0) {
            $list_product = $this->Product_M->all(['product_active'=>1],'desc');
        }else{
            $list_product = $this->Product_M->all(['product_active'=>1,'product_category_id'=>$category['cate_id']],'desc');
        }
        
        $seo = array(
            'title'=>$category['cate_title'],
            'description'=>strip_tags($category['cate_description']),
            'image'=>$category['cate_img']
        );

        $data['seo'] = $seo;
        $data['list_product']=$list_product;
        $data['category']=$category;
        $this->page_header($seo);
        $this->view('web/list_product',$data);
        $this->page_footer();
    }


    public function page_search(){
        
        $input_search = $this->input->get('input_search');
        $cate_id = $this->input->get('type');
        $category = $this->Category_M->find_row(['cate_id'=>$cate_id]);

        $list_product = $this->Product_M->searchProduct($cate_id,$input_search);

        
        $seo = array(
            'title'=>$category['cate_title'],
            'description'=>strip_tags($category['cate_description']),
            'image'=>$category['cate_img']
        );

        $data['seo'] = $seo;
        $data['list_product']=$list_product;
        $data['category']=$category;
        $this->page_header($seo);
        $this->view('web/list_product',$data);
        $this->page_footer();
    }

    public function service($category=null){
        if ($category['cate_parent_id']==0) {
            $list_service = $this->Post_M->all(['post_active'=>1,'post_type'=>2],'desc');
        }else{
            $list_service = $this->Post_M->all(['post_active'=>1,'post_category_id'=>$category['cate_id'],'post_type'=>2],'desc');
        }
        
        $seo = array(
            'title'=>$category['cate_title'],
            'description'=>strip_tags($category['cate_description']),
            'image'=>$category['cate_img']
        );
        
        $data['seo'] = $seo;
        $data['category']=$category;
        $data['list_service']=$list_service;
        $this->page_header($seo);
        $this->view('web/service',$data);
        $this->page_footer();
    }


    public function list_brand($id=null){
        if ($id == null) {
            $seo = array(
                'title'=>'Danh sách các thương hiệu',
                'description'=>'',
                'image'=>''
            );

            $data['seo'] = $seo;
            $data['list_brands'] = $this->Other_M->all(['other_category_id'=>31]);
            $this->page_header($seo);
            $this->view('web/list_brand.php',$data);
            $this->page_footer();
        }else{
            $info_brand = $this->Other_M->find(['other_id'=>$id]);
            $seo = array(
                'title'=>$info_brand['other_title'],
                'description'=>$info_brand['other_description'],
                'image'=>$info_brand['other_img'],
            );

            $data['seo'] = $seo;
            $data['info_brand'] = $info_brand;
            $this->page_header($seo);
            $this->view('web/brand_detail.php',$data);
            $this->page_footer();
        }
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
        $data['post']=$this->Post_M->find_row(['post_id'=>$id]);

        $seo = array(
            'title'=>$data['post']['post_title'],
            'description'=>strip_tags($data['post']['post_description']),
            'image'=>$data['post']['post_img']
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

        if ($category['cate_parent_id']==0) {
            $list_post = $this->Post_M->all(['post_active'=>1,'post_type'=>1,'post_date_time <='=>date("YmdH")],'desc');
        }else{
            $list_post = $this->Post_M->all(['post_active'=>1,'post_category_id'=>$category['cate_id'],'post_type'=>1,'post_date_time <='=>date("YmdH")],'desc');
        }      
        

        $seo = array(
            'title'=>$category['cate_title'],
            'description'=>strip_tags($category['cate_description']),
            'image'=>$category['cate_img']
        );
        
        $data['seo'] = $seo;
        $data['category']=$category;
        $data['list_post']=$list_post;

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