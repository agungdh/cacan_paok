<div class="app-title">
  <div>
    <h1><i class="fa fa-book"></i> Surat Masuk</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Surat Masuk</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <div class="tile-body">
        <div class="tile-title-w-btn">
          <h3 class="title">Data Surat Masuk</h3>
          <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('surat_masuk/tambah'); ?>"><i class="fa fa-plus"></i>Surat Masuk</a></p>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>No Surat</th>
              <th>Kategori</th>
              <th>Pengirim</th>
              <th>Perihal</th>
              <th>Berkas</th>
              <th>Proses</th>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($this->db->get('surat_masuk')->result() as $item) {
              ?>
              <tr>
                <td><?php echo $item->tanggal; ?></td>
                <td><?php echo $item->nosurat; ?></td>
                <td><?php echo $this->db->get_where('kategori', ['id' => $item->kategori_id])->row()->kategori; ?></td>
                <td><?php echo $item->pengirim; ?></td>
                <td><?php echo $item->perihal; ?></td>
                <td><a href="<?php echo base_url('tools/download_masuk/' . $item->id); ?>"><?php echo $item->file; ?></a></td>
                <td><?php echo $item->perihal; ?></td>
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