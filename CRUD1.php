<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUD1 extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('d_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index()
	{
		$data['ci_informaticcenter'] = $this->d_data->show_data()->result();
		$this->load->view('dosen_view', $data);
	}
	function add()
	{
		$this->form_validation->set_rules('nip', 'nip', 'required|trim|numeric|exact_length[12]');
		$this->form_validation->set_rules('nama_dosen', 'nama_dosen', 'required|trim');
		$this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required|trim');
		$this->form_validation->set_rules('kontak', 'kontak', 'required|trim');
		$this->form_validation->set_rules('alamat', 'alamat', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('v_add_dosen');
		} else {

			$data  = [
				'nip' => $this->input->post('nip', true),
				'nama_dosen' => $this->input->post('nama_dosen', true),
				'jenis_kelamin' => $this->input->post('jenis_kelamin', true),
				'kontak' => $this->input->post('kontak', true),
				'alamat' => $this->input->post('alamat', true),
			];

			$this->db->insert('dosen', $data);

			$this->session->set_flashdata('message', ' <div class="alert alert-success" style="margin-top: 0px">
			Data has been added.</div>');

			redirect(base_url('dosen'));
		}
	}

	function delete($nip)
	{

		$this->db->delete('dosen', array('nip' => $nip));

		$this->session->set_flashdata('message', ' <div class="alert alert-success" style="margin-top: 0px">
			Successfully deleted.</div>');

		redirect(base_url('dosen'));
	}
}