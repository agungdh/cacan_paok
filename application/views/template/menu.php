<li><a class="app-menu__item" href="<?php echo base_url(); ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>

<?php
if ($this->session->level == 'a') {
	?>
		<li><a class="app-menu__item" href="<?php echo base_url('kategori'); ?>"><i class="app-menu__icon fa fa-indent"></i><span class="app-menu__label">Kategori</span></a></li>
	<?php
}
?>

<li><a class="app-menu__item" href="<?php echo base_url('surat_masuk'); ?>"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Surat Masuk</span></a></li>

<li><a class="app-menu__item" href="<?php echo base_url('surat_keluar'); ?>"><i class="app-menu__icon fa fa-envelope"></i><span class="app-menu__label">Surat Keluar</span></a></li>

<?php
if ($this->session->level == 'a') {
	?>
		<li><a class="app-menu__item" href="<?php echo base_url('user'); ?>"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">User</span></a></li>
	<?php
}
?>