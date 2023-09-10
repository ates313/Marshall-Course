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
            ->limit(9)  
            ->get('course')->result_array();
    }
}
