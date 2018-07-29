<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
     $this->load->model('M_Login', 'Model');
  }

  function first(){
    redirect('login', 'refresh');
  }

  function index()
  {
    if($this->session->userdata("username")){
        $this->load->view('V_Login/V_Sudah_login');
    }else{
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
        
        if($this->form_validation->run() == FALSE) {
            $this->load->view('V_Login/V_Login');
        }
    }
  }

  function check_database()
  {
    $username = $this->input->post('username');
    $password =$this->input->post('password');
    $result = $this->Model->login($username, $password);


    if($result)
    {
      $sess_array = array();
      foreach($result as $row)
      {
        $sess_array = array(
          'id' => $row->NIP,
          'username' => $row->username,
          'hak_akses' => $row->hak_akses,
          'statusku' => 'login'
        );
        $this->session->set_userdata($sess_array);
        
        $hak_akses = $this->session->userdata("hak_akses");

        if($hak_akses == "Admin"){
          redirect('admin/profil/kepegawaian', 'refresh');
        }else{
          redirect('profil', 'refresh');
        }
      }
    }
  }

  function sudah_login(){
    $this->load->view('V_Login/V_Sudah_login');
  }

  function logout(){
    $this->session->sess_destroy();
    redirect('login', 'refresh');
  }

}