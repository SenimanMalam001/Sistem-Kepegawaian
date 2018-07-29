<?php
class SuratKeterangan extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->library('upload');
		$this->load->helper(array('form', 'url'));
		$this->load->model('M_SuratKeterangan');
		$this->load->model('M_Global');
	}

	function index(){
		if(!$this->session->userdata('username')){
			redirect('login', 'refresh');
		}

		$now = "SK-".date('Ymd');
		$data['auto_number'] = $this->M_Global->_autonumber('id','tbl_sk_pegawai',$now,3);
		$this->load->view('V_Admin/V_Surat_Keterangan/V_Surat_Keterangan', $data);
	}

	function sk_data(){
		$data=$this->M_SuratKeterangan->sk_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->M_SuratKeterangan->save_sk();
		echo json_encode($data);
	}

	function save_member(){
		$data = $this->M_SuratKeterangan->save_sk_member();
		echo json_encode($data);
	}

	function update(){
		$data=$this->M_SuratKeterangan->update_sk();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->M_SuratKeterangan->delete_sk();
		echo json_encode($data);
	}

	function addMember(){
		$data=$this->M_SuratKeterangan->add_member();
		echo json_encode($data);
	}

	function removeMember(){
		$data = $this->M_SuratKeterangan->remove_member();
		echo json_encode($data);
	}

	function getLatestId(){
		$data = $this->M_SuratKeterangan->get_latest_id();
		echo json_encode($data);
	}

	function get_rubrik_data(){
		$data = $this->M_SuratKeterangan->get_rubrik_data();
		echo json_encode($data);
	}

	function getRubrikKategori(){
		$data = $this->M_SuratKeterangan->get_rubrik_kategori();
		echo json_encode($data);
	}

	function getAnggotaSK(){
		$data = $this->M_SuratKeterangan->get_anggota_sk();
		echo json_encode($data);
	}

	function deleteAllSKMember(){
		$data = $this->M_SuratKeterangan->delete_all_sk_member();
		echo json_encode($data);
	}

	function getIdRubrikByIdSK(){
		$data = $this->M_SuratKeterangan->get_idrubrik_by_idsK();
		echo json_encode($data);
	}

	public function uploadSK(){
		// Update di database
		$id_sk = $this->input->post('upload_sk');

		$configured_filename = $id_sk . '_upload';
		
		$config['upload_path'] = './files/surat_keputusan';
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
			$this->M_SuratKeterangan->updateSKurl($id_sk, $configured_filename);
			//echo $return;
			redirect('admin/surat-keputusan', 'refresh');
		}else{
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			//echo $return;
			return $return;
		}
	}
}
