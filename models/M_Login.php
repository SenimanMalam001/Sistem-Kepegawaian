<?php
Class M_Login extends CI_Model
{
	function login($username, $password)
	{
        $db = $this->load->database('default', TRUE);
		$db->select('NIP, username, password, hak_akses');
		$db->from('tbl_autentikasi');
		$db->where('username = ' . "'" . $username . "'"); 
		$db->where('password = ' . "'" . $password . "'"); 
		$db->limit(1);

		$query = $db->get();

		//echo $query;

		if($query->num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
}