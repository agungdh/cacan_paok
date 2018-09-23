<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->login != true) {
			redirect(base_url());
		}
	}

	function index() {
		$data['isi'] = 'user/index';
		$data['js'] = 'user/index_js';

		$this->load->view('template/template', $data);
	}

	function tambah() {
		$data['isi'] = 'user/tambah';
		$data['js'] = 'user/tambah_js';

		$this->load->view('template/template', $data);
	}

	function ubah($id_user) {
		$data['isi'] = 'user/ubah';
		$data['js'] = 'user/ubah_js';
		$data['data']['user'] = $this->db->get_where('user', ['id_user' => $id_user])->row();

		$this->load->view('template/template', $data);
	}

	function aksi_tambah() {
		foreach ($this->input->post('data') as $key => $value) {
			switch ($key) {
				case 'password':
					$data[$key] = hash('sha512', $value);
					break;
				
				default:
					$data[$key] = $value;
					break;
			}
		}

		$this->db->insert('user', $data);

		redirect(base_url('user'));
	}

	function aksi_ubah() {
		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = $value;
		}

		foreach ($this->input->post('where') as $key => $value) {
			$where[$key] = $value;
		}

		$this->db->update('user', $data, $where);

		redirect(base_url('user'));
	}

	function aksi_ubah_password() {
		foreach ($this->input->post('data') as $key => $value) {
			$data[$key] = hash('sha512', $value);
		}

		foreach ($this->input->post('where') as $key => $value) {
			$where[$key] = $value;
		}

		$this->db->update('user', $data, $where);

		redirect(base_url('user'));
	}

	function aksi_hapus($id_user) {
		$this->db->delete('user', ['id_user' => $id_user]);

		redirect(base_url('user'));
	}
}