<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use agungdh\Pustaka;

class Surat_keluar extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->login != true) {
			redirect(base_url());
		}
	}

	function index() {
		$data['isi'] = 'surat_keluar/index';
		$data['js'] = 'surat_keluar/index_js';
		$data['data']['pustaka'] = new Pustaka();

		$this->load->view('template/template', $data);
	}

	function tambah() {
		$data['isi'] = 'surat_keluar/tambah';
		$data['js'] = 'surat_keluar/tambah_js';

		$this->load->view('template/template', $data);
	}

	function ubah($id_surat_keluar) {
		$data['isi'] = 'surat_keluar/ubah';
		$data['js'] = 'surat_keluar/ubah_js';
		$data['data']['pustaka'] = new Pustaka();
		$data['data']['surat_keluar'] = $this->db->get_where('surat_keluar', ['id_surat_keluar' => $id_surat_keluar])->row();

		$this->load->view('template/template', $data);
	}

	function aksi_tambah() {
		foreach ($this->input->post('data') as $key => $value) {
			switch ($key) {
				case 'tanggal':
					$date=date_create($value);
					$data[$key] = date_format($date,"Y-m-d");
					break;
				default:
					$data[$key] = $value;
					break;
			}
		}

		$berkas = $_FILES['berkas'];
		$data['file'] = $berkas['name'];

		$this->db->insert('surat_keluar', $data);

		move_uploaded_file($berkas['tmp_name'], 'uploads/keluar/' . $this->db->insert_id());

		redirect(base_url('surat_keluar'));
	}

	function aksi_ubah() {
		foreach ($this->input->post('data') as $key => $value) {
			switch ($key) {
				case 'tanggal':
					$date=date_create($value);
					$data[$key] = date_format($date,"Y-m-d");
					break;
				case 'id_surat_masuk':
					if ($value != '') {
						$data[$key] = $value;
					} else {
						$data[$key] = null;
					}
					break;
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

		$berkas = $_FILES['berkas'];
		
		if ($berkas['size'] != 0) {
			$data['file'] = $berkas['name'];
		}

		$this->db->update('surat_keluar', $data, $where);

		if ($berkas['size'] != 0) {
			move_uploaded_file($berkas['tmp_name'], 'uploads/keluar/' . $where['id_surat_keluar']);
		}

		redirect(base_url('surat_keluar'));
	}

	function aksi_hapus($id_surat_keluar) {
		$this->db->delete('surat_keluar', ['id_surat_keluar' => $id_surat_keluar]);

		unlink('uploads/keluar/' . $id_surat_keluar);

		redirect(base_url('surat_keluar'));
	}
}