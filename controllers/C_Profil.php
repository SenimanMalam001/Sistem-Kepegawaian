<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_profil extends CI_Controller {

	function __construct() 
	{
      	parent::__construct();
      	$this->load->model('m_profil');
    }

	function profil()
	{
		$data['pegawai'] = $this->m_profil->show_profil();
		$this->load->view('V_Pegawai/profil/V_profil.php', $data);
	}

	function simpan_edit(){
		$NIP 				= $this->session->userdata("id");
		$nama_pegawai 		= $this->input->post('nama_pegawai');
		$no_ktp 			= $this->input->post('no_ktp');
		$no_telepon 		= $this->input->post('no_telepon');
		$no_telepon_rumah 	= $this->input->post('no_telepon_rumah');
		$alamat 			= $this->input->post('alamat');
		$jenis_kelamin 		= $this->input->post('jenis_kelamin');
		$tanggal_lahir 		= $this->input->post('tanggal_lahir');
		$tempat_lahir 		= $this->input->post('tempat_lahir');
		$agama 				= $this->input->post('agama');
		$status_aktif 		= $this->input->post('status_aktif');
		

        $config['upload_path'] = './images/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '3072'; //maksimum besar file 3M
        $config['max_width']  = '5000'; //lebar maksimum 5000 px
        $config['max_height']  = '5000'; //tinggi maksimu 5000 px
        $config['remove_space'] = 'TRUE';
        $config['overwrite'] = 'TRUE';

        $this->load->library('upload', $config);
            $this->upload->do_upload('filefoto');
	        $gambar = $this->upload->data();

			$data = array(
	    		'nama_pegawai' => $nama_pegawai, 
	    		'no_ktp' => $no_ktp,
	    		'no_telepon' => $no_telepon,
	    		'no_telepon_rumah' => $no_telepon_rumah,
	    		'alamat_tinggal' => $alamat,
	    		'jenis_kelamin' => $jenis_kelamin,
	    		'tanggal_lahir' => $tanggal_lahir,
	    		'tempat_lahir' => $tempat_lahir,
	    		'agama' => $agama,
	    		'status_aktif' => $status_aktif,
	    		'foto_profil' =>$gambar['file_name']
	    	);
		
		
	    	$where=array('NIP'=>$NIP);
	    	$this->m_profil->update($where, $data, 'tbl_pegawai');

		
    	redirect('C_Profil/profil');
	}

	function save(){
		$data=$this->m_profil->save_pendidikan();
		echo json_encode($data);
	}

	function data_pendidikan()
	{
		$data=$this->m_profil->pendidikan();
		echo json_encode($data);
	}

	function data_golongan(){
		$data=$this->m_profil->get_golongan();
		echo json_encode($data);
	}

	function edit_pendidikan()
	{		
		$data=$this->m_profil->update_pendidikan();
		echo json_encode($data);
	}

	function delete(){
		$data=$this->m_profil->delete_pendidikan();
		echo json_encode($data);
	}

}