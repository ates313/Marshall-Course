<?php


class UserModel extends CI_Model
{

    public function get_slider()
    {
        return
            $this->db
            // ->select('s_title')
            ->get('slider')->result_array();
    }

}
