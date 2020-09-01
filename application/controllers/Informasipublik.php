<?php

class Informasipublik extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Pengguna_model');
	}

	public function index()
	{

	}

  public function dasarhukum()
	{
		$data['judul'] = 'Dasar Hukum';

		$this->load->view('templates/header', $data);
		$this->load->view('informasipublik/V_dasarhukum');
		$this->load->view('templates/footer');
	}

  public function daftarinformasipublik()
  {
    $data['judul'] = 'Daftar Informasi Publik';

    $this->load->view('templates/header', $data);
    $this->load->view('informasipublik/V_daftarinformasipublik');
    $this->load->view('templates/footer');
  }

  public function rencanapengadaan()
  {
    $data['judul'] = 'Recana Pengadaan';

    $this->load->view('templates/header', $data);
    $this->load->view('informasipublik/V_rencanapengadaan');
    $this->load->view('templates/footer');
  }

  public function permintaaninformasi()
  {
    $data['judul'] = 'Permintaan Informasi';

    $this->load->view('templates/header', $data);
    $this->load->view('informasipublik/V_permintaaninformasi');
    $this->load->view('templates/footer');
  }

  public function eppid()
  {
    $data['judul'] = 'e-PPID';

    $this->load->view('templates/header', $data);
    $this->load->view('informasipublik/V_eppid');
    $this->load->view('templates/footer');
  }



}
