<?php
class C_SuratKegiatan_Pegawai extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('M_SuratKegiatan_Pegawai', 'Model');
  }

  // Menampilkan tampilan utama dan data utama
  function index($nip){
    if(!$this->session->userdata('username')){
      redirect('login', 'refresh');
    }

    $data['suratkegiatan'] = $this->Model->get_all_data($nip);

    $this->load->view('V_Pegawai/V_SuratKegiatan_Pegawai/V_SuratKegiatan_Pegawai', $data);
  }
}
?>
