<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use agungdh\Pustaka;

class Kategori extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->login != true) {
			redirect(base_url());
		}
	}

	function index() {
		$data['isi'] = 'kategori/index';
		$data['js'] = 'kategori/index_js';
		$data['data']['pustaka'] = new Pustaka();

		$this->load->view('template/template', $data);
	}

	function tambah() {
		$data['isi'] = 'kategori/tambah';
		$data['js'] = 'kategori/tambah_js';

		$this->load->view('template/template', $data);
	}

	function ubah($id_kategori) {
		$data['isi'] = 'kategori/ubah';
		$data['js'] = 'kategori/ubah_js';
		$data['data']['kategori'] = $this->db->get_where('kategori', ['id_kategori' => $id_kategori])->row();

		$this->load->view('template/template', $data);
	}

	function aksi_tambah() {
		foreach ($this->input->post('data') as $key => $value) {
			switch ($key) {
				default:
					$data[$key] = $value;
					break;
			}
		}

		$this->db->insert('kategori', $data);

		redirect(base_url('kategori'));
	}

	function aksi_ubah() {
		foreach ($this->input->post('data') as $key => $value) {
			switch ($key) {
				default:
					$data[$key] = $value;
					break;
			}
		}

		foreach ($this->input->post('where') as $key => $value) {
			switch ($key) {
				default:
					$where[$key] = $value;
					break;
			}
		}

		$this->db->update('kategori', $data, $where);

		redirect(base_url('kategori'));
	}

	function aksi_hapus($id_kategori) {
		$this->db->delete('kategori', ['id_kategori' => $id_kategori]);

		redirect(base_url('kategori'));
	}
}