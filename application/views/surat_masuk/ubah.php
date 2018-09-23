<div class="app-title">
  <div>
    <h1><i class="fa fa-edit"></i> Surat Masuk</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Surat Masuk</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Ubah Surat Masuk</h3>
      <div class="tile-body">
        <form method="post" action="<?php echo base_url('surat_masuk/aksi_ubah'); ?>" enctype=multipart/form-data>

          <input type="hidden" name="where[id_surat_masuk]" value="<?php echo $data['surat_masuk']->id_surat_masuk; ?>">

          <input type="hidden" name="data[id_user]" value="<?php echo $this->session->id_user; ?>">

          <div class="form-group">
            <label class="control-label">No Surat</label>
            <input class="form-control" type="text" required placeholder="Masukan No Surat" name="data[nosurat]" value="<?php echo $data['surat_masuk']->nosurat; ?>">
          </div>

          <div class="form-group">
            <label class="control-label">Tanggal</label>
            <input class="form-control datepicker" type="text" required placeholder="Masukan Tanggal" name="data[tanggal]" value="<?php echo $pustaka->tanggalIndo($data['surat_masuk']->tanggal); ?>">
          </div>

          <div class="form-group">
            <label class="control-label">Kategori</label>
            <select class="form-control select2" required name="data[id_kategori]">
              <?php
              foreach ($this->db->get('kategori')->result() as $item) {
                ?>
                <option <?php echo $item->id_kategori == $data['surat_masuk']->id_kategori ? 'selected' : null; ?> value="<?php echo $item->id_kategori; ?>"><?php echo $item->kategori; ?></option>
                <?php
              }
              ?>
            </select>
          </div>

          <div class="form-group">
            <label class="control-label">Pengirim</label>
            <input class="form-control" type="text" required placeholder="Masukan Pengirim" name="data[pengirim]" value="<?php echo $data['surat_masuk']->pengirim; ?>">
          </div>

          <div class="form-group">
            <label class="control-label">Perihal</label>
            <input class="form-control" type="text" required placeholder="Masukan Perihal" name="data[perihal]" value="<?php echo $data['surat_masuk']->perihal; ?>">
          </div>

          <div class="form-group">
            <label class="control-label">Berkas</label>
            <input class="form-control" type="file" name="berkas">
          </div>

          </div>
          <div class="tile-footer">
            <button id="simpan" class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>
            &nbsp;&nbsp;&nbsp;
            <a class="btn btn-secondary" href="<?php echo base_url('surat_masuk'); ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Batal</a> <input type="submit" style="visibility: hidden;">
          </div>
        </form>
    </div>
  </div>
</div>