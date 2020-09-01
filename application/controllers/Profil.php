<?php

class Profil extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Pengguna_model');
	}

	public function index()
	{

	}



	public function kontak()
	{
		$data['judul'] = 'Kontak';

		$this->load->view('templates/header', $data);
		$this->load->view('profil/V_kontak');
		$this->load->view('templates/footer');
	}

	public function visimisi()
	{
		$data['judul'] = 'Visi dan Misi';

		$this->load->view('templates/header', $data);
		$this->load->view('profil/V_visimisi');
		$this->load->view('templates/footer');
	}

	public function sejarah()
	{
		$data['judul'] = 'Sejarah';

		$this->load->view('templates/header', $data);
		$this->load->view('profil/V_sejarah');
		$this->load->view('templates/footer');
	}

	public function tugasfungsi()
	{
		$data['judul'] = 'Tugas dan Fungsi';

		$this->load->view('templates/header', $data);
		$this->load->view('profil/V_tugasfungsi');
		$this->load->view('templates/footer');
	}

	public function strukturorganisasi()
	{
		$data['judul'] = 'Struktur Organisasi';

		$this->load->view('templates/header', $data);
		$this->load->view('profil/V_strukturorganisasi');
		$this->load->view('templates/footer');
	}

	public function informasipejabat()
	{
		$data['judul'] = 'Informasi Pejabat';

		$this->load->view('templates/header', $data);
		$this->load->view('profil/V_informasipejabat');
		$this->load->view('templates/footer');
	}

	public function lokasikontak()
	{
		$data['judul'] = 'Lokasi dan Kontak';

		$this->load->view('templates/header', $data);
		$this->load->view('profil/V_lokasikontak');
		$this->load->view('templates/footer');
	}

	public function foto()
	{
		$data['judul'] = 'Galeri Foto';

		$this->load->view('templates/header', $data);
		$this->load->view('profil/V_foto');
		$this->load->view('templates/footer');
	}
}
