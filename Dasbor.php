<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dasbor extends CI_Controller {
	
	// Index login
	public function index() {
		$data = array(	'title'	=> 'Halaman Dashboard');
						
		
		$data['mahasiswa2019'] = $this->m_data->show_data2019()->result();
		
		$this->load->view('dasbor_view', $data);
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