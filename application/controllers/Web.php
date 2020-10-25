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
}