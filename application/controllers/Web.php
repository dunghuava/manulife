<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Web_M');
        $this->load->model('Category_M');
        $this->load->model('Slide_M');
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
        $this->page_header();
        $this->view('web/index');
        $this->page_footer();
    }
    public function product($category=null){
        $data['category']=$category;
        $this->page_header();
        $this->view('web/category',$data);
        $this->page_footer();
    }
    public function service($category=null){
        $data['category']=$category;
        $this->page_header();
        $this->view('web/service',$data);
        $this->page_footer();
    }
    public function contact(){
        $this->page_header();
        $this->view('web/contact');
        $this->page_footer();
    }
    public function aboutUs(){
        $this->page_header();
        $this->view('web/about-us');
        $this->page_footer();
    }
    public function tintuc_detail($alias=null){
        $id = getID($alias);
        $data['post']=$this->Post_M->find_row(['post_id'=>$id]);
        
        $this->page_header();
        $this->view('web/tin-tuc-detail',$data);
        $this->page_footer();
    }
    public function dichvu_detail($alias=null){
        $id = getID($alias);
        $data['category']=$this->Category_M->find_row(['cate_id'=>$id]);
        $data['service']=$this->Post_M->all(['post_category_id'=>$id,'post_active'=>1]);
        $this->page_header();
        $this->view('web/dichvu-detail',$data);
        $this->page_footer();
    }
    public function product_detail($alias=null){
        $id = getID($alias);
        $data['product']=$this->Product_M->find_row(['product_id'=>$id]);
        $this->page_header();
        $this->view('web/product-detail',$data);
        $this->page_footer();
    }
    public function tintuc($category=array()){      
        $data['category']=$category;
        $this->page_header();
        $this->view('web/tin-tuc',$data);
        $this->page_footer();
    }
}