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

	function download_masuk($id_surat_masuk) {
		$surat_masuk = $this->db->get_where('surat_masuk', ['id_surat_masuk' => $id_surat_masuk])->row();

		$fileDownload = FileDownload::createFromFilePath('uploads/masuk/' . $surat_masuk->id_surat_masuk);
		$fileDownload->sendDownload($surat_masuk->file);
	}

	function download_keluar($id_surat_keluar) {
		$surat_keluar = $this->db->get_where('surat_keluar', ['id_surat_keluar' => $id_surat_keluar])->row();

		$fileDownload = FileDownload::createFromFilePath('uploads/keluar/' . $surat_keluar->id_surat_keluar);
		$fileDownload->sendDownload($surat_keluar->file);
	}

}