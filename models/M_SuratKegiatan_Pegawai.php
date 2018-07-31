<?php
class M_SuratKegiatan_Pegawai extends CI_Model {

  function get_all_data($nip){
    $db = $this->load->database('default', TRUE);
    $db->where('nip_pegawai', $nip);
    $data = $db->get('vw_anggota_sk');
    return $data->result();
  }
  
}
?>
