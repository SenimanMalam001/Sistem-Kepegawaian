<?php
class C_Jabatan_Struktural extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('M_Jabatan_Struktural', 'Model');
    }

    function index(){
        if(!$this->session->userdata('username')){
            redirect('login', 'refresh');
        }

        $data['jabtan_dosen'] = $this->Model->get_list_jabatan_dosen();
        $data['jabtan_pegawai'] = $this->Model->get_list_jabatan_pegawai();

        $this->load->view('V_Admin/V_Jabatan_Struktural/V_Jabatan_Struktural.php', $data);
    }

    function updateJabatanBaru(){
        $data = $this->Model->update_jabatan_baru();
        echo json_encode($data);
    }

    function getJabatanDosen(){
        $data = $this->Model->get_jabatan_dosen();
        echo json_encode($data);
    }

    function getPemilikJabatan(){
        $data = $this->Model->get_pemilik_jabatan();
        echo json_encode($data);
    }

    function getJabatanKosong(){
        $data = $this->Model->get_jabatan_kosong();
        echo json_encode($data);
    }

    // ====================== Untuk Pegawai
    function getJabatanPegawai(){
        $data = $this->Model->get_jabatan_pegawai();
        echo json_encode($data);
    }

    function getPemilikJabatanPegawai(){
        $data = $this->Model->get_pemilik_jabatan_pegawai();
        echo json_encode($data);
    }

    function getJabatanKosongPegawai(){
        $data = $this->Model->get_jabatan_kosong_pegawai();
        echo json_encode($data);
    }
}
?>