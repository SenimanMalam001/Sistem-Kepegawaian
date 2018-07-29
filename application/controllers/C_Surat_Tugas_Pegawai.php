<?php
class C_Surat_Tugas_Pegawai extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('M_Surat_Tugas_Pegawai', 'Model');
  }

  // Menampilkan tampilan utama dan data utama
  function index($nip){
    if(!$this->session->userdata('username')){
      redirect('login', 'refresh');
    }

    $data['surattugas'] = $this->Model->get_all_data($nip);

    $this->load->view('V_Pegawai/SuratTugas_Pegawai/index', $data);
  }
}
?>
