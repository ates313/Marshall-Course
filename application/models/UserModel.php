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
}
