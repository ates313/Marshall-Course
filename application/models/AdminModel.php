<?php

class AdminModel extends CI_Model
{


    // Slider
    public function slider_insert($data)
    {
        $this->db->insert('slider', $data);
    }

    public function slider_get_list()
    {
        return $this->db->order_by('s_id', "DESC")->get('slider')->result_array();
    }

    public function slider_get_list_rw($s_id)
    {
        return $this->db->where('s_id', $s_id)->get('slider')->row_array();
    }

    public function delete_slider($s_id)
    {
        $this->db->where('s_id', $s_id)->delete('slider');
        redirect(base_url('l_slider'));
    }

    public function update_slider($s_id, $data)
    {
        $this->db->where('s_id', $s_id)->update('slider', $data);
    }





    // Course
    public function course_insert($data)
    {
        $this->db->insert('course', $data);
    }

    public function course_get_list()
    {
        return $this->db->order_by('c_id', "DESC")->get('course')->result_array();
    }

    public function course_get_list_rw($c_id)
    {
        return $this->db->where('c_id', $c_id)->get('course')->row_array();
    }

    public function delete_course($c_id)
    {
        $this->db->where('c_id', $c_id)->delete('course');
        redirect(base_url('l_course'));
    }

    public function update_course($c_id, $data)
    {
        $this->db->where('c_id', $c_id)->update('course', $data);
    }





    // NEWS
    public function news_insert($data)
    {
        $this->db->insert('news', $data);
    }

    public function news_get_list()
    {
        return $this->db->order_by('n_id', "DESC")->get('news')->result_array();
    }

    public function news_get_list_rw($n_id)
    {
        return $this->db->where('n_id', $n_id)->get('news')->row_array();
    }

    public function delete_news($n_id)
    {
        $this->db->where('n_id', $n_id)->delete('news');
        redirect(base_url('l_news')); 
    }

    public function update_news($n_id, $data)
    {
        $this->db->where('n_id', $n_id)->update('news', $data);
    }
}
