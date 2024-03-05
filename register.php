<?php
defined('BASEPATH') or exit('No direct script access allowed');

class register extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('r_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index()
	{
		$data = array(	'title'	=> 'Halaman Register');

		$data['ci_informaticcenter'] = $this->r_data->show_data()->result();
		$this->load->view('register_view', $data);
	}
	
	function add()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[12]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required|matches[password]');

		if ($this->form_validation->run() == false) {
			$this->load->view('register_view');
		} else {

				$nama = $this->input->post('nama');
				$email = $this->input->post('email');
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$data = array(
					'nama' => $nama,
					'email' => $email,
					'username' => $username,
					'password' => md5($password)
					);

			$this->db->insert('users', $data);

			$this->session->set_flashdata('message', ' <div class="alert alert-success" style="margin-top: 0px">
			Data has been added.</div>');

			redirect(base_url('login'));
		}
	}
}