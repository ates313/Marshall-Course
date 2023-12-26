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
        $data['cn_contact_list'] = $this->AdminModel->admin();
        $this->load->view('admin/index', $data);
    }

    public function login()
    {
        $this->load->view('admin/login');
    }

    public function login_action()
    {

        $username = $_POST['username'];
        $password = $_POST['password'];

        // print_r($password);
        // die();

        if (!empty($username) && !empty($password)) {
            $data = [
                'admin_name' => $username,
                'admin_password' => md5($password),
            ];

            $data = $this->security->xss_clean($data);

            $checkUser = $this->db->select('admin_id')->where($data)->get("admin_login")->row_array();

            $_SESSION['admin_id'] =  $checkUser['admin_id'];

            redirect(base_url('admin'));
        }
    }

    public function logOut()
    {
        unset($_SESSION['admin_id']);
        $this->session->set_flashdata('success', 'Sizi bir daha gozleyeceyik!');
        redirect(base_url("login"));
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


        // print_r('<pre>');
        // print_r($slider_desc);
        // die();
        // $slider_desc = $this->input->post('',);

        if (!empty($slider_title) && !empty($slider_link) && !empty($slider_desc)) {


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
                $data = $this->security->xss_clean($data);
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
                $data = $this->security->xss_clean($data);
                $this->AdminModel->slider_insert($data);
                redirect(base_url('l_slider'));
            }
        } else {
            $this->session->set_flashdata("err", "Don't leave a gap!");
            redirect($_SERVER['HTTP_REFERER']);
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
            $data = $this->security->xss_clean($data);
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
            $data = $this->security->xss_clean($data);
            $this->AdminModel->update_slider($s_id, $data);
            redirect(base_url('l_slider'));
        }
    }

    public function d_slider($s_id)
    {
        $this->AdminModel->delete_slider($s_id);
        redirect(base_url('l_slider'));
    }



    // COURSE CARD START

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

        if (!empty($course_title) && !empty($course_month) && !empty($course_desc) && !empty($course_price)) {

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
                $data = $this->security->xss_clean($data);
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
                $data = $this->security->xss_clean($data);
                $this->AdminModel->course_insert($data);
                redirect(base_url('l_course'));
            }
        } else {
            $this->session->set_flashdata("err", "Don't leave a gap!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function e_course($c_id)
    {
        $data['course_get_list_rw'] = $this->AdminModel->course_get_list_rw($c_id);
        $this->load->view('admin/page/course/e_course', $data);
    }

    public function e_course_act($c_id)
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
            $data = $this->security->xss_clean($data);
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
            $data = $this->security->xss_clean($data);
            $this->AdminModel->update_course($c_id, $data);
            redirect(base_url('l_course'));
        }
    }

    public function d_course($c_id)
    {
        $this->AdminModel->delete_course($c_id);
        redirect(base_url('l_course'));
    }



    // NEWS START

    public function c_news()
    {
        $this->load->view('admin/page/news/c_news');
    }

    public function l_news()
    {
        $data['news_get_list'] = $this->AdminModel->news_get_list();
        $this->load->view('admin/page/news/l_news', $data);
    }

    public function c_news_act()
    {
        $news_desc = $_POST['news_desc'];
        $news_status = $_POST['news_status'];

        if (!empty($news_desc)) {

            $config['upload_path']          = './upload';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
            $config['remove_spaces']        = TRUE;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('news_img')) {
                $upload_news_img = $this->upload->data();
                $data = [
                    'n_desc' => $news_desc,
                    'n_status' => $news_status,
                    'n_img' => $upload_news_img['file_name'],
                    'n_date' => date("Y-m-d H:i:s")
                ];
                $data = $this->security->xss_clean($data);
                $this->db->insert('news', $data);
                redirect(base_url('l_news'));
            } else {
                $data = [
                    'n_desc' => $news_desc,
                    'n_status' => $news_status,
                    'n_date' => date("Y-m-d H:i:s")
                ];
                $data = $this->security->xss_clean($data);
                $this->AdminModel->news_insert($data);
                redirect(base_url('l_news'));
            }
        } else {
            $this->session->set_flashdata("err", "Don't leave a gap!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function e_news($n_id)
    {
        $data['news_get_list_rw'] = $this->AdminModel->news_get_list_rw($n_id);
        $this->load->view('admin/page/news/e_news', $data);
    }

    public function e_news_act($n_id)
    {
        $news_desc = $_POST['news_desc'];
        $news_status = $_POST['news_status'];

        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('news_img')) {
            $upload_news_img = $this->upload->data();
            $data = [
                'n_desc' => $news_desc,
                'n_status' => $news_status,
                'n_img' => $upload_news_img['file_name'],
                'n_date' => date("Y-m-d H:i:s")
            ];
            $data = $this->security->xss_clean($data);
            $this->AdminModel->update_news($n_id, $data);
            redirect(base_url('l_news'));
        } else {
            $data = [
                'n_desc' => $news_desc,
                'n_status' => $news_status,
                'n_date' => date("Y-m-d H:i:s")
            ];
            $data = $this->security->xss_clean($data);
            $this->AdminModel->update_news($n_id, $data);
            redirect(base_url('l_news'));
        }
    }

    public function d_news($n_id)
    {
        $this->AdminModel->delete_news($n_id);
        redirect(base_url('l_news'));
    }

    // Footer About start
    public function c_footer()
    {
        $this->load->view('admin/page/footerAbout/c_footer');
    }

    public function l_footer()
    {
        $data['footer_get_list'] = $this->AdminModel->footer_get_list();
        $this->load->view('admin/page/footerAbout/l_footer', $data);
    }

    public function c_footer_act()
    {
        $footer_instagram = $_POST['footer_instagram'];
        $footer_facebook = $_POST['footer_facebook'];
        $footer_tweet = $_POST['footer_tweet'];
        $footer_desc = $_POST['footer_desc'];
        $footer_status = $_POST['footer_status'];

        if (!empty($footer_desc)) {

            $data = [
                'f_instagram' => $footer_instagram,
                'f_facebook' => $footer_facebook,
                'f_tweet' => $footer_tweet,
                'f_desc' => $footer_desc,
                'f_status' => $footer_status,
                'f_date' => date('Y-m-d H:i:s')
            ];
            $data = $this->security->xss_clean($data);
            $this->AdminModel->footer_insert($data);
            redirect(base_url('l_footer'));
        } else {
            $this->session->set_flashdata("err", "Don't leave a gap!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function e_footer($f_id)
    {
        $data['footer_get_list_rw'] = $this->AdminModel->footer_get_list_rw($f_id);
        $this->load->view('admin/page/footerAbout/e_footer', $data);
    }

    public function e_footer_act($f_id)
    {
        $footer_instagram = $_POST['footer_instagram'];
        $footer_facebook = $_POST['footer_facebook'];
        $footer_tweet = $_POST['footer_tweet'];
        $footer_desc = $_POST['footer_desc'];
        $footer_status = $_POST['footer_status'];


        $data = [
            'f_instagram' => $footer_instagram,
            'f_facebook' => $footer_facebook,
            'f_tweet' => $footer_tweet,
            'f_desc' => $footer_desc,
            'f_status' => $footer_status,
            'f_date' => date('Y-m-d H:i:s')
        ];
        $data = $this->security->xss_clean($data);
        $this->AdminModel->update_footer($f_id, $data);
        redirect(base_url('l_footer'));
    }

    public function d_footer($f_id)
    {
        $this->AdminModel->delete_footer($f_id);
        redirect(base_url('l_footer'));
    }


    // Partners Start
    public function c_partners()
    {
        $this->load->view('admin/page/partners/c_partners');
    }

    public function l_partners()
    {
        $data['partners_get_list'] = $this->AdminModel->partners_get_list();
        $this->load->view('admin/page/partners/l_partners', $data);
    }

    public function c_partners_act()
    {
        $partners_title = $_POST['partners_title'];
        $partners_link = $_POST['partners_link'];
        $partners_status = $_POST['partners_status'];

        if (!empty($partners_link)) {

            $config['upload_path']          = './upload';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
            $config['remove_spaces']        = TRUE;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('partners_img')) {
                $upload_partners_img = $this->upload->data();
                $data = [
                    'p_title' => $partners_title,
                    'p_link' => $partners_link,
                    'p_status' => $partners_status,
                    'p_img' => $upload_partners_img['file_name'],
                    'p_date' => date("Y-m-d H:i:s")
                ];
                $data = $this->security->xss_clean($data);
                $this->db->insert('partners', $data);
                redirect(base_url('l_partners'));
            } else {
                $data = [
                    'p_title' => $partners_title,
                    'p_link' => $partners_link,
                    'p_status' => $partners_status,
                    'p_date' => date("Y-m-d H:i:s")
                ];
                $data = $this->security->xss_clean($data);
                $this->AdminModel->partners_insert($data);
                redirect(base_url('l_partners'));
            }
        } else {
            $this->session->set_flashdata("err", "Don't leave a gap!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function e_partners($p_id)
    {
        $data['partners_get_list_rw'] = $this->AdminModel->partners_get_list_rw($p_id);
        $this->load->view('admin/page/partners/e_partners', $data);
    }

    public function e_partners_act($p_id)
    {
        $partners_title = $_POST['partners_title'];
        $partners_link = $_POST['partners_link'];
        $partners_status = $_POST['partners_status'];

        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('partners_img')) {
            $upload_partners_img = $this->upload->data();
            $data = [
                'p_title' => $partners_title,
                'p_link' => $partners_link,
                'p_status' => $partners_status,
                'p_img' => $upload_partners_img['file_name'],
                'p_date' => date("Y-m-d H:i:s")
            ];
            $data = $this->security->xss_clean($data);
            $this->AdminModel->update_partners($p_id, $data);
            redirect(base_url('l_partners'));
        } else {
            $data = [
                'p_title' => $partners_title,
                'p_link' => $partners_link,
                'p_status' => $partners_status,
                'p_date' => date("Y-m-d H:i:s")
            ];
            $data = $this->security->xss_clean($data);
            $this->AdminModel->update_partners($p_id, $data);
            redirect(base_url('l_partners'));
        }
    }

    public function d_partners($p_id)
    {
        $this->AdminModel->delete_partners($p_id);
        redirect(base_url('l_partners'));
    }


    // About Start
    public function c_about()
    {
        $this->load->view('admin/page/about/c_about');
    }

    public function l_about()
    {
        $data['about_get_list'] = $this->AdminModel->about_get_list();
        $this->load->view('admin/page/about/l_about', $data);
    }

    public function c_about_act()
    {
        $about_title = $_POST['about_title'];
        $about_desc = $_POST['about_desc'];
        $about_status = $_POST['about_status'];

        if (!empty($about_title) && !empty($about_desc)) {

            $config['upload_path']          = './upload';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
            $config['remove_spaces']        = TRUE;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('about_img')) {
                $upload_about_img = $this->upload->data();
                $data = [
                    'a_title' => $about_title,
                    'a_desc' => $about_desc,
                    'a_status' => $about_status,
                    'a_img' => $upload_about_img['file_name'],
                    'a_date' => date("Y-m-d H:i:s")
                ];
                $data = $this->security->xss_clean($data);
                $this->db->insert('about', $data);
                redirect(base_url('l_about'));
            } else {
                $data = [
                    'a_title' => $about_title,
                    'a_desc' => $about_desc,
                    'a_status' => $about_status,
                    'a_date' => date("Y-m-d H:i:s")
                ];
                $data = $this->security->xss_clean($data);
                $this->AdminModel->about_insert($data);
                redirect(base_url('l_about'));
            }
        } else {
            $this->session->set_flashdata("err", "Don't leave a gap!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function e_about($a_id)
    {
        $data['about_get_list_rw'] = $this->AdminModel->about_get_list_rw($a_id);
        $this->load->view('admin/page/about/e_about', $data);
    }

    public function e_about_act($id)
    {
        $about_title = $_POST['about_title'];
        $about_desc = $_POST['about_desc'];
        $about_status = $_POST['about_status'];

        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('about_img')) {
            $upload_about_img = $this->upload->data();
            $data = [
                'a_title' => $about_title,
                'a_desc' => $about_desc,
                'a_status' => $about_status,
                'a_img' => $upload_about_img['file_name'],
                'a_date' => date("Y-m-d H:i:s")
            ];
            $data = $this->security->xss_clean($data);
            $this->db->update_about($id, $data);
            redirect(base_url('l_about'));
        } else {
            $data = [
                'a_title' => $about_title,
                'a_desc' => $about_desc,
                'a_status' => $about_status,
                'a_date' => date("Y-m-d H:i:s")
            ];
            $data = $this->security->xss_clean($data);
            $this->AdminModel->update_about($id, $data);
            redirect(base_url('l_about'));
        }
    }

    public function d_about($a_id)
    {
        $this->AdminModel->delete_about($a_id);
        redirect(base_url('l_about'));
    }



    // Drectoria Start
    public function c_drectoria()
    {
        $this->load->view('admin/page/drectoria/c_drectoria');
    }

    public function l_drectoria()
    {
        $data['drectoria_get_list'] = $this->AdminModel->drectoria_get_list();
        $this->load->view('admin/page/drectoria/l_drectoria', $data);
    }

    public function c_drectoria_act()
    {
        $drectoria_name = $_POST['drectoria_name'];
        $drectoria_surname = $_POST['drectoria_surname'];
        $drectoria_position = $_POST['drectoria_position'];
        $drectoria_desc = $_POST['drectoria_desc'];
        $drectoria_status = $_POST['drectoria_status'];
        $drectoria_birthday = $_POST['drectoria_birthday'];
        // sosial
        $drectoria_instagram = $_POST['drectoria_instagram'];
        $drectoria_facebook = $_POST['drectoria_facebook'];
        $drectoria_twitter = $_POST['drectoria_twitter'];
        $drectoria_gmail = $_POST['drectoria_gmail'];

        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if (!empty($drectoria_name) && !empty($drectoria_surname) && !empty($drectoria_desc)) {

            if ($this->upload->do_upload('drectoria_img')) {
                $upload_drectoria_img = $this->upload->data();
                $data = [
                    'd_name' => $drectoria_name,
                    'd_surname' => $drectoria_surname,
                    'd_position' => $drectoria_position,
                    'd_desc' => $drectoria_desc,
                    'd_status' => $drectoria_status,
                    'd_instagram' => $drectoria_instagram,
                    'd_facebook' => $drectoria_facebook,
                    'd_twitter' => $drectoria_twitter,
                    'd_gmail' => $drectoria_gmail,
                    'd_birhtday' => $drectoria_birthday,
                    'd_img' => $upload_drectoria_img['file_name'],
                    'd_date' => date("Y-m-d H:i:s")
                ];
                $data = $this->security->xss_clean($data);
                $this->db->insert('directoria', $data);
                redirect(base_url('l_drectoria'));
            } else {
                $data = [
                    'd_name' => $drectoria_name,
                    'd_surname' => $drectoria_surname,
                    'd_position' => $drectoria_position,
                    'd_desc' => $drectoria_desc,
                    'd_status' => $drectoria_status,
                    'd_instagram' => $drectoria_instagram,
                    'd_facebook' => $drectoria_facebook,
                    'd_twitter' => $drectoria_twitter,
                    'd_gmail' => $drectoria_gmail,
                    'd_birhtday' => $drectoria_birthday,
                    'd_date' => date("Y-m-d H:i:s")
                ];
                $data = $this->security->xss_clean($data);
                $this->AdminModel->drectoria_insert($data);
                redirect(base_url('l_drectoria'));
            }
        } else {
            $this->session->set_flashdata("err", "Boşluq buraxmayın!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function e_drectoria($d_id)
    {
        $data['drectoria_get_list_rw'] = $this->AdminModel->drectoria_get_list_rw($d_id);
        $this->load->view('admin/page/drectoria/e_drectoria', $data);
    }

    public function e_drectoria_act($id)
    {
        $drectoria_name = $_POST['drectoria_name'];
        $drectoria_surname = $_POST['drectoria_surname'];
        $drectoria_position = $_POST['drectoria_position'];
        $drectoria_desc = $_POST['drectoria_desc'];
        $drectoria_status = $_POST['drectoria_status'];
        $drectoria_birthday = $_POST['drectoria_birthday'];
        // sosial
        $drectoria_instagram = $_POST['drectoria_instagram'];
        $drectoria_facebook = $_POST['drectoria_facebook'];
        $drectoria_twitter = $_POST['drectoria_twitter'];
        $drectoria_gmail = $_POST['drectoria_gmail'];

        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('drectoria_img')) {
            $upload_drectoria_img = $this->upload->data();
            $data = [
                'd_name' => $drectoria_name,
                'd_surname' => $drectoria_surname,
                'd_position' => $drectoria_position,
                'd_desc' => $drectoria_desc,
                'd_status' => $drectoria_status,
                'd_instagram' => $drectoria_instagram,
                'd_facebook' => $drectoria_facebook,
                'd_twitter' => $drectoria_twitter,
                'd_gmail' => $drectoria_gmail,
                'd_birhtday' => $drectoria_birthday,
                'd_img' => $upload_drectoria_img['file_name'],
                'd_date' => date("Y-m-d H:i:s")
            ];
            $data = $this->security->xss_clean($data);
            $this->db->update_drectoria($id, $data);
            redirect(base_url('l_drectoria'));
        } else {
            $data = [
                'd_name' => $drectoria_name,
                'd_surname' => $drectoria_surname,
                'd_position' => $drectoria_position,
                'd_desc' => $drectoria_desc,
                'd_status' => $drectoria_status,
                'd_instagram' => $drectoria_instagram,
                'd_facebook' => $drectoria_facebook,
                'd_twitter' => $drectoria_twitter,
                'd_gmail' => $drectoria_gmail,
                'd_birhtday' => $drectoria_birthday,
                'd_date' => date("Y-m-d H:i:s")
            ];
            $data = $this->security->xss_clean($data);
            $this->AdminModel->update_drectoria($id, $data);
            redirect(base_url('l_drectoria'));
        }
    }

    public function d_drectoria($d_id)
    {
        $this->AdminModel->delete_drectoria($d_id);
        redirect(base_url('l_drectoria'));
    }

    public function detail_drectoria($id){
        $data["single_data_drectoria"] = $this->AdminModel->get_data_drectoria($id);
        $this->load->view("admin/page/drectoria/detail_drectoria", $data);
    }

    // Teachers Start
    public function c_teachers()
    {
        $this->load->view('admin/page/teachers/c_teachers');
    }

    public function l_teachers()
    {
        $data['teachers_get_list'] = $this->AdminModel->teachers_get_list();
        $this->load->view('admin/page/teachers/l_teachers', $data);
    }

    public function c_teachers_act()
    {

        $teachers_name = $_POST['teachers_name'];
        $teachers_surname = $_POST['teachers_surname'];
        $teachers_work = $_POST['teachers_work'];
        $teachers_status = $_POST['teachers_status'];

        if (!empty($teachers_name) && !empty($teachers_surname) && !empty($teachers_work)) {

            $config['upload_path']          = './upload';
            $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
            $config['remove_spaces']        = TRUE;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('teachers_img')) {
                $upload_teachers_img = $this->upload->data();
                $data = [
                    't_name' => $teachers_name,
                    't_surname' => $teachers_surname,
                    't_work' => $teachers_work,
                    't_status' => $teachers_status,
                    't_img' => $upload_teachers_img['file_name'],
                ];
                $data = $this->security->xss_clean($data);
                $this->db->insert('teachers', $data);
                redirect(base_url('l_teachers'));
            } else {
                $data = [
                    't_name' => $teachers_name,
                    't_surname' => $teachers_surname,
                    't_work' => $teachers_work,
                    't_status' => $teachers_status,
                ];
                $data = $this->security->xss_clean($data);
                $this->AdminModel->teachers_insert($data);
                redirect(base_url('l_teachers'));
            }
        } else {
            $this->session->set_flashdata("err", "Boşluq buraxmayın!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function e_teachers($t_id)
    {
        $data['teachers_get_list_rw'] = $this->AdminModel->teachers_get_list_rw($t_id);
        $this->load->view('admin/page/teachers/e_teachers', $data);
    }

    public function e_teachers_act($id)
    {
        $teachers_name = $_POST['teachers_name'];
        $teachers_surname = $_POST['teachers_surname'];
        $teachers_work = $_POST['teachers_work'];
        $teachers_status = $_POST['teachers_status'];

        $config['upload_path']          = './upload';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|JPG|JPEG|PDF|mp3|mp4';
        $config['remove_spaces']        = TRUE;
        $config['encrypt_name']         = TRUE;

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('teachers_img')) {
            $upload_teachers_img = $this->upload->data();
            $data = [
                't_name' => $teachers_name,
                't_surname' => $teachers_surname,
                't_work' => $teachers_work,
                't_status' => $teachers_status,
                't_img' => $upload_teachers_img['file_name'],
            ];
            $data = $this->security->xss_clean($data);
            $this->db->update_teachers($id, $data);
            redirect(base_url('l_teachers'));
        } else {
            $data = [
                't_name' => $teachers_name,
                't_surname' => $teachers_surname,
                't_work' => $teachers_work,
                't_status' => $teachers_status,
            ];
            $data = $this->security->xss_clean($data);
            $this->AdminModel->update_teachers($id, $data);
            redirect(base_url('l_teachers'));
        }
    }

    public function d_teachers($t_id)
    {
        $this->AdminModel->delete_teachers($t_id);
        redirect(base_url('l_teachers'));
    }
}
