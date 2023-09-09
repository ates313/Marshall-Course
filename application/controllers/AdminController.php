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
                's_img' => $upload_slider_img['file_name'],
                's_date' => date("Y-m-d H:i:s"),
                's_id' => ""
            ];

            $this->db->insert('slider', $data);
            redirect(base_url('l_slider'));
        } else {
            $data = [
                's_title' => $slider_title,
                's_link' => $slider_link,
                's_desc' => $slider_desc,
                's_date' => date("Y-m-d H:i:s"),
                's_id' => ""
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
}
