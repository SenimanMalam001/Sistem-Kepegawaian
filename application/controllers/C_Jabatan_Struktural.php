<?php
class C_Jabatan_Struktural extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('upload');
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

    function update(){

        $id_dosen_baru = $this->input->post('id_dosen_baru');
        $jabatan_dosen_baru = $this->input->post('select_jabatan_dosen');

        $configured_filename = 'JabStr' + $id_dosen_baru . '_' . $jabatan_dosen_baru . '_' . date('Y-m-d');
		
		$config['upload_path'] = './files/surat_keputusan_jabatan_struktural';
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
            $data = $this->Model->update();
			//echo $return;
			redirect('admin/jabatan-struktural', 'refresh');
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			echo $this->upload->display_errors();
			// return $return;
        }
    }

    function updatePegawai(){
        $id_pegawai_baru = $this->input->post('id_pegawai_baru');
        $select_jabatan_pegawai = $this->input->post('select_jabatan_pegawai');

        $configured_filename = 'JabStr' + $id_pegawai_baru . '_' . $select_jabatan_pegawai . '_' . date('Y-m-d');
	
		$config['upload_path'] = './files/surat_keputusan_jabatan_struktural';
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
            $data = $this->Model->updatePegawai();
			//echo $return;
			redirect('admin/jabatan-struktural', 'refresh');
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			echo $this->upload->display_errors();
			// return $return;
        }
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