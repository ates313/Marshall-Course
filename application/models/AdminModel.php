<?php

class AdminModel extends CI_Model{
    

    // Slider
    public function slider_insert($data){
        $this->db->insert('slider', $data);
    }

    public function slider_get_list(){
        return $this->db->order_by('s_id', "DESC")->get('slider')->result_array();
    }

    public function slider_get_list_rw($id){
        return $this->db->where('s_id', $id)->get('slider')->row_array();
    }

    public function delete_slider($id){
        $this->db->where('s_id', $id)->delete('slider');
        redirect(base_url('l_slider'));
    }

    public function update_slider($id, $data){
        $this->db->where('s_id', $id)->update('slider', $data);
    }



}