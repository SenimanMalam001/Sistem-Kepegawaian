<?php

class M_profil extends CI_Model{

	var $tabel = 'tbl_pegawai';

    function show_profil()
    {
  		$NIP = $this->session->userdata("id");
  		$this->db->where('NIP', $NIP);
        $hasil=$this->db->get("vw_profil_biodata");
        return $hasil->row();
    }

    function update($where, $data, $table)
    {
    	$this->db->where($where);
    	$this->db->update($table, $data);

	}
	
	function get_golongan(){
		$NIP = $this->session->userdata("id");
		
		$this->db->where('nip', $NIP);
		$hasil = $this->db->get('vw_history_golongan');
		return $hasil->result();
	}

    function pendidikan()
	{
		$NIP = $this->session->userdata("id");
		$this->db->order_by('tahun_angkatan','DESC');
		$this->db->where('nip_pegawai', $NIP);
		$hasil=$this->db->get('tbl_pendidikan');
		return $hasil->result();
	}

	function save_pendidikan(){
		$data = array(
				'nip_pegawai' 	=> $this->input->post('nip_pegawai'), 
				'jenjang_pendidikan' 	=> $this->input->post('jenjang_pendidikan'), 
				'gelar' => $this->input->post('gelar'),
				'nama_pendidikan' 		=> $this->input->post('nama_pendidikan'),
				'tahun_angkatan' 		=> $this->input->post('tahun_angkatan'),
				'tahun_lulus'		=> $this->input->post('tahun_lulus')
			);
		$result=$this->db->insert('tbl_pendidikan',$data);
		return $result;
	}

	function update_pendidikan(){
		$id		=$this->input->post('id');
		$jenjang_pendidikan	=$this->input->post('jenjang_pendidikan');
		$gelar		=$this->input->post('gelar');
		$nama_pendidikan			=$this->input->post('nama_pendidikan');
		$tahun_angkatan			=$this->input->post('tahun_angkatan');
		$tahun_lulus			=$this->input->post('tahun_lulus');

		$this->db->set('jenjang_pendidikan', $jenjang_pendidikan);
		$this->db->set('gelar', $gelar);
		$this->db->set('nama_pendidikan', $nama_pendidikan);
		$this->db->set('tahun_angkatan', $tahun_angkatan);
		$this->db->set('tahun_lulus', $tahun_lulus);
		$this->db->where('id', $id);
		$result=$this->db->update('tbl_pendidikan');
		return $result;
	}

	function delete_pendidikan(){
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('tbl_pendidikan');
		return $result;
	}
  
  	// Fungis untuk library Notif
	function cek_kelengkapan_data(){
		$NIP = $this->session->userdata("id");
		$this->db->where('NIP', $NIP);
		$hasil=$this->db->get("vw_profil_biodata");
		return $hasil->row();
	}

}
