<?php
class c_cutipegawai extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_cutipegawai');
		$this->load->model('M_Global');
		
	}

	function upload(){
		$datas = $this->m_cutipegawai->cuti_list();
		$data['hallo'] = json_encode($datas);
		$this->load->view('upload',$data);
	}
	function index(){

		$now = "SC-";
		$data['auto_number']= $this->M_Global->_autonumber('id','tbl_permohonan_cuti',$now,4);
		$data['jenis_cuti']= $this->m_cutipegawai->get_jeniscuti();
		$this->load->view('v_pegawai/v_cutipegawai', $data);
	}

	function cetak_surat($id){

		$data['surat'] =$this->m_cutipegawai->viewsurat($id);

		// echo json_encode($data);

		$this->load->view('v_pegawai/v_printcutipegawai', $data);
	}

	function cuti_data(){
		$data = $this->m_cutipegawai->cuti_list();
		echo json_encode($data);
	}

	function save(){

		$id_input = $this->input->post('id_cuti');
		include "./phpqrcode/qrlib.php";
		#parameter inputan
		$tempdir = "./upload/qrCodeSC/";

		$isi_teks = "http://localhost/Sistem_Pegawai/cetak-surat-cuti/".$id_input;
		$namafile = $id_input.".png";
		$quality = 'H'; //ada 4 pilihan, L (Low), M(Medium), Q(Good), H(High)
		$ukuran = 5; //batasan 1 paling kecil, 10 paling besar
		$padding = 0;
		 
		QRCode::png($isi_teks,$tempdir.$namafile,$quality,$ukuran,$padding);

		$data=$this->m_cutipegawai->save($namafile);
		echo json_encode($data);
		


	}

	function update(){

		$data=$this->m_cutipegawai->update();
		echo json_encode($data);
	}
	function delete(){
		$data=$this->m_cutipegawai->delete();
		echo json_encode($data);
	}

	function do_upload(){

		$config['upload_path']		='./upload/SuratCuti/';
		$config['allowed_types']	='pdf|doc|docx';
		$config['max_size']			=1024*8;
		$config['max_widht']		=1024*2;
		$config['max_height']		=768;
		$config['remove_space'] = 'TRUE';
        $config['overwrite'] = 'TRUE';

		// ['file_name']				=$this->input->post('insert_upload_file');

		$this->load->library('upload', $config);
			$this->upload->do_upload('insert_sakit_file');
	        $fileupload = $this->upload->data();

		

		$data = array(
			'upload_filesakit' => $fileupload['file_name']
		);
		$id = $this->input->post('id_cuti');
		$this->m_cutipegawai->upload_file($id, $data);
		
		
	}

	function upload_link(){
		$data = $this->m_cutipegawai->upload_link();
		echo json_encode($data);
	}

	function sendMail() {
		$NIP = $this->session->userdata("id");

		$config = Array(  
			'protocol' => 'smtp',  
			'smtp_host' => 'ssl://smtp.gmail.com', 
			'smtp_port' => 465,  
			'smtp_user' => 'ragilsatrio20@gmail.com',   
			'smtp_pass' => 'dochi666',   
			'mailtype' => 'html',   
			'charset' => 'iso-8859-1'  
		);  

			
		$id = $this->input->post('id_cuti');
		$dataPegawai = $this->m_cutipegawai->dataPegawai($NIP);
		$dataPimpinan = $this->m_cutipegawai->dataPimpinanFakultas($dataPegawai->kd_fakultas);
		$emailPimpinan = $dataPimpinan->email;
		$emailPengirim = $dataPegawai->email;
		$namaPengirim = $dataPegawai->nama_pegawai;
		$dataCutiPegawai['data'] = $this->m_cutipegawai->viewDataCuti($id);


		$this->load->library('email', $config);  
		$this->email->set_newline("\r\n");  
		$this->email->from($emailPengirim, $namaPengirim);   
		$this->email->to($emailPimpinan);   
		$this->email->subject('Persetujuan cuti'); 
		$message = $this->load->view('V_pegawai/V_template_email.php', $dataCutiPegawai, TRUE);  
		$this->email->message($message); 
		$this->email->send(); 
		redirect('c_cutipegawai/index');
	}
}