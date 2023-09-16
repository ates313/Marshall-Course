<?php

class UserController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('UserModel');
    }

    public function index()
    {
        // $data['contact_get_list'] = $this->UserModel->get_contact();
        $data['slider_get_list'] = $this->UserModel->get_slider();
        $data['course_get_list'] = $this->UserModel->get_course();
        $data['news_get_list'] = $this->UserModel->news_course();
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $this->load->view('user/index', $data);
    }

    public function about()
    {
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $this->load->view('user/about', $data);
    }

    public function contact()
    {
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $this->load->view('user/contact', $data);
    }

    public function teachers()
    {
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $this->load->view('user/teachers', $data);
    }

    public function courseGrid2()
    {
        $data['course_get_list'] = $this->UserModel->get_course();
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $this->load->view('user/courseGrid2', $data);
    }
}
