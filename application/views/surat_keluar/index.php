<div class="app-title">
  <div>
    <h1><i class="fa fa-envelope"></i> Surat Keluar</h1>
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
          <?php
          if ($this->session->level == 'a') {
            ?>
              <p><a class="btn btn-primary icon-btn" href="<?php echo base_url('surat_keluar/tambah'); ?>"><i class="fa fa-plus"></i>Surat Keluar</a></p>
            <?php
          }
          ?>
        </div>
        <table class="table table-hover table-bordered datatable">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Surat Masuk</th>
              <th>No Surat</th>
              <th>Kategori</th>
              <th>Tujuan</th>
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
            foreach ($this->db->get('surat_keluar')->result() as $item) {
              ?>
              <tr>
                <td><?php echo $pustaka->tanggalIndo($item->tanggal); ?></td>
                <td><a href="javascript:void(0)" onclick="suratMasuk('<?php echo $item->id_surat_masuk != null ? $item->id_surat_masuk : 0 ?>')"><?php echo $item->id_surat_masuk != null ? $this->db->get_where('surat_masuk', ['id_surat_masuk' => $item->id_surat_masuk])->row()->nosurat : '-'; ?></a></td>
                <td><?php echo $item->nosurat; ?></td>
                <td><?php echo $this->db->get_where('kategori', ['id_kategori' => $item->id_kategori])->row()->kategori; ?></td>
                <td><?php echo $item->tujuan; ?></td>
                <td><?php echo $item->perihal; ?></td>
                <td><a href="<?php echo base_url('tools/download_keluar/' . $item->id_surat_keluar); ?>"><?php echo $item->file; ?></a></td>
                <?php
                if ($this->session->level == 'a') {
                  ?>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="<?php echo base_url('surat_keluar/ubah/' . $item->id_surat_keluar); ?>" data-toggle="tooltip" title="Ubah"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-primary" href="javascript:void(0)" onclick="hapus('<?php echo $item->id_surat_keluar; ?>')" data-toggle="tooltip" title="Hapus"><i class="fa fa-trash"></i></a>
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

<!-- Modal Status -->
<div class="modal fade" id="modalSuratMasuk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Data Surat Masuk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body" id="modalmbodi"></div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>