<?php

class C_Surat_Tugas extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_Surat_Tugas', 'Modal');
		$this->load->model('M_Global');
	}

	function index(){
		if(!$this->session->userdata('username')){
			redirect('login', 'refresh');
		}

		$now = "ST-".date('Ymd');
		$data['auto_number'] = $this->M_Global->_autonumber('id','tbl_sk_pegawai',$now,3);
		$this->load->view('V_Admin/V_Surat_Tugas/V_Surat_Tugas', $data);
    }
    
    function st_data(){
		$data=$this->Modal->st_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->Modal->save_sk();
		echo json_encode($data);
	}

	function addMember(){
		$data=$this->Modal->add_member();
		echo json_encode($data);
	}

	function save_member(){
		$data = $this->Modal->save_sk_member();
		echo json_encode($data);
	}

	function removeMember(){
		$data = $this->Modal->remove_member();
		echo json_encode($data);
	}

	function update(){
		$data=$this->Modal->update_sk();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->Modal->delete_sk();
		echo json_encode($data);
	}

	function getLatestId(){
		$data = $this->Modal->get_latest_id();
		echo json_encode($data);
	}

	function get_rubrik_data(){
		$data = $this->Modal->get_rubrik_data();
		echo json_encode($data);
	}

	function getRubrikKategori(){
		$data = $this->Modal->get_rubrik_kategori();
		echo json_encode($data);
	}

	function getAnggotaSK(){
		$data = $this->Modal->get_anggota_sk();
		echo json_encode($data);
	}

	function deleteAllSKMember(){
		$data = $this->Modal->delete_all_sk_member();
		echo json_encode($data);
	}

	function getIdRubrikByIdSK(){
		$data = $this->Modal->get_idrubrik_by_idsK();
		echo json_encode($data);
	}

	public function uploadSK(){
		// Update di database
		$id_sk = $this->input->post('upload_sk');

		$configured_filename = $id_sk . '_upload';
		
		$config['upload_path'] = './files/surat_tugas';
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
			$this->Modal->updateSKurl($id_sk, $configured_filename);
			//echo $return;
			redirect('admin/surat-tugas', 'refresh');
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			//echo $return;
			return $return;
		}
	}
}

?>