<?php
class m_cutiadmin extends CI_Model{

	function __construct(){
		$this->load->database();
	}

	function cuti_list(){
		$tampil = $this->db->get("tbl_permohonan_cuti");
		return $tampil->result_array();
	}

	function save(){
		$data = array(
			'id' => $this->input->post(''),
			'tgl_pengajuan' =>  $this->input->post('pengajuan_cuti'),
			'tgl_mulai' => $this->input->post('mulai_cuti'),
			'tgl_akhir' => $this->input->post('akhir_cuti'),
			'alasan' => $this->input->post('alasan_cuti'),
			'id_status' => '1',
			'nip_dosen' => $this->input->post('nip_dosen_cuti'),
			'kd_jenis' => $this->input->post('kd_jenis_cuti')
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

	function update_agree(){
		$data = array(
			'id_status' => '2',
			'pesan' => $this->input->post('deskripsi')
		);

		$this->db->where('id', $this->input->post('id_cuti'));
		return $this->db->update('tbl_permohonan_cuti', $data);
	}

	function update_disagree(){
		$data = array(
			'id_status' => '3',
			'pesan' => $this->input->post('deskripsi')
		);

		$this->db->where('id', $this->input->post('id_cuti'));
		return $this->db->update('tbl_permohonan_cuti', $data);
	}
}