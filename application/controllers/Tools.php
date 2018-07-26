<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use Apfelbox\FileDownload\FileDownload;
class Tools extends CI_Controller {
	function __construct(){
		parent::__construct();

		if ($this->session->login != true) {
			redirect(base_url());
		}
	}

	function ajax_kategori() {
		$query = $this->db->query('SELECT kategori name
									FROM kategori
									WHERE kategori LIKE ?', ['%' . $this->input->get('kat') . '%']);
		echo json_encode($query->result());
	}

	function download_masuk($surat_masuk_id) {
		$surat_masuk = $this->db->get_where('surat_masuk', ['id' => $surat_masuk_id])->row();

		$fileDownload = FileDownload::createFromFilePath('uploads/masuk/' . $surat_masuk->id);
		$fileDownload->sendDownload($surat_masuk->file);
	}

}