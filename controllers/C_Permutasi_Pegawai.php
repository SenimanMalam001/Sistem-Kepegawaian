<?php

class C_Permutasi_Pegawai extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_Permutasi_Pegawai', 'Model');
    }

    function index(){
        $this->load->view('V_Admin/V_Permutasi_Pegawai/V_Permutasi_Pegawai');
    }

    function getFakultasPegawai(){
        $data = $this->Model->get_fakultas_pegawai();
        echo json_encode($data);
    }

    function getFakultasDosen(){
        $data = $this->Model->get_fakultas_dosen();
        echo json_encode($data);
    }

    function getFakultasList(){
        $data = $this->Model->get_fakultas_list();
        echo json_encode($data);
    }

    function updateFakultasPegawai(){
        $data = $this->Model->update_fakultas_pegawai();
        echo json_encode($data);
    }
}

?>