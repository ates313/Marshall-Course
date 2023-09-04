<?php

class AdminController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index(){
        $this->load->view('admin/index');
    }

    public function login(){
        $this->load->view('admin/login');
    }

    // SLIDER START
    public function c_slider(){
        $this->load->view('admin/page/slider/c_slider');
    }

}