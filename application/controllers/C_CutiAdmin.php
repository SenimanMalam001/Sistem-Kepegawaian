<?php
class c_cutiadmin extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_cutiadmin');
	}
	function index(){
		$this->load->view('v_admin/v_cutiadmin');
	}

	function cetak_surat($id){

		$data['surat'] =$this->m_cutiadmin->viewsurat($id);

		// echo json_encode($data);

		$this->load->view('v_admin/v_printcutiadmin', $data);
	}

	function cuti_data(){
		$data = $this->m_cutiadmin->cuti_list();
		echo json_encode($data);
	}

	function save(){
		$data=$this->m_cutiadmin->save();
		echo json_encode($data);
	}

	function update(){
		$data=$this->m_cutiadmin->update();
		echo json_encode($data);
	}
	function delete(){
		$data=$this->m_cutiadmin->delete();
		echo json_encode($disdata);
	}

	function update_agree(){
		$data=$this->m_cutiadmin->update_agree();
		echo json_encode($data);
	}

	function update_disagree(){
		$data=$this->m_cutiadmin->update_disagree();
		echo json_encode($data);
	}
}