<?php

class Home extends CI_Controller {
	public function index()
	{
		$data['judul'] = 'DBMPR';
		$this->load->view('templates/header.php', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer.php');
	}
}
