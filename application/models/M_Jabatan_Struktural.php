<?php 

class M_Jabatan_Struktural extends CI_Model {

    function get_list_jabatan_dosen(){
        $db = $this->load->database('default', TRUE);
        $data = $db->get('vw_jabatan_struktural_dosen');
        return $data->result();
    }

    function update(){
        $db = $this->load->database('default', TRUE);

        $id_dosen_baru = $this->input->post('id_dosen_baru');
        $jabatan_dosen_baru = $this->input->post('select_jabatan_dosen');

		$id_dosen_lama =$this->input->post('id_dosen_lama');
        $jabatan_baru_dosen_lama =$this->input->post('select_jabatan_pergantian');

		$db->set('jab_str', $jabatan_dosen_baru);
		$db->where('nip_pegawai', $id_dosen_baru);
        $result=$db->update('tbl_jabatan_struktural_pegawai');
        
        if($id_dosen_lama){
            $db->set('jab_str', $jabatan_baru_dosen_lama);
            $db->where('nip_pegawai', $id_dosen_lama);
            $result=$db->update('tbl_jabatan_struktural_pegawai');
        }
		return $result;
    }

    function updatePegawai(){
        $db = $this->load->database('default', TRUE);

        $id_pegawai_baru = $this->input->post('id_pegawai_baru');
        $jabatan_pegawai_baru = $this->input->post('select_jabatan_pegawai');

		$id_pegawai_lama =$this->input->post('id_pegawai_lama');
        $select_jabatan_pergantian_pegawai =$this->input->post('select_jabatan_pergantian_pegawai');

		$db->set('jab_str', $jabatan_pegawai_baru);
		$db->where('nip_pegawai', $id_pegawai_baru);
        $result=$db->update('tbl_jabatan_struktural_pegawai');
        
        if($id_pegawai_lama){
            $db->set('jab_str', $select_jabatan_pergantian_pegawai);
            $db->where('nip_pegawai', $id_pegawai_lama);
            $result=$db->update('tbl_jabatan_struktural_pegawai');
        }
		return $result;
    }

    function get_list_jabatan_pegawai(){
        $db = $this->load->database('default', TRUE);
        $data = $db->get('vw_jabatan_struktural_pegawai');
        return $data->result();
    }

    function get_jabatan_dosen(){
        $db = $this->load->database('default', TRUE);

        $db->where('milik_dosen', '1');
        $data = $db->get('tbl_jabatan_struktural');

        return $data->result();
    }

    function get_pemilik_jabatan(){
        $db = $this->load->database('default', TRUE);

        $id_jab = $this->input->post('id_jab');

        $db->where('id', $id_jab);
        $data = $db->get('vw_jabatan_struktural_dosen');

        return $data->row();
    }

    function get_jabatan_kosong(){
        $db = $this->load->database('default', TRUE);

        // ambil jabatan struktural milik dosen dan tidak ada yang menempati
        $condition = array('milik_dosen' => '1', 'status' => '0');

        $db->where($condition);
        $data = $db->get('tbl_jabatan_struktural');

        return $data->result();
    }

    // ========================= BAGIAN PEGAWAI

    function get_jabatan_pegawai(){
        $db = $this->load->database('default', TRUE);

        $db->where('milik_dosen', '0');
        $data = $db->get('tbl_jabatan_struktural');

        return $data->result();
    }

    function get_pemilik_jabatan_pegawai(){
        $db = $this->load->database('default', TRUE);

        $id_jab = $this->input->post('id_jab');

        $db->where('id', $id_jab);
        $data = $db->get('vw_jabatan_struktural_pegawai');

        return $data->row();
    }

    function get_jabatan_kosong_pegawai(){
        $db = $this->load->database('default', TRUE);

        // ambil jabatan struktural yang bukan milik dosen dan tidak ada yang menempati
        $condition = array('milik_dosen' => '0', 'status' => '0');

        $db->where($condition);
        $data = $db->get('tbl_jabatan_struktural');

        return $data->result();
    }
}
?>