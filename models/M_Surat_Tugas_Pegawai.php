<?php
class M_Surat_Tugas_Pegawai extends CI_Model {

  function get_all_data($nip){
    $db = $this->load->database('default', TRUE);
    $db->where('nip_pegawai', $nip);
    $data = $db->get('vw_anggota_surat_tugas');
    return $data->result();
  }
  
}
?>
