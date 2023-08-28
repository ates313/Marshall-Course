<?php

class UserController extends CI_Controller{

    public function index(){
        $this->load->view('user/index');
    }

    public function about(){
        $this->load->view('user/about');
    }



}