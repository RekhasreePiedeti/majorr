<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa2019 extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Halaman Dashboard');
						
		
		$data['mahasiswa2019'] = $this->m_data->show_data2019()->result();
		
		$this->load->view('mahasiswa_view2019', $data);
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