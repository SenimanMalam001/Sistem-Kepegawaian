<?php

class M_Notification extends CI_Model{

    function check_user_data($nip){
        // $nip = $this->input->post('nip');
        $this->db->where('NIP', $nip);
        $result = $this->db->get('tbl_pegawai');
        return $result->row();
    }

    function check_notification(){
        $nip = $this->session->userdata("id");
        $this->db->where('nip', $nip);
        $this->db->order_by("created_at", "desc");
        $result = $this->db->get('tbl_notifikasi_pegawai');
        return $result->result();
    }

}
?>