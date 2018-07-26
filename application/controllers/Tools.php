<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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

}