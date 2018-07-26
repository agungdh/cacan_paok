<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_masuk extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->login != true) {
			redirect(base_url());
		}
	}

	function index() {
		$data['isi'] = 'surat_masuk/index';
		$data['js'] = 'surat_masuk/index_js';

		$this->load->view('template/template', $data);
	}

	function tambah() {
		$data['isi'] = 'surat_masuk/tambah';
		$data['js'] = 'surat_masuk/tambah_js';

		$this->load->view('template/template', $data);
	}

	function ubah($id) {
		$data['isi'] = 'surat_masuk/ubah';
		$data['js'] = 'surat_masuk/ubah_js';
		$data['data']['surat_masuk'] = $this->db->get_where('surat_masuk', ['id' => $id])->row();

		$this->load->view('template/template', $data);
	}

	function aksi_tambah() {
		foreach ($this->input->post('data') as $key => $value) {
			switch ($key) {
				case 'tanggal':
					$date=date_create($value);
					$data[$key] = date_format($date,"Y-m-d");
					break;
				case 'kategori':
					$this->db->like('kategori', $value);
					$kategori = $this->db->get('kategori')->row();
					if ($kategori != null) {
						$data['kategori_id'] = $kategori->id;
					} else {
						$this->db->insert('kategori', ['kategori' => ucwords($value)]);
						$data['kategori_id'] = $this->db->insert_id();
					}
					break;
				default:
					$data[$key] = $value;
					break;
			}
		}

		$berkas = $_FILES['berkas'];
		$data['file'] = $berkas['name'];

		$this->db->insert('surat_masuk', $data);

		move_uploaded_file($berkas['tmp_name'], 'uploads/')

		redirect(base_url('surat_masuk'));
	}

	function aksi_ubah() {
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

		foreach ($this->input->post('where') as $key => $value) {
			$where[$key] = $value;
		}

		$this->db->update('surat_masuk', $data, $where);

		redirect(base_url('surat_masuk'));
	}

	function aksi_hapus($id) {
		$surat_masuk = $this->db->get_where('surat_masuk', ['id' => $id])->row();

		$this->db->delete('surat_masuk', ['id' => $id]);

		$this->db->where(['noseri' => $surat_masuk->noseri]);
		$this->db->order_by('id', 'DESC');
		$peminjaman = $this->db->get('peminjaman')->row();

		$this->db->update('peminjaman', ['status' => 1], ['id' => $peminjaman->id]);

		redirect(base_url('surat_masuk'));
	}

	function ajax_jabatan() {
		$query = $this->db->query('SELECT kategori name
									FROM kategori
									WHERE kategori LIKE ?', ['%' . $this->input->get('kat') . '%']);
		echo json_encode($query->result());
	}

}