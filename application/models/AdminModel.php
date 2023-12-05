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





    // Footer About
    public function footer_insert($data)
    {
        $this->db->insert('footer_about', $data);
    }

    public function footer_get_list()
    {
        return $this->db->order_by('f_id', "DESC")->get('footer_about')->result_array();
    }

    public function footer_get_list_rw($f_id)
    {
        return $this->db->where('f_id', $f_id)->get('footer_about')->row_array();
    }

    public function delete_footer($f_id)
    {
        $this->db->where('f_id', $f_id)->delete('footer_about');
        redirect(base_url('l_footer'));
    }

    public function update_footer($f_id, $data)
    {
        $this->db->where('f_id', $f_id)->update('footer_about', $data);
    }



    // Partners
    public function partners_insert($data)
    {
        $this->db->insert('partners', $data);
    }

    public function partners_get_list()
    {
        return $this->db->order_by('p_id', "DESC")->get('partners')->result_array();
    }

    public function partners_get_list_rw($p_id)
    {
        return $this->db->where('p_id', $p_id)->get('partners')->row_array();
    }

    public function delete_partners($p_id)
    {
        $this->db->where('p_id', $p_id)->delete('partners');
        redirect(base_url('l_partners'));
    }

    public function update_partners($p_id, $data)
    {
        $this->db->where('p_id', $p_id)->update('partners', $data);
    }


     // About
     public function about_insert($data)
     {
         $this->db->insert('about', $data);
     }
 
     public function about_get_list()
     {
         return $this->db->order_by('a_id', "DESC")->get('about')->result_array();
     }
 
     public function about_get_list_rw($a_id)
     {
         return $this->db->where('a_id', $a_id)->get('about')->row_array();
     }
 
     public function delete_about($a_id)
     {
         $this->db->where('a_id', $a_id)->delete('about');
         redirect(base_url('l_about'));
     }
 
     public function update_about($a_id, $data)
     {
         $this->db->where('a_id', $a_id)->update('about', $data);
     }


    //  Drectoria
     public function drectoria_insert($data){
        $this->db->insert('directoria', $data);
     }

     public function drectoria_get_list(){
        return $this->db->order_by('d_id', "DESC")->get('directoria')->result_array();
     }

     public function drectoria_get_list_rw($d_id){
        return $this->db->where('d_id', $d_id)->get('directoria')->row_array();
     }

     public function delete_drectoria($d_id){
        $this->db->where('d_id', $d_id)->delete('directoria');
        redirect(base_url('l_drectoria'));
     }

     public function update_drectoria($d_id, $data){
        $this->db->where('d_id', $d_id)->update('directoria', $data);
     }


     //  Teachers
     public function teachers_insert($data){
        $this->db->insert('teachers', $data);
     }

     public function teachers_get_list(){
        return $this->db->order_by('t_id', "DESC")->get('teachers')->result_array();
     }

     public function teachers_get_list_rw($t_id){
        return $this->db->where('t_id', $t_id)->get('teachers')->row_array();
     }

     public function delete_teachers($t_id){
        $this->db->where('t_id', $t_id)->delete('teachers');
        redirect(base_url('l_teachers'));
     }

     public function update_teachers($t_id, $data){
        $this->db->where('t_id', $t_id)->update('teachers', $data);
     }
}
