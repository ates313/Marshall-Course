<?php


class UserModel extends CI_Model
{

    public function get_slider()
    {
        return
            $this->db
            // ->select('s_title')
            ->where('s_status', 'Active')
            ->limit(4)
            ->get('slider')->result_array();
    }

}
