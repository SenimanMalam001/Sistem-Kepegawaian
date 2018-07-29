<?php

class M_Surat_Tugas extends CI_Model {
    function st_list(){
		$rubrik = $this->load->database('default', TRUE);
		$hasil= $rubrik->get('vw_surat_tugas');

		return $hasil->result();
    }
    
    function save_sk(){
		$db = $this->load->database('default', TRUE);

		$data = array(
			'id' 	=> $this->input->post('id'),
			'deskripsi' 	=> $this->input->post('deskripsi'),
			'sk_fileurl' => $this->input->post('sk_fileurl'),
			'tgl_awal' => $this->input->post('tgl_awal'),
			'tgl_akhir' => $this->input->post('tgl_akhir'),
			'maksud_perjalanan' => $this->input->post('maksud_perjalanan'),
			'tempat_tujuan' => $this->input->post('tempat_tujuan'),
		);

		$result = $db->insert('tbl_sk_pegawai',$data);

		return $result;
	}

	function save_sk_member(){

		$data = array(
			'id_sk' 	=> $this->input->post('id_sk'),
			'nip_pegawai' 	=> $this->input->post('nip_pegawai'),
			'id_rubrik' => $this->input->post('id_rubrik'),
		);

		$result = $this->db->insert('tbl_surat_tugas', $data);

		return $result;
	}

	function update_sk(){
		$db = $this->load->database('default', TRUE);

		$id=$this->input->post('id');
		$tgl_awal=$this->input->post('tgl_awal');
		$tgl_akhir=$this->input->post('tgl_akhir');
		$deskripsi=$this->input->post('deskripsi');

		$tempat=$this->input->post('tempat');
		$maksud=$this->input->post('maksud');

		$db->set('tgl_awal', $tgl_awal);
		$db->set('tgl_akhir', $tgl_akhir);
		$db->set('deskripsi', $deskripsi);
		$db->where('id', $id);
		$result=$db->update('tbl_sk_pegawai');

		$db->set('maksud_perjalanan_dinas', $maksud);
		$db->set('tempat_tujuan', $tempat);
		$db->where('id_sk', $id);
		$result=$db->update('tbl_surat_tugas');
		return $result;
	}

	function delete_sk(){
		$db = $this->load->database('default', TRUE);

		$id=$this->input->post('id');
		$db->where('id', $id);
		$result = $db->delete('tbl_sk_pegawai');
		return $result;
	}

	function get_rubrik_data(){
		$rubrik = $this->load->database('db_rubrik_kinerja', TRUE);

		$hasil= $rubrik->get('vw_select_rubrik');
		return $hasil->result();
	}

	function get_latest_id(){
		$result = $this->db->query('SELECT id, COUNT(*) AS total FROM tbl_sk_pegawai ORDER BY id DESC ');

		return $result->result();
	}

	function get_rubrik_kategori(){
		$rubrik = $this->load->database('db_rubrik_kinerja', TRUE);

		$id_rubrik = $this->input->post('id_rubrik');
		$rubrik->where('id_rubrik', $id_rubrik);
		$hasil= $rubrik->get('tbl_anak_rubrik');

		return $hasil->result();
	}

	function get_anggota_sk(){
		$rubrik = $this->load->database('default', TRUE);

		$id_sk = $this->input->post('id_sk');

		$rubrik->where('id_sk', $id_sk);

		$result = $rubrik->get('vw_anggota_surat_tugas');

		return $result->result();
	}

	function get_idrubrik_by_idsK(){
		$db= $this->load->database('default', TRUE);

		$id_sk = $this->input->post('id_sk');

		$db->where('id', $id_sk);

		$result = $db->get('vw_surat_tugas');

		return $result->result();
	}

	function add_member(){
		$data = array(
			'nip_pegawai' 	=> $this->input->post('nip'),
			'id_sk' 	=> $this->input->post('id_sk'),
			'id_rubrik' => $this->input->post('peran'),
		);

		$result = $this->db->insert('tbl_surat_tugas', $data);

		return $result;
	}

	function remove_member(){
		$db = $this->load->database('default', TRUE);
		$nip_pegawai = $this->input->post('nip_pegawai');

		$db->where('nip_pegawai', $nip_pegawai);
		$result = $db->delete('tbl_surat_tugas');
		return $result;
	}

	function updateSKurl($id_sk, $filename){
		$db = $this->load->database('default', TRUE);

		$db->set('sk_fileurl', $filename);
		$db->where('id', $id_sk);
		$result=$db->update('tbl_sk_pegawai');
		return $result;
	}

}

?>