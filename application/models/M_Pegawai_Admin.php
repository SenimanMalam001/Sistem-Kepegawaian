<?php
class M_Pegawai_Admin extends CI_Model{

  function get_all_data(){
    $db = $this->load->database('default', TRUE);
    $db->where('status_kepegawaian', '0');
    $data = $db->get('vw_profil_biodata');
    return $data->result();
  }

  function get_all_data_dosen(){
    $db = $this->load->database('default', TRUE);
    $db->where('status_kepegawaian', '1');
    $data = $db->get('vw_profil_biodata');
    return $data->result();
  }

  function update_golongan(){
    $db = $this->load->database('default', TRUE);

    // get all data
    $nip = $this->input->post('nip');
    $kd_golongan = $this->input->post('kd_golongan');

    // update data golongan
    $db->set('kd_golongan', $kd_golongan);
		$db->where('nip', $nip);
		$result=$db->update('tbl_pegawai');
		return $result;
  }

  function update_jabatan(){
    $db = $this->load->database('default', TRUE);

    // get all data
    $nip = $this->input->post('nip');
    $id_jabatan = $this->input->post('id_jabatan');

    // update data jabatan
    $db->set('jab_fa', $id_jabatan);
		$db->where('nip', $nip);
		$result=$db->update('tbl_pegawai');
		return $result;
  }

  function get_single_data($nip){
    $db = $this->load->database('default', TRUE);
    $db->where('NIP', $nip);
    $data = $db->get('vw_profil_biodata');
    return $data->row();
  }

  function get_golongan_by_nip(){
    $db = $this->load->database('default', TRUE);

    $nip = $this->input->post('nip');
    $db->where('NIP', $nip);
    $data = $db->get('vw_profil_biodata');
    return $data->result();
  }

  function get_list_golongan(){
    $db = $this->load->database('default', TRUE);
    $data = $db->get('tbl_golongan');
    return $data->result();
  }

  function get_jabatan_by_nip(){
    $db = $this->load->database('default', TRUE);

    $nip = $this->input->post('nip');
    $db->where('NIP', $nip);
    $data = $db->get('vw_jabatan_pegawai');
    return $data->result();
  }

  function get_list_jabatan(){
    $db = $this->load->database('default', TRUE);
    $data = $db->get('tbl_jabatan_fungsional_akademik');
    return $data->result();
  }

  function save_pegawai(){
    $data = array(
        'NIP'   => $this->input->post('NIP'), 
        'nama_pegawai'  => $this->input->post('nama_pegawai'), 
        'no_ktp' => $this->input->post('no_ktp'),
        'no_telepon'     => $this->input->post('no_telepon'),
        'no_telepon_rumah'    => $this->input->post('no_telepon_rumah'),
        'alamat_tinggal'   => $this->input->post('alamat_tinggal'),
        'alamat_tetap'   => $this->input->post('alamat_tetap'),
        'jenis_kelamin'   => $this->input->post('jenis_kelamin'),
        'tanggal_lahir'   => $this->input->post('tanggal_lahir'),
        'tempat_lahir'   => $this->input->post('tempat_lahir'),
        'agama'   => $this->input->post('agama'),
        'status_aktif'   => $this->input->post('status_aktif'),
        'status_kepegawaian'   => '0'
      );
    $result=$this->db->insert('tbl_pegawai',$data);

    $gol = array(
      'nip'   => $this->input->post('NIP'),
      'kd_golongan' => 'golE',
      'tanggal_mulai' => date('Y-m-d'),
      'sk_file' => 'Default'
    );

    $result=$this->db->insert('tbl_golongan_pegawai',$gol);
    
    return $result;
  }

  function delete_pegawai(){
    $NIP=$this->input->post('NIP');
    $this->db->where('NIP', $NIP);
    $result=$this->db->delete('tbl_pegawai');
    return $result;
  }

  //=============================Pendidikan=========================
  function pendidikan()
  {

    $this->db->order_by('tahun_angkatan','DESC');
    $hasil=$this->db->get('tbl_pendidikan');
    return $hasil->result();
  }

  function save_pendidikan(){
    $data = array(
        'nip_pegawai'   => $this->input->post('nip_pegawai'), 
        'jenjang_pendidikan'  => $this->input->post('jenjang_pendidikan'), 
        'gelar' => $this->input->post('gelar'),
        'nama_pendidikan'     => $this->input->post('nama_pendidikan'),
        'tahun_angkatan'    => $this->input->post('tahun_angkatan'),
        'tahun_lulus'   => $this->input->post('tahun_lulus')
      );
    $result=$this->db->insert('tbl_pendidikan',$data);
    return $result;
  }

  function update_pendidikan(){
    $id   =$this->input->post('id');
    $jenjang_pendidikan =$this->input->post('jenjang_pendidikan');
    $gelar    =$this->input->post('gelar');
    $nama_pendidikan      =$this->input->post('nama_pendidikan');
    $tahun_angkatan     =$this->input->post('tahun_angkatan');
    $tahun_lulus      =$this->input->post('tahun_lulus');

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
?>
