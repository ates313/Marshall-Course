<?php

class UserController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index(){
        // $data['contact_get_list'] = $this->UserModel->get_contact();
        $data['slider_get_list'] = $this->UserModel->get_slider();
        $this->load->view('user/index', $data);
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