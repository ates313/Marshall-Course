<?php


class UserModel extends CI_Model
{

    public function get_slider()
    {
        return
            $this->db
            ->where('s_status', 'Active')
            ->get('slider')->result_array();
    }

    public function get_courseSix()
    {
        return
            $this->db
            ->where('c_status', 'Active')
            ->limit(6)
            ->get('course')->result_array();
    }

    public function get_courses()
    {
        return
            $this->db
            ->where('c_status', 'Active')
            // ->limit(6)
            ->get('course')->result_array();
    }

    public function get_single_course($id)
    {
        return $this->db
            ->where('c_id', $id)
            ->where('c_status', "Active")
            ->get('course')->row_array();
    }

    public function news_course()
    {
        return
            $this->db
            ->where('n_status', 'Active')
            // ->limit(6)
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

    public function get_drectoria()
    {
        return
            $this->db
            ->where('d_status', 'Active')
            ->get('directoria')->result_array();
    }

    public function get_single_drectoria($id)
    {
        return $this->db
            ->where('d_id', $id)
            ->where('d_status', "Active")
            ->get('directoria')->row_array();
    }

    public function get_teachers()
    {
        return
            $this->db
            ->where('t_status', 'Active')
            ->get('teachers')->result_array();
    }
    // CONTACT MESSAGE()
    public function cn_contact_insert($data)
    {
        $this->db->insert('contact_message', $data);
    }

    public function cn_contact_list()
    {
        return $this->db->order_by('cn_id', "DESC")->get('contact_message')->result_array();
    }

    // public function cn_contcat_list_rw($cn_id){
    //     return $this->db->where('cn_id', $cn_id)->get('contact_message')->row_array();
    // }

    public function delete_message($cn_id)
    {
        $this->db->where('cn_id', $cn_id)->delete('contact_message');
        redirect(base_url('admin'));
    }
}
