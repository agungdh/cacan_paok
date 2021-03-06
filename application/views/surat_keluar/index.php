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
      <h3 class="tile-title">Filter</h3>

      <div class="form-group">
        <label class="control-label">Kabupaten</label>
        <select class="form-control select2" name="id_kabupaten" id="id_kabupaten">
          <option value="0">Semua</option>
          <?php
          foreach ($this->db->get('kategori')->result() as $item) {
            ?>
            <option value="<?php echo $item->id_kategori; ?>"><?php echo $item->kategori; ?></option>
            <?php
          }
          ?>
        </select>
      </div>

      <div class="form-group">
        <label class="control-label">Tanggal</label>
        <input class="form-control" autocomplete="off" type="text" id="tanggal">
      </div>
      
    </div>
  </div>
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