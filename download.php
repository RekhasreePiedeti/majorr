<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class download extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Halaman Dashboard');

		$this->load->view('download_view', $data);
	}
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	
	// Fungsi lain
	
}