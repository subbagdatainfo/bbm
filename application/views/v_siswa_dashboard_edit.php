<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>Belajar Bersama Maestro | Daftar Siswa</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport"/>
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
	<link href="<?=ASSETS_PATH;?>/global/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL PLUGIN STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link rel="stylesheet" type="text/css" href="<?=ASSETS_PATH;?>/global/plugins/select2/select2.css"/>
	<link rel="stylesheet" type="text/css" href="<?=ASSETS_PATH;?>/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css"/>
	<link href="<?=ASSETS_PATH;?>/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/admin/pages/css/profile.css" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/admin/pages/css/tasks.css" rel="stylesheet" type="text/css"/>
	<!-- END PAGE LEVEL STYLES -->
	<!-- BEGIN THEME STYLES -->
	<link href="<?=ASSETS_PATH;?>/global/css/components.css" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/global/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/admin/layout/css/layout.css" rel="stylesheet" type="text/css"/>
	<link href="<?=ASSETS_PATH;?>/admin/layout/css/themes/darkblue.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="<?=ASSETS_PATH;?>/admin/layout/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
<body class="page-header-fixed page-quick-sidebar-over-content">
	<?php include 'v_header_dashboard.php';?>
	<!-- BEGIN CONTAINER -->
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<?php include 'v_nav_dashboard.php';?>
		<!-- END SIDEBAR -->
		<!-- BEGIN CONTENT -->
		<div class="page-content-wrapper">
			<div class="page-content">
				<!-- BEGIN PAGE HEADER-->
				<h3 class="page-title">
					Detail Siswa
				</h3>
				<div class="page-bar">
					<ul class="page-breadcrumb">
						<li>
							<i class="fa fa-home"></i>
							<a href="<?=base_url('siswadb/detail');?>">Home</a>
							<i class="fa fa-angle-right"></i>
						</li>
						<li>
							<a href="#">Detail Siswa</a>
						</li>
					</ul>

				</div>
				<!-- END PAGE HEADER-->
				<!-- BEGIN PAGE CONTENT-->
				<div class="row">
					<div class="col-md-12">
						<!-- BEGIN PROFILE SIDEBAR -->
						<div class="profile-sidebar">
							<!-- PORTLET MAIN -->
							<div class="portlet light profile-sidebar-portlet">
								<!-- SIDEBAR USERPIC -->
								<div class="profile-userpic">
									<?php foreach ($profpict as $row):?>
									<img src="<?=KONTEN_PATH.'/'.$row->url;?>" class="img-responsive" alt="">
								<?php endforeach;?>
								</div>
								<!-- END SIDEBAR USERPIC -->
								<?php if(isset ($siswa)): foreach ($siswa as $row ): ?>
									<!-- SIDEBAR USER TITLE -->
									<div class="profile-usertitle">
										<div class="profile-usertitle-name">
											<?=$row->nisn;?>
										</div>
										<div class="profile-usertitle-job">
											<?=$row->nama_siswa;?>
										</div>
									</div>
									<!-- END SIDEBAR USER TITLE -->
								</div>
								<!-- END PORTLET MAIN -->
							</div>
							<!-- END BEGIN PROFILE SIDEBAR -->
							<!-- BEGIN PROFILE CONTENT -->
							<div class="profile-content">
								<div class="row">
									<div class="col-md-12">
										<div class="portlet light">
											<div class="portlet-title tabbable-line">
												<div class="caption caption-md">
													<i class="icon-globe theme-font hide"></i>
													<span class="caption-subject font-blue-madison bold uppercase">Profil Siswa</span>
												</div>
												<ul class="nav nav-tabs">
													<li class="active">
														<a href="#tab_1_1" data-toggle="tab">Data Siswa</a>
													</li>
													<li>
														<a href="#tab_1_3" data-toggle="tab">Ubah Password</a>
													</li>
												</ul>
											</div>
											<div class="portlet-body">
												<div class="tab-content">
													<!-- PERSONAL INFO TAB -->
													<div class="tab-pane active" id="tab_1_1">
														<form role="form" action="#">
															<input type="hidden" name="nisn" value="<?=$row->nisn;?>" class="form-control" readonly/>
															<input type="hidden" name="nama_siswa" value="<?=$row->nama_siswa;?>" class="form-control" readonly/>
															<div class="form-group">
																<label class="control-label">Nama Sekolah</label>
																<input type="text" name="nama_sekolah" value="<?=$row->nama_sekolah;?>" class="form-control" readonly/>
															</div>
															<div class="form-group">
																<label class="control-label">Tanggal Lahir</label>
																<input type="text" name="tgl_lahir" value="<?=get_tgl2($row->tanggal_lahir);?>" class="form-control" readonly/>
															</div>
															<div class="form-group">
																<label class="control-label">Maestro yang Dipilih</label>
																<input type="text" name="maestro" value="<?=$row->maestro;?>" class="form-control" readonly/>
															</div>
															
														</form>
														<?php echo form_open('siswadb/edit_no_telp');?>
															<div class="form-group">
																<label class="control-label">No. Telepon</label>
																<input type="text" name="no_telp" class="form-control" value="<?=$row->no_telp;?>"/>
															</div>
															<button type="submit" name="submit" value="submit" class="btn green-haze">Simpan </button>
															<?php echo form_close();?>
														<hr />
														<?php echo form_open_multipart('siswadb/upload');?>
														<div class="form-group">
															<input type="hidden" name="jenis" value="profpict">
															<p><label class="control-label">Ubah Gambar Profil </label></p>
															<div class="fileinput fileinput-new" data-provides="fileinput">
																<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
																<div>
																	<span class="btn default btn-file">
																		<span class="fileinput-new">
																			Pilih Gambar </span>
																			<span class="fileinput-exists">Ubah </span>
																			<input type="file" name="userfile">
																		</span>
																		<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">Hapus </a>
																		<button type="submit" class="btn default fileinput-exists">
																						Simpan </button>
																	</div>
																</div>
															</div>
															<?php echo form_close();?>
															<hr />
															<?php echo form_open_multipart('siswadb/upload');?>
															<div class="form-group">
																<input type="hidden" name="jenis" value="drh">
																<p><label class="control-label">Lampirkan Daftar Riwayat Hidup </label></p>
																<div class="fileinput fileinput-new" data-provides="fileinput">
																	<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
																	</div>
																	<div>
																		<span class="btn default btn-file">
																			<span class="fileinput-new">
																				Pilih Berkas </span>
																				<span class="fileinput-exists">
																					Ubah </span>
																					<input type="file" name="userfile">
																				</span>
																				<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
																					Hapus </a>
																					<button type="submit" class="btn default fileinput-exists" >
																						Simpan </button>
																					</div>
																				</div>
																				<span><a href="<?=ASSETS_PATH;?>/FORMAT_DRH_BBM.doc" target="_blank">Unduh Format Daftar Riwayat Hidup</a></span>
																			</div>
																			<div class="clearfix margin-top-10">
																				<span>Maksimal 2 MB, dengan format .pdf, .jpg, .png</span>
																			</div>
																			<?php echo form_close();?>
															<hr />
															<?php echo form_open_multipart('siswadb/upload');?>
															<div class="form-group">
																<input type="hidden" name="jenis" value="dokumen">
																<p><label class="control-label">Lampirkan Dokumen Prestasi </label></p>
																<div class="fileinput fileinput-new" data-provides="fileinput">
																	<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
																	</div>
																	<div>
																		<span class="btn default btn-file">
																			<span class="fileinput-new">
																				Pilih Berkas </span>
																				<span class="fileinput-exists">
																					Ubah </span>
																					<input type="file" name="userfile">
																				</span>
																				<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
																					Hapus </a>
																					<button type="submit" class="btn default fileinput-exists" >
																						Simpan </button>
																					</div>
																				</div>
																			</div>
																			<div class="clearfix margin-top-10">
																				<span>Maksimal 2 MB, dengan format .pdf, .jpg, .png</span>
																			</div>
																			<?php echo form_close();?>
																			<hr />
																			<?php echo form_open_multipart('siswadb/upload');?>
																			<div class="form-group">
																				<input type="hidden" name="jenis" value="foto">
																				<p><label class="control-label">Lampirkan Foto Karya </label></p>
																				<div class="fileinput fileinput-new" data-provides="fileinput">
																					<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
																					</div>
																					<div>
																						<span class="btn default btn-file">
																							<span class="fileinput-new">
																								Pilih Berkas </span>
																								<span class="fileinput-exists">
																									Ubah </span>
																									<input type="file" name="userfile">
																								</span>
																								<a href="#" class="btn default fileinput-exists" data-dismiss="fileinput">
																									Hapus </a>
																								</div>
																								<button type="submit" class="btn default fileinput-exists">
																						Simpan </button>
																							</div>
																						</div>
																						<div class="clearfix margin-top-10">
																				<span>Maksimal 2 MB, dengan format .pdf, .jpg, .png</span>
																			</div>
																						<?php echo form_close();?>
																						<hr />
																						<?php echo form_open_multipart('siswadb/upload');?>
																						<div class="form-group">
																							<label class="control-label">Link URL video</label>
																							<input type="text" name="link" class="form-control"/>
																							<input type="hidden" name="jenis" value="youtube">
																							<br />
																							<button type="submit" class="btn green-haze">Simpan </button>
																							<a href="#" class="btn default">Batal </a>
																						</div>
																						<?php echo form_close();?>
																					</div>
																					<!-- END PERSONAL INFO TAB -->
																					<!-- CHANGE PASSWORD TAB -->
																					<div class="tab-pane" id="tab_1_3">
																						<form action="#">
																							<div class="form-group">
																								<label class="control-label">Password Lama</label>
																								<input type="password" name="oldpass" class="form-control"/>
																							</div>
																							<div class="form-group">
																								<label class="control-label">Password Baru</label>
																								<input type="password" name="newpass" class="form-control"/>
																							</div>
																							<div class="form-group">
																								<label class="control-label">Ulangi Password Baru</label>
																								<input type="password" name="renewpass" class="form-control"/>
																							</div>
																							<div class="margin-top-10">
																								<a href="#" class="btn green-haze">
																									Ubah Password </a>
																									<a href="#" class="btn default">
																										Cancel </a>
																									</div>
																								</form>
																							</div>
																							<!-- END CHANGE PASSWORD TAB -->
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- END PROFILE CONTENT -->
																</div>
															<?php endforeach;endif;?>
														</div>
														<!-- END PAGE CONTENT -->
														<div class="clearfix">
														</div>

														<div class="clearfix">
														</div>

														<div class="clearfix">
														</div>

														<div class="clearfix">
														</div>

														<div class="clearfix">
														</div>
													</div>	
												</div>
												<!-- END CONTENT -->
											</div>
											<!-- END CONTAINER -->
											<?php include 'v_footer_dashboard.php';?>
											<script>
												jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
TableEditable.init();
   Profile.init(); // init page demo
});
											</script>
											<!-- END JAVASCRIPTS -->
										</body>
										<!-- END BODY -->
										</html>