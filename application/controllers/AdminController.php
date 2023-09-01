<?php

class AdminController extends CI_Controller{

    public function index(){
        $this->load->view('admin/index');
    }

    public function login(){
        $this->load->view('admin/login');
    }


}