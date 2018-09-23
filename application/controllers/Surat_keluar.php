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

	function ajax_modal($id) {
		$pustaka = new Pustaka;
		
		$surat_masuk = $this->db->get_where('surat_masuk', ['id_surat_masuk' => $id])->row();

		?>
		<table class="table">
			<thead>
				<tr>
	              <th>Tanggal</th>
	              <th>No Surat</th>
	              <th>Kategori</th>
	              <th>Pengirim</th>
	              <th>Perihal</th>
	              <th>Berkas</th>
	            </tr>
			</thead>
			<tbody>
				<tr>
	                <td><?php echo $pustaka->tanggalIndo($surat_masuk->tanggal); ?></td>
	                <td><?php echo $surat_masuk->nosurat; ?></td>
	                <td><?php echo $this->db->get_where('kategori', ['id_kategori' => $surat_masuk->id_kategori])->row()->kategori; ?></td>
	                <td><?php echo $surat_masuk->pengirim; ?></td>
	                <td><?php echo $surat_masuk->perihal; ?></td>
	                <td><a href="<?php echo base_url('tools/download_masuk/' . $surat_masuk->id_surat_masuk); ?>"><?php echo $surat_masuk->file; ?></a></td>
	              </tr>
			</tbody>
		</table>
		<?php
	}
}