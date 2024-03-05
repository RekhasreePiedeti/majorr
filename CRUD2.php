<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CRUD2 extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('j_data');
		$this->load->helper('url');
		$this->load->library('form_validation');
	}

	function index()
	{
		$data['ci_informaticcenter'] = $this->j_data->show_data()->result();
		$this->load->view('jadwal_view', $data);
	}

	function add()
	{
		$this->form_validation->set_rules('id_matkul', 'id_matkul', 'required|trim|numeric|exact_length[12]');
		$this->form_validation->set_rules('nama_matkul', 'nama_matkul', 'required|trim');
		$this->form_validation->set_rules('hari', 'hari', 'required|trim');
		$this->form_validation->set_rules('waktu', 'waktu', 'required|trim');
		$this->form_validation->set_rules('sks', 'sks', 'required|trim');
		$this->form_validation->set_rules('kurikulum', 'kurikulum', 'required|trim');
		$this->form_validation->set_rules('semester', 'semester', 'required|trim');
		$this->form_validation->set_rules('nip', 'nip', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('v_add_jadwal');
		} else {

			$data  = [
				'id_matkul' => $this->input->post('id_matkul', true),
				'nama_matkul' => $this->input->post('nama_matkul', true),
				'hari' => $this->input->post('hari', true),
				'waktu' => $this->input->post('waktu', true),
				'sks' => $this->input->post('sks', true),
				'kurikulum' => $this->input->post('kurikulum', true),
				'semester' => $this->input->post('semester', true),
				'nip' => $this->input->post('nip', true),
			];

			$this->db->insert('jadwal', $data);

			$this->session->set_flashdata('message', ' <div class="alert alert-success" style="margin-top: 0px">
			Data has been added.</div>');

			redirect(base_url('jadwal'));
		}
	}

	function delete($id_matkul)
	{

		$this->db->delete('jadwal', array('id_matkul' => $id_matkul));

		$this->session->set_flashdata('message', ' <div class="alert alert-success" style="margin-top: 0px">
			Successfully deleted.</div>');

		redirect(base_url('jadwal'));
	}
}