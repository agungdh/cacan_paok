<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use agungdh\Pustaka;

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
		$data['data']['pustaka'] = new Pustaka();

		$this->load->view('template/template', $data);
	}

	function tambah() {
		$data['isi'] = 'surat_masuk/tambah';
		$data['js'] = 'surat_masuk/tambah_js';

		$this->load->view('template/template', $data);
	}

	function ubah($id_surat_masuk) {
		$data['isi'] = 'surat_masuk/ubah';
		$data['js'] = 'surat_masuk/ubah_js';
		$data['data']['pustaka'] = new Pustaka();
		$data['data']['surat_masuk'] = $this->db->get_where('surat_masuk', ['id_surat_masuk' => $id_surat_masuk])->row();

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
						$data['kategori_id_surat_masuk'] = $kategori->id_surat_masuk;
					} else {
						$this->db->insert('kategori', ['kategori' => ucwords($value)]);
						$data['kategori_id_surat_masuk'] = $this->db->insert_id();
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

		move_uploaded_file($berkas['tmp_name'], 'uploads/masuk/' . $this->db->insert_id());

		redirect(base_url('surat_masuk'));
	}

	function aksi_ubah() {
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
						$data['kategori_id_surat_masuk'] = $kategori->id_surat_masuk;
					} else {
						$this->db->insert('kategori', ['kategori' => ucwords($value)]);
						$data['kategori_id_surat_masuk'] = $this->db->insert_id();
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

		$this->db->update('surat_masuk', $data, $where);

		if ($berkas['size'] != 0) {
			move_uploaded_file($berkas['tmp_name'], 'uploads/masuk/' . $where['id_surat_masuk']);
		}

		redirect(base_url('surat_masuk'));
	}

	function aksi_hapus($id_surat_masuk) {
		$this->db->delete('surat_masuk', ['id_surat_masuk' => $id_surat_masuk]);

		unlink('uploads/masuk/' . $id_surat_masuk);

		redirect(base_url('surat_masuk'));
	}

	function ajax($id, $tanggalAwal = null, $tanggalAkhir = null) {
		$pustaka = new Pustaka();

		$sql = 'SELECT * FROM surat_masuk WHERE 1 ';

		if ($id != 0) {
			$sql .= ' AND id_kategori = ' . $id;
		}

		if ($tanggalAwal != null && $tanggalAkhir != null) {
			$tAwal = date('Y-m-d', strtotime($tanggalAwal));
			$tAkhir = date('Y-m-d', strtotime($tanggalAkhir));

			$sql .= " AND tanggal >= '" . $tAwal . "'";
			$sql .= " AND tanggal <= '" . $tAkhir . "'";
		}

		$surat_masuk = $this->db->query($sql)->result();

	    foreach ($surat_masuk as $item) {
	      ?>
	      <tr>
	        <td><?php echo $pustaka->tanggalIndo($item->tanggal); ?></td>
	        <td><?php echo $item->nosurat; ?></td>
	        <td><?php echo $this->db->get_where('kategori', ['id_kategori' => $item->id_kategori])->row()->kategori; ?></td>
	        <td><?php echo $item->pengirim; ?></td>
	        <td><?php echo $item->perihal; ?></td>
	        <td><a href="<?php echo base_url('tools/download_masuk/' . $item->id_surat_masuk); ?>"><?php echo $item->file; ?></a></td>
	        <?php
	        if ($this->session->level == 'a') {
	          ?>
	            <td>
	              <div class="btn-group">
	                <a class="btn btn-primary" href="<?php echo base_url('surat_masuk/ubah/' . $item->id_surat_masuk); ?>" data-toggle="tooltip" title="Ubah"><i class="fa fa-edit"></i></a>
	                <a class="btn btn-primary" href="javascript:void(0)" onclick="hapus('<?php echo $item->id_surat_masuk; ?>')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
	              </div>
	            </td>
	          <?php
	        }
	        ?>
	      </tr>
	      <?php
	    }
	}
}