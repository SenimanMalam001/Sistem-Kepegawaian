<?php

class M_Permutasi_Pegawai extends CI_Model {

    function get_fakultas_pegawai(){
        $db = $this->load->database('default', TRUE);
        $result = $db->get('vw_fakultas_pegawai');
        return $result->result();
    }

    function get_fakultas_dosen(){
        $db = $this->load->database('default', TRUE);
        $result = $db->get('vw_fakultas_dosen');
        return $result->result();
    }

    function get_fakultas_list(){
        $db = $this->load->database('default', TRUE);
        $result = $db->get('tbl_fakultas');
        return $result->result();
    }

    function update_fakultas_pegawai($nip, $kd_fakultas){
        $db = $this->load->database('default', TRUE);

        $db->set('kd_fakultas', $kd_fakultas);
        $db->set('sejak_tanggal', date('Y-m-d'));
		$db->where('nip_pegawai', $nip);
		$result=$db->update('tbl_fakultas_pegawai');

		return $result;
    }

}

?>