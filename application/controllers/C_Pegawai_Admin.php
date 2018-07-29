<?php
class C_Pegawai_Admin extends CI_Controller {

  function __construct(){
    parent::__construct();
    $this->load->model('M_Pegawai_Admin', 'Model');
  }

  // Tampilkan Menu Utama
  function index(){
    if(!$this->session->userdata('username')){
      redirect('login', 'refresh');
    }
    $data['pegawai'] = $this->Model->get_all_data();

    $this->load->view('V_Admin/V_Pegawai_Admin/V_Pegawai_Admin', $data);

  }

  function updateGolongan(){
      $data = $this->Model->update_golongan();
      echo json_encode($data);
  }

    function updateJabatan(){
      $data = $this->Model->update_jabatan();
      echo json_encode($data);
  }

  function detail($nip){
    $data['pegawai'] = $this->Model->get_single_data($nip);

    $this->load->view('V_Admin/V_Pegawai_Admin/V_Pegawai_Admin_Detail.php', $data);
  }

  function getGolonganByNIP(){
    $data = $this->Model->get_golongan_by_nip();
    echo json_encode($data);
    }

    function getListGolongan(){
    $data = $this->Model->get_list_golongan();
    echo json_encode($data);
    }

    function getJabatanByNIP(){
    $data = $this->Model->get_jabatan_by_nip();
    echo json_encode($data);
    }

    function getListJabatan(){
    $data = $this->Model->get_list_jabatan();
    echo json_encode($data);
    }

  function save(){
    $data=$this->Model->save_pegawai();
    echo json_encode($data);
  }

  function delete(){
    $data=$this->Model->delete_pegawai();
    echo json_encode($data);
  }

  //=============================Pendidikan=================================
  function save_pendidikan(){
    $data=$this->Model->save_pendidikan();
    echo json_encode($data);
  }

  function data_pendidikan()
  {
    $data=$this->Model->pendidikan();
    echo json_encode($data);
  }

  function edit_pendidikan()
  {   
    $data=$this->Model->update_pendidikan();
    echo json_encode($data);
  }

  function delete_pendidikan(){
    $data=$this->Model->delete_pendidikan();
    echo json_encode($data);
  }

}
?>
