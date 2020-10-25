<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends MY_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Category_M');
        $this->load->model('Slide_M');
    }
    public function index(){
        $this->page_header();
        $this->view('web/index');
        $this->page_footer();
    }
    public function category(){
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
    public function tinttucDetail(){
        $this->page_header();
        $this->view('web/tin-tuc-detail');
        $this->page_footer();
    }
}