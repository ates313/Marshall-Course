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
        $data['course_get_list'] = $this->UserModel->get_courseSix();
        $data['news_get_list'] = $this->UserModel->news_course();
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $data['partners_get_list'] = $this->UserModel->get_partners();
        $this->load->view('user/index', $data);
    }

    public function about()
    {
        $data['about_get_list'] = $this->UserModel->get_about();
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
        $data['teachers_get_list'] = $this->UserModel->get_teachers();
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $this->load->view('user/teachers', $data);
    }

    public function teachers_single($id)
    {
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $data['teachers_single'] = $this->UserModel->get_single_teachers($id);
        if (empty($data['teachers_single'])) {
            redirect(base_url('teachers'));
        }
        $this->load->view('user/teachers_single', $data);
    }

    public function partners()
    {
        $data['partners_get_list'] = $this->UserModel->get_partners();
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $this->load->view('user/partners', $data);
    }

    public function courseGrid2()
    {
        $data['course_get_list'] = $this->UserModel->get_courses();
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $this->load->view('user/courseGrid2', $data);
    }

    public function directoria()
    {
        $data['drectoria_get_list'] = $this->UserModel->get_drectoria();
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $this->load->view('user/directoria', $data);
    }

    public function drectoria_single($id)
    {
        $data['footer_get_list'] = $this->UserModel->get_footer();
        $data['drectoria_single'] = $this->UserModel->get_single_drectoria($id);
        if (empty($data['drectoria_single'])) {
            redirect(base_url('directoria'));
        }
        $this->load->view('user/drectoria_single', $data);
    }

    public function courseSingle($id)
    {
        $data['course_single'] = $this->UserModel->get_single_course($id);
        $data['footer_get_list'] = $this->UserModel->get_footer();
        if (empty($data['course_single'])) {
            redirect(base_url('course2'));
        }
        $this->load->view('user/courseSingle', $data);
    }

    // CONTACT MESSAGE
    public function c_contact_act()
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $comments = $_POST['comments'];

        if (!empty($first_name) && !empty($last_name) && !empty($phone) && !empty($email) && !empty($comments)) {

            $data = [
                'cn_name' => $first_name,
                'cn_surname' => $last_name,
                'cn_phone' => $phone,
                'cn_email' => $email,
                'cn_desc' => $comments,
                'cn_date' => date('Y-m-d H:i:s')
            ];
            $data = $this->security->xss_clean($data);
            $this->UserModel->cn_contact_insert($data);
            redirect(base_url('contact'));
        } else {
            $this->session->set_flashdata("err", "Don't leave a gap!");
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function d_cn_contact($cn_id)
    {
        $this->UserModel->delete_message($cn_id);
        redirect(base_url('admin'));
    }

    // ================
}
