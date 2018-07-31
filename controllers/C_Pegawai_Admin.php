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
    $data['dosen'] = $this->Model->get_all_data_dosen();

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

  function detail_pegawai($nip){
    $data['pegawai'] = $this->Model->get_single_data($nip);

    $this->load->view('V_Admin/V_Pegawai_Admin/V_Pegawai_Admin_Detail.php', $data);
  }

  function detail_dosen($nip){
    $data['pegawai'] = $this->Model->get_single_data($nip);

    $this->load->view('V_Admin/V_Pegawai_Admin/V_Dosen_Admin_Detail.php', $data);
  }

  //Edit profil Admin
  function simpan_edit(){
    $NIP        = $this->input->post('NIP');
    echo $NIP;
    $nama_pegawai     = $this->input->post('nama_pegawai');
    $no_ktp       = $this->input->post('no_ktp');
    $no_telepon     = $this->input->post('no_telepon');
    $no_telepon_rumah   = $this->input->post('no_telepon_rumah');
    $alamat       = $this->input->post('alamat');
    $jenis_kelamin    = $this->input->post('jenis_kelamin');
    $tanggal_lahir    = $this->input->post('tanggal_lahir');
    $tempat_lahir     = $this->input->post('tempat_lahir');
    $agama        = $this->input->post('agama');
    $status_aktif     = $this->input->post('status_aktif');
    

        $config['upload_path'] = './images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['remove_space'] = 'TRUE';
        $config['overwrite'] = 'TRUE';

        $this->load->library('upload', $config);
            $this->upload->do_upload('filefoto');
          $gambar = $this->upload->data();

      $data = array(
          'nama_pegawai' => $nama_pegawai, 
          'no_ktp' => $no_ktp,
          'no_telepon' => $no_telepon,
          'no_telepon_rumah' => $no_telepon_rumah,
          'alamat_tinggal' => $alamat,
          'jenis_kelamin' => $jenis_kelamin,
          'tanggal_lahir' => $tanggal_lahir,
          'tempat_lahir' => $tempat_lahir,
          'agama' => $agama,
          'status_aktif' => $status_aktif,
          'foto_profil' =>$gambar['file_name']
        );
        
        
        $where=array('NIP'=>$NIP);
        $data = $this->Model->update($where, $data, 'tbl_pegawai');


        // redirect($_SERVER['HTTP_REFERER']);

        // redirect('C_Pegawai_Admin/detail_pegawai/' . $NIP . '');
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

    //========================save pegawai===============================
  function save_pegawai(){
    $data=$this->Model->save_pegawai();
    echo json_encode($data);
  }

  //=========================save golongan=================================
  function save_golongan(){
    $data=$this->Model->save_golongan();
    echo json_encode($data);
  }

  //========================save jabatan fungsional========================
  function save_jabatan_fungsional(){
    $data=$this->Model->save_jabatan_fungsional();
    echo json_encode($data);
  }

   //========================save fakultas pegawai========================
  function save_fakultas_pegawai(){
    $data=$this->Model->save_fakultas_pegawai();
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
