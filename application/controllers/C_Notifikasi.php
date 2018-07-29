<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Notifikasi extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('M_Notification', 'model');
    }

    function checkUserData(){
        $nip = $this->session->userdata("id");

        $data = $this->model->check_user_data($nip);
        
        $tidak_lengkap = false;

        if(!$data->nama_pegawai){
            $tidak_lengkap = true;
        }

        if(!$data->nomor_kartu_pegawai){
            $tidak_lengkap = true;
        }

        if(!$data->no_ktp){
            $tidak_lengkap = true;
        }

        if(!$data->no_telepon){
            $tidak_lengkap = true;
        }
        
        if(!$data->tanggal_lahir){
            $tidak_lengkap = true;
        }

        if(!$data->agama){
            $tidak_lengkap = true;
        }
        
        echo json_encode($tidak_lengkap);
    }

    function checkNotification(){
        
        $data = $this->model->check_notification();
        echo json_encode($data);
    }

}

?>