<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route[''] = 'C_Login/first';

$route['login'] = 'C_Login';
$route['verifylogin'] = 'C_Login/check_database';
$route['loggedin'] = 'C_Login/sudah_login';
$route['logout'] = 'C_Login/logout';

$route['admin/profil/kepegawaian'] = 'C_Pegawai_Admin';
$route['admin/profil/detail/(:any)'] = 'C_Pegawai_Admin/detail/$1';
$route['admin/jabatan-struktural'] = 'C_Jabatan_Struktural';
$route['admin/surat-keputusan'] = 'SuratKeterangan';
$route['admin/surat-keputusan/upload'] = 'SuratKeterangan/uploadSK';
$route['admin/surat-tugas'] = 'C_Surat_Tugas';
$route['admin/surat-tugas/upload'] = 'C_Surat_Tugas/uploadSK';
$route['admin/penerimaan-cuti'] = 'C_CutiAdmin';
$route['admin/mutasi-pegawai'] = 'C_Permutasi_Pegawai';

$route['profil'] = 'C_profil/profil';
$route['surat-keputusan/(:any)'] = 'C_SuratKegiatan_Pegawai/index/$1';
$route['permohonan-cuti'] = 'C_CutiPegawai';
$route['cetak-surat-cuti/(:any)'] = 'C_CutiPegawai/cetak_surat/$1';
$route['kirim-email'] = 'C_CutiPegawai/sendMail';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
