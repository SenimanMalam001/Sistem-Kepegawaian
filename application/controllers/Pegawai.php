<?php
class Pegawai extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('M_Pegawai');
  }

  function get_autocomplete(){
      if (isset($_GET['term'])) {
          $result = $this->M_Pegawai->search_pegawai($_GET['term']);
          if (count($result) > 0) {
              foreach ($result as $row)
                  $arr_result[] = array(
                      'nip'         => $row->nip,
                      'label'   => $row->nama_pegawai,
               );
               echo json_encode($arr_result);
          }
      }
  }

}
?>
