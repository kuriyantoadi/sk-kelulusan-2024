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

  public function password_tekno()
  {
    $ses_id = $this->session->userdata('ses_id');
    $data['tampil'] = $this->M_admin->siswa_detail_tekno($ses_id);
    $data['profil_sekolah'] = $this->M_admin->profil_sekolah();

    $this->load->view('template/header-siswa.php', $ses_id);
    $this->load->view('siswa_tekno/password', $data);
    $this->load->view('template/footer-siswa.php');
  }

  public function siswa_pass_up_tekno()
	{
		$id_siswa = $this->input->post('id_siswa');
		$pass = $this->input->post('password');
		$password = sha1($pass);

		$kode_siswa = array('id_siswa' => $id_siswa);

		$data_edit = array(
			'password' => $password
		);

		$this->M_admin->siswa_pass_up_tekno($data_edit, $kode_siswa);

		$this->session->set_flashdata('msg', '
						<div class="alert alert-warning border-0 bg-warning alert-dismissible fade show">
							<div class="text-white">Ubah Password Siswa Berhasil</div>
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						');
		redirect('C_siswa/dashboard_tekno/' . $id_siswa);
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
      $data['tampil'] = $this->M_admin->siswa_detail_bismen($ses_id);
      $data['profil_sekolah'] = $this->M_admin->profil_sekolah();

      $this->load->view('template/header-siswa.php', $ses_id);
      $this->load->view('siswa_bismen/dashboard', $data);
      $this->load->view('template/footer-siswa.php');

    }

    public function cetak_bismen()
    {
      $ses_id = $this->session->userdata('ses_id');
      $data['tampil'] = $this->M_admin->siswa_detail_bismen($ses_id);

      $this->load->view('admin/print_bismen', $data);
    }

    public function logout_bismen()
    {
      $this->session->sess_destroy();
      $url = base_url();
      redirect('Login/siswa_bismen');
    }

    public function password_bismen()
    {
      $ses_id = $this->session->userdata('ses_id');
      $data['tampil'] = $this->M_admin->siswa_detail_bismen($ses_id);
      $data['profil_sekolah'] = $this->M_admin->profil_sekolah();

      $this->load->view('template/header-siswa.php', $ses_id);
      $this->load->view('siswa_bismen/password', $data);
      $this->load->view('template/footer-siswa.php');
    }

    public function siswa_pass_up_bismen()
    {
      $id_siswa = $this->input->post('id_siswa');
      $pass = $this->input->post('password');
      $password = sha1($pass);

      $kode_siswa = array('id_siswa' => $id_siswa);

      $data_edit = array(
        'password' => $password
      );

      $this->M_admin->siswa_pass_up_bismen($data_edit, $kode_siswa);

      $this->session->set_flashdata('msg', '
              <div class="alert alert-warning border-0 bg-warning alert-dismissible fade show">
                <div class="text-white">Ubah Password Siswa Berhasil</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              ');
      redirect('C_siswa/dashboard_bismen/' . $id_siswa);
    }

}
