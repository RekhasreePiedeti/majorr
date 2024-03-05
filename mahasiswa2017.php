<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa2017 extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Halaman Dashboard');
						
		
		$data['mahasiswa2017'] = $this->m_data->show_data2017()->result();
		
		$this->load->view('mahasiswa_view2017', $data);
	}
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	
	// Fungsi lain
	
}