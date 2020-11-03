<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Web_M');
        $this->load->model('Category_M');
        $this->load->model('Slide_M');
    }
    public function route($alias=null){
        $category = $this->Category_M->find_row(['cate_alias'=>$alias]);
        if(!empty($alias) || !empty($category)){
            switch($category['cate_module_id']){
                case 1: $this->tintuc($category);break;
                case 2: $this->product($category);break;
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
    public function product($alias=null){
        $this->page_header();
        $this->view('web/category');
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
    public function tintucDetail(){
        $this->page_header();
        $this->view('web/tin-tuc-detail');
        $this->page_footer();
    }
    public function tintuc($category=array()){        
        $this->page_header();
        $this->view('web/tin-tuc',$category);
        $this->page_footer();
    }
}