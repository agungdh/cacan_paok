<div class="app-title">
  <div>
    <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
  </div>
  <ul class="app-breadcrumb breadcrumb">
    <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
    <li class="breadcrumb-item">Dashboard</li>
  </ul>
</div>
<div class="row">
  <div class="col-md-12 col-lg-4">
    <div class="widget-small primary coloured-icon"><a href="<?php echo base_url('surat_masuk'); ?>"><i class="icon fa fa-envelope fa-3x"></i></a>
      <div class="info">
        <h4>Surat Masuk</h4>
        <p><b><?php echo count($this->db->get('surat_masuk')->result()); ?></b></p>
      </div>
    </div>
  </div>
  <div class="col-md-12 col-lg-4">
    <div class="widget-small info coloured-icon"><a href="<?php echo base_url('surat_keluar'); ?>"><i class="icon fa fa-envelope fa-3x"></i></a>
      <div class="info">
        <h4>Surat Keluar</h4>
        <p><b><?php echo count($this->db->get('surat_keluar')->result()); ?></b></p>
      </div>
    </div>
  </div>
  <div class="col-md-12 col-lg-4">
    <div class="widget-small warning coloured-icon"><a href="javascript:void(0)"><i class="icon fa fa-calendar fa-3x"></i></a>
      <div class="info">
        <h4>Tanggal</h4>
        <p><b><?php echo $pustaka->tanggalIndoString(date('Y-m-d')); ?></b></p>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <h3 class="tile-title">Grafik Surat Masuk dan Surat Keluar</h3>
      <div class="embed-responsive embed-responsive-16by9">
        <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
      </div>
    </div>
  </div>
</div>