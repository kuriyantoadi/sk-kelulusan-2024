<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller {

  public function __construct()
	{
			parent::__construct();
			$this->load->model('M_login');
      $this->load->model('M_admin');

      // session login
			if ($this->session->userdata('siswa') != true) {
				$url = base_url('Login');
				redirect($url);
			}
	}

//Login User
  public function index()
  {
    $this->load->view('login_tekno');
  }

//Login Tekno
  public function dashboard_tekno()
  {
    $ses_id = $this->session->userdata('ses_id');
    $data['tampil'] = $this->M_admin->siswa_detail_tekno($ses_id);
    $data['profil_sekolah'] = $this->M_admin->profil_sekolah();

    $this->load->view('template/header-siswa.php', $ses_id);
    $this->load->view('siswa_tekno/dashboard', $data);
    $this->load->view('template/footer-siswa.php');
  }

  public function cetak_tekno()
  {
    $ses_id = $this->session->userdata('ses_id');
    $data['tampil'] = $this->M_admin->siswa_detail_tekno($ses_id);

    $this->load->view('admin/print_tekno', $data);
    
  }

  public function logout_tekno()
  {
    $this->session->sess_destroy();
    $url = base_url();
    redirect('Login/siswa_tekno');
  }
  //Login Tekno Akhir


  //Login Bismen awal
    public function dashboard_bismen()
    {
      $ses_id = $this->session->userdata('ses_id');
      $data['tampil'] = $this->M_siswa->dashboard_bismen($ses_id);

      $this->load->view('template/header-siswa.php');
      $this->load->view('siswa_bismen/dashboard', $data);
      $this->load->view('template/footer-siswa.php');

    }

    public function cetak_bismen()
    {
      $ses_id = $this->session->userdata('ses_id');
      $data['tampil'] = $this->M_siswa->dashboard_bismen($ses_id);

      $this->load->view('siswa_bismen/print', $data);
    }

    public function logout_bismen()
    {
      $this->session->sess_destroy();
      $url = base_url();
      redirect('Login/siswa_bismen');
    }

}
