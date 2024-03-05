<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	public function index() {
		$data = array(	'title'	=> 'Halaman Dashboard');
		$this->load->view('about_view', $data);
	}
}