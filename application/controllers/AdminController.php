<?php

class AdminController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
    }

    public function index()
    {
        $this->load->view('admin/index');
    }

    public function login()
    {
        $this->load->view('admin/login');
    }




    // SLIDER START

    public function c_slider()
    {
        $this->load->view('admin/page/slider/c_slider');
    }

    public function l_slider()
    {
        $data['slider_get_list'] = $this->AdminModel->slider_get_list();
        $this->load->view('admin/page/slider/l_slider', $data);
    }

    public function c_slider_act()
    {

        $slider_title = $_POST['slider_title'];
        $slider_link = $_POST['slider_link'];
        $slider_desc = $_POST['slider_desc'];
        $slider_status = $_POST['slider_status'];



        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        // $this->upload->initialize($config);

        if ($this->upload->do_upload('slider_img')) {
            $upload_slider_img = $this->upload->data();

            $data = [
                's_title' => $slider_title,
                's_link' => $slider_link,
                's_desc' => $slider_desc,
                's_status' => $slider_status,
                's_img' => $upload_slider_img['file_name'],
                's_date' => date("Y-m-d H:i:s"),
                // 's_id' => ""
            ];

            $this->db->insert('slider', $data);
            redirect(base_url('l_slider'));
        } else {
            $data = [
                's_title' => $slider_title,
                's_link' => $slider_link,
                's_desc' => $slider_desc,
                's_status' => $slider_status,
                's_date' => date("Y-m-d H:i:s"),
                // 's_id' => ""
            ];

            $this->AdminModel->slider_insert($data);
            redirect(base_url('l_slider'));
        }
    }

    public function e_slider($s_id)
    {
        $data['slider_get_list_rw'] = $this->AdminModel->slider_get_list_rw($s_id);
        $this->load->view('admin/page/slider/e_slider', $data);
    }



    public function e_slider_act($s_id)
    {
        $slider_title = $_POST['slider_title'];
        $slider_link = $_POST['slider_link'];
        $slider_desc = $_POST['slider_desc'];
        $slider_status = $_POST['slider_status'];

        // print_r('<pre>');
        // print_r($slider_desc);
        // die();

        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        // $this->upload->initialize($config);

        if ($this->upload->do_upload('slider_img')) {
            $upload_slider_img = $this->upload->data();

            $data = [
                's_title' => $slider_title,
                's_link' => $slider_link,
                's_desc' => $slider_desc,
                's_status' => $slider_status,
                's_img' => $upload_slider_img['file_name'],
                's_date' => date("Y-m-d H:i:s"),
                // 's_id' => ""
            ];

            $this->AdminModel->update_slider($s_id, $data);
            redirect(base_url('l_slider'));
        } else {
            $data = [
                's_title' => $slider_title,
                's_link' => $slider_link,
                's_desc' => $slider_desc,
                's_status' => $slider_status,
                's_date' => date("Y-m-d H:i:s"),
                // 's_id' => "" 
            ];
            $this->AdminModel->update_slider($s_id, $data);
            redirect(base_url('l_slider'));
        }
    }

    public function d_slider($s_id)
    {
        $this->AdminModel->delete_slider($s_id);
        redirect(base_url('l_slider'));
    }



    // Course start

    public function c_course()
    {
        $this->load->view('admin/page/course/c_course');
        // echo 'Hello';
    }

    public function l_course()
    {
        $data['course_get_list'] = $this->AdminModel->course_get_list();
        $this->load->view('admin/page/course/l_course', $data);
    }

    public function c_course_act()
    {

        $course_status = $_POST['course_status'];
        $course_month = $_POST['course_month'];
        $course_title = $_POST['course_title'];
        $course_price = $_POST['course_price'];
        $course_desc = $_POST['course_desc'];


        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('course_img')) {
            $upload_course_img = $this->upload->data();

            $data = [
                'c_title' => $course_title,
                'c_month' => $course_month,
                'c_desc' => $course_desc,
                'c_price' => $course_price,
                'c_status' => $course_status,
                'c_img' => $upload_course_img['file_name'],
                'c_date' => date("Y-m-d H:i:s")
            ];

            $this->db->insert('course', $data);
            redirect(base_url('l_course'));
        } else {
            $data = [
                'c_title' => $course_title,
                'c_month' => $course_month,
                'c_desc' => $course_desc,
                'c_price' => $course_price,
                'c_status' => $course_status,
                'c_date' => date("Y-m-d H:i:s")
            ];

            $this->AdminModel->course_insert($data);
            redirect(base_url('l_course'));
        }
    }

    public function e_course($c_id){
        $data['course_get_list_rw'] = $this->AdminModel->course_get_list_rw($c_id);
        $this->load->view('admin/page/course/e_course', $data);
    }

    public function e_course_act($c_id){
        $course_status = $_POST['course_status'];
        $course_month = $_POST['course_month'];
        $course_title = $_POST['course_title'];
        $course_price = $_POST['course_price'];
        $course_desc = $_POST['course_desc'];


        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('course_img')) {
            $upload_course_img = $this->upload->data();

            $data = [
                'c_title' => $course_title,
                'c_month' => $course_month,
                'c_desc' => $course_desc,
                'c_price' => $course_price,
                'c_status' => $course_status,
                'c_img' => $upload_course_img['file_name'],
                'c_date' => date("Y-m-d H:i:s")
            ];

            $this->AdminModel->update_course($c_id, $data);
            redirect(base_url('l_course'));
        } else {
            $data = [
                'c_title' => $course_title,
                'c_month' => $course_month,
                'c_desc' => $course_desc,
                'c_price' => $course_price, 
                'c_status' => $course_status,
                'c_date' => date("Y-m-d H:i:s")
            ];

            $this->AdminModel->update_course($c_id, $data);
            redirect(base_url('l_course'));
        }

    }

    public function d_course($c_id)
    {
        $this->AdminModel->delete_course($c_id);
        redirect(base_url('l_course'));
    }
}
