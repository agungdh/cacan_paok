<div class="app-title">
  <div>
    <h1><i class="fa fa-book"></i> Surat Keluar</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Surat Keluar</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Surat Keluar</h3>
          <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('surat_keluar/tambah'); ?>"><i class="fa fa-plus"></i>Surat Keluar</a></p>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>No Surat</th>
              <th>Kategori</th>
              <th>Tujuan</th>
              <th>Perihal</th>
              <th>Berkas</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($this->db->get('surat_keluar')->result() as $item) {
              ?>
              <tr>
                <td><?php echo $this->pustaka->tanggal_indo($item->tanggal); ?></td>
                <td><?php echo $item->nosurat; ?></td>
                <td><?php echo $this->db->get_where('kategori', ['id' => $item->kategori_id])->row()->kategori; ?></td>
                <td><?php echo $item->tujuan; ?></td>
                <td><?php echo $item->perihal; ?></td>
                <td><a href="<?php echo base_url('tools/download_keluar/' . $item->id); ?>"><?php echo $item->file; ?></a></td>
                <td>
                  <div class="btn-group">
                    <a class="btn btn-primary" href="<?php echo base_url('surat_keluar/ubah/' . $item->id); ?>" data-toggle="tooltip" title="Ubah"><i class="fa fa-edit"></i></a>
                    <a class="btn btn-primary" href="#" onclick="hapus('<?php echo $item->id; ?>')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
                  </div>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>