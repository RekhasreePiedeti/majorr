<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Halaman Dashboard');
						
		$data['dosen'] = $this->d_data->show_data()->result();
		$this->load->view('dosen_view', $data);
	}
	function __construct()
	{
		parent::__construct();
		$this->load->model('d_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	
	// Fungsi lain
	
}