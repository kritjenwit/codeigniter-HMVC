<?php 

class Readme extends MY_Controller{
    public function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('readme');
    }
}