<?php

class UserController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $this->load->view('user/index');
    }

    public function about(){
        $this->load->view('user/about');
    }

    public function contact(){
        $this->load->view('user/contact');
    }

    public function teachers(){
        $this->load->view('user/teachers');
    }

    public function courseGrid2(){
        $this->load->view('user/courseGrid2');
    }



}