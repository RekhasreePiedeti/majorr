<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jadwal extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Halaman Dashboard');
						
		$data['jadwal'] = $this->j_data->show_data()->result();
		$this->load->view('jadwal_view', $data);
		
	}
	function __construct()
	{
		parent::__construct();
		$this->load->model('j_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	
	// Fungsi lain
	
}