<?php


class UserModel extends CI_Model
{

    public function get_slider()
    {
        return
            $this->db
            ->where('s_status', 'Active')
            ->limit(4)
            ->get('slider')->result_array();
    }

    public function get_course()
    {
        return
            $this->db
            ->where('c_status', 'Active')
            ->limit(6)
            ->get('course')->result_array();
    }

    public function news_course()
    {
        return
            $this->db
            ->where('n_status', 'Active')
            ->limit(6)
            ->get('news')->result_array();
    }

    public function get_footer()
    {
        return
            $this->db
            ->where('f_status', 'Active')
            ->limit(1)
            ->get('footer_about')->result_array();
    }

    public function get_partners()
    {
        return
            $this->db
            ->where('p_status', 'Active')
            ->get('partners')->result_array();
    }

    public function get_about()
    {
        return
            $this->db
            ->where('a_status', 'Active')
            ->get('about')->result_array();
    }
}
