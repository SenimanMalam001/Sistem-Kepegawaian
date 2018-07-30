<?php

class C_Permutasi_Pegawai extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('M_Permutasi_Pegawai', 'Model');
        $this->load->library('upload');
    }

    function index(){
        $this->load->view('V_Admin/V_Permutasi_Pegawai/V_Permutasi_Pegawai');
    }

    function update(){
        $nip=$this->input->post('nip_pegawai');
        $kd_fakultas=$this->input->post('select_fakultas_pegawai');

        $configured_filename = $nip . '_' . $kd_fakultas . '_' . date('Y-m-d');
		
		$config['upload_path'] = './files/surat_keputusan_permutasi';
		$config['allowed_types'] = '*';
		$config['max_size']	= '2048';
		$config['remove_space'] = TRUE;
		$config['file_name'] = $configured_filename;
	
		$this->upload->initialize($config);
			
		if($this->upload->do_upload('userfile')){ // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');

			$file = $this->upload->data();
			$configured_filename = $configured_filename . $file['file_ext'];

			// Masukan nama file ke database
			$this->Model->update_fakultas_pegawai($nip, $kd_fakultas);
			//echo $return;
			redirect('admin/mutasi-pegawai', 'refresh');
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			//echo $return;
			return $return;
        }
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
}

?>