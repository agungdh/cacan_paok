<div class="app-title">
  <div>
    <h1><i class="fa fa-envelope"></i> Surat Masuk</h1>
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
          <?php
          if ($this->session->level == 'a') {
            ?>
              <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('surat_masuk/tambah'); ?>"><i class="fa fa-plus"></i>Surat Masuk</a></p>
            <?php
          }
          ?>
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
              <?php
              if ($this->session->level == 'a') {
                ?>
                  <th>Proses</th>
                <?php
              }
              ?>
            </tr>
          </thead>
          <tbody>
            <?php
            foreach ($this->db->get('surat_masuk')->result() as $item) {
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
            ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>