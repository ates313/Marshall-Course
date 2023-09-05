<?php

class AdminController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
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

    public function l_slider(){
        $data['slider_get_list'] = $this->AdminModel->slider_get_list();
        $this->load->view('admin/page/slider/l_slider', $data);
    }

    public function c_slider_act(){

        $slider_title = $_POST['slider_title'];
        $slider_link = $_POST['slider_link'];
        $slider_desc = $_POST['slider_desc'];

        $data =[
            's_title' => $slider_title,
            's_link' => $slider_link,
            's_desc' => $slider_desc
        ];

        $this->AdminModel->slider_insert($data);
        redirect(base_url('l_slider'));
    }

    // public function e_slider($s_id){
    //     $this->load->view('')
    // }

}