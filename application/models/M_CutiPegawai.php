<?php
class m_cutipegawai extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function cuti_list(){
		$nip = $this->session->userdata("id");
		$this->db->where('nip_dosen', $nip);
		$tampil = $this->db->get("tbl_permohonan_cuti");
		return $tampil->result_array();
	}

	function save($namafile){
		$nip = $this->session->userdata("id");

		$data = array(
			'id' => $this->input->post('id_cuti'),
			'nip_dosen' => $nip,
			'kd_jenis' => $this->input->post('kd_jenis_cuti'),
			'tgl_pengajuan' =>  $this->input->post('pengajuan_cuti'),
			'tgl_mulai' => $this->input->post('mulai_cuti'),
			'tgl_akhir' => $this->input->post('akhir_cuti'),
			'alasan' => $this->input->post('alasan_cuti'),
			'id_status' => '1',
			'pesan' => 'Pengajuan Permohonan sedang di proses',
			'link_qrcode' => $namafile	
		);
		$this->db->insert('tbl_permohonan_cuti', $data);

	} 

	function update(){
		$data = array(
			'tgl_mulai' => $this->input->post('mulai_cuti'),
			'tgl_akhir' => $this->input->post('akhir_cuti'),
			'alasan' => $this->input->post('alasan_cuti'),
			'nip_dosen' => $this->input->post('nip_dosen_cuti'),
			'kd_jenis' => $this->input->post('kd_jenis_cuti')
		);

		$this->db->where('id', $this->input->post('id_cuti'));
		return $this->db->update('tbl_permohonan_cuti', $data);
	}

	function delete(){

		$this->db->where('id', $this->input->post('id_cuti'));
		$this->db->delete('tbl_permohonan_cuti');
		return true;
	}

	function viewsurat($id){
		$this->db->where('id', $id);
		echo $this->input->post($id);
		$tampil = $this->db->get("v_cetaksuratizin");
		return $tampil->row();
	}

	function get_jeniscuti(){
		$query = $this->db->query("select * from tbl_jenis_cuti");
		return $query->result();
	}

	function upload_link(){
		$data = array(
			'upload_link' => $this->input->post('upload_link')
		);

		$this->db->where('id', $this->input->post('id_cuti'));
		return $this->db->update('tbl_permohonan_cuti', $data);
	}

	function upload_file($id, $data){

		$this->db->where('id', $id);
		return $this->db->update('tbl_permohonan_cuti', $data);
	}
}