<?php
class M_Pegawai extends CI_Model{

  function search_pegawai($nama){
      $query = $this->db->query("SELECT nip, nama_pegawai FROM tbl_pegawai WHERE nama_pegawai LIKE '%$nama%' ORDER BY 'asc' LIMIT 10");
      return $query->result();
  }

}
?>
