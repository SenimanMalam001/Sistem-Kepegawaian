<?php 

class M_Jabatan_Struktural extends CI_Model {

    function get_list_jabatan_dosen(){
        $db = $this->load->database('default', TRUE);
        $data = $db->get('vw_jabatan_struktural_dosen');
        return $data->result();
    }

    function update_jabatan_baru(){
        $db = $this->load->database('default', TRUE);

		$id_dosen =$this->input->post('id_dosen');
		$id_jabatan =$this->input->post('id_jabatan');

		$db->set('jab_str', $id_jabatan);
		$db->where('nip_pegawai', $id_dosen);
		$result=$db->update('tbl_jabatan_struktural_pegawai');
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