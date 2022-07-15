<style>
	.slimScrollBar {
		background: none repeat scroll 0 0 gray !important;
		border-radius: 0;
		display: none;
		height: 702.936px;
		position: absolute;
		right: 1px;
		top: 145px;
		width: 10px !important;
		z-index: 99;
		opacity: 0.7 !important;
	}
</style>

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
	<!-- sidebar: style can be found in sidebar.less -->
	<section class="sidebar">
		<!-- Sidebar user panel -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url(); ?>assets/template/dist/img/user.png" class="img-circle" id="lblFtoUser3" alt="User Image">
			</div>
			<div class="pull-left info">
				<p id="lblNmUser3"><?php echo $this->session->userdata('nama'); ?></p>
				<a href="#"><i class="fa fa-circle text-success"></i>Online</a>
			</div>
		</div>

		<!-- sidebar menu: : style can be found in sidebar.less -->
		<ul class="sidebar-menu">
			<li class="header">Home</li>
			<li>
				<a href="<?php echo base_url('home'); ?>">
					<i class="fa fa-home"></i>
					<span class="tlt-menu"><b>Dashboard</b></span></a>
			</li>
			<?php 
				if($this->session->userdata('role')=='Admin'){
			?>
			<li class="header">MASTER</li>
			<li>
				<a href="<?php echo base_url('Siswa'); ?>">
					<i class="fa fa-group"></i>
					<span class="tlt-menu"><b>Siswa</b></span></a>
			</li>

			<li>
				<a href="<?php echo base_url('Kelas'); ?>">
					<i class="fa fa-building"></i>
					<span class="tlt-menu"><b>Kelas</b></span></a>
			</li>
			<!-- <li>
				<a href="<?php echo base_url('Spp'); ?>">
					<i class="fa fa-money"></i>
					<span class="tlt-menu"><b>Spp</b></span></a>
			</li> -->
			<li>
				<a href="<?php echo base_url('Petugas'); ?>">
					<i class="fa fa-user"></i>
					<span class="tlt-menu"><b>Petugas</b></span></a>
			</li>
			<?php
				}
			?>
			<?php
				if($this->session->userdata('role')=='Admin' || $this->session->userdata('role')=='Petugas'){
			?>
			<li class="header">TRANSAKSI</li>
			<li>
				<a href="<?php echo base_url('Pembayaran'); ?>">
					<i class="fa fa-dollar"></i>
					<span class="tlt-menu"><b>Entri Pembayaran</b></span></a>
			</li>
			<?php
				}
			?>
			<?php
				if($this->session->userdata('role')=='siswa'){
			?>
			<li class="header">MENU</li>
			<li>
				<a href="<?php echo base_url('Histori/pembayaran'); ?>">
					<i class="fa fa-clock-o"></i>
					<span class="tlt-menu"><b>Histori Pembayaran</b></span></a>
			</li>
			<?php
				}
			?>
			<li class="header">Laporan</li>
			<?php 
				if($this->session->userdata('role')=='Admin' || $this->session->userdata('role')=='Petugas'){
			?>
			<li>
				<a href="<?php echo base_url('Histori'); ?>">
					<i class="fa  fa-clock-o"></i>
					<span class="tlt-menu"><b>Histori Pembayaran</b></span></a>
			</li>
			<?php
				}
			?>
			<?php 
				if($this->session->userdata('role')=='Admin'){
			?>
			<li>
				<a href="<?php echo base_url('Laporan'); ?>">
					<i class="fa fa-book"></i>
					<span class="tlt-menu"><b>Laporan Pembayaran</b></span></a>
			</li>
			<?php
				}
			?>
		</ul>
		<!-- end MENU -->
	</section>
	<!-- /.sidebar -->
</aside>