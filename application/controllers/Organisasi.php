<?php

class Organisasi extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Pengguna_model');
	}

	public function index()
	{

	}

  public function sekretariat()
	{
		$data['judul'] = 'Sekretariat Dinas';

		$this->load->view('templates/header', $data);
		$this->load->view('organisasi/V_sekretariat');
		$this->load->view('templates/footer');
	}

  public function bidang()
  {
    $data['judul'] = 'Bidang';

    $this->load->view('templates/header', $data);
    $this->load->view('organisasi/V_bidang');
    $this->load->view('templates/footer');
  }

  public function uptd()
  {
    $data['judul'] = 'UPTD';

    $this->load->view('templates/header', $data);
    $this->load->view('organisasi/V_uptd');
    $this->load->view('templates/footer');
  }
	



}
