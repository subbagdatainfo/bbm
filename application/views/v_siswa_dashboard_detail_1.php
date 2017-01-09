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

<link href="<?=ASSETS_PATH;?>/lightbox/dist/ekko-lightbox.min.css" rel="stylesheet" type="text/css"/>
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
						<a href="<?=base_url('siswadb/detail');?>">Siswa</a>
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
								<img src="<?=ASSETS_PATH;?>/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
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
								<div class="profile-usertitle-job">
									<?=get_tgl2($row->tanggal_lahir);?>
								</div>
								<div class="profile-usertitle-job">
									<?=$row->nama_sekolah;?>
								</div>
								<hr />
								<div class="profile-usertitle-job">
									Maestro yang Dipilih : <br />
									<?=$row->maestro;?>
								</div>
								<br /><br /><br />
								<div class="profile-usertitle-job">
									<a href="<?=base_url('siswadb/edit');?>" class="btn green-haze">Edit Data</a>
								</div>
							</div>
							<!-- END SIDEBAR USER TITLE -->
							<?php endforeach;endif;?>
						</div>
						<!-- END PORTLET MAIN -->
					</div>
					<!-- END BEGIN PROFILE SIDEBAR -->
					
					<!-- BEGIN PROFILE CONTENT -->
					<div class="profile-content">
						<div class="row">
							<div class="col-md-6">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Daftar Riwayat Hidup</span>
										</div>
									</div>
									<div class="portlet-body">
										<div class="row number-stats margin-bottom-30">
										<?php foreach ($dokumen as $row):?>
											<img src="<?=KONTEN_PATH.'/'.$row->url;?>" height="320" width="240">
										<?php endforeach;?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Dokumen Prestasi</span>
										</div>
									</div>
									<div class="portlet-body">
										<div class="row number-stats margin-bottom-30">
										<?php foreach ($dokumen as $row):?>
											<img src="<?=KONTEN_PATH.'/'.$row->url;?>" height="320" width="240">
										<?php endforeach;?>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Foto Karya</span>
										</div>
									</div>
									<div class="portlet-body">
										<?php foreach ($foto as $row):?>
											<img src="<?=KONTEN_PATH.'/'.$row->url;?>" height="320" width="240">
										<?php endforeach;?>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="portlet light">
									<div class="portlet-title tabbable-line">
										<div class="caption caption-md">
											<i class="icon-globe theme-font hide"></i>
											<span class="caption-subject font-blue-madison bold uppercase">Video</span>
										</div>
									</div>
									<div class="portlet-body">
										<div class="row number-stats margin-bottom-30">
										<?php foreach ($youtube as $row):?>
											<a href="<?php echo $row->url;?>" data-toggle="lightbox" data-gallery="mixedgallery" class="col-sm-4" style="margin-bottom:10px;">
											<img src="<?=ASSETS_PATH.'/youtube.png';?>" class="img-responsive" width="200px" height="100px">
											</a>
										<?php endforeach;?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END PROFILE CONTENT -->
				
				</div>
				
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
<script src="<?=ASSETS_PATH;?>/lightbox/dist/ekko-lightbox.min.js"></script>
<script>
jQuery(document).ready(function() {       
   Metronic.init(); // init metronic core components
Layout.init(); // init current layout
QuickSidebar.init(); // init quick sidebar
Demo.init(); // init demo features
   TableEditable.init();
   Profile.init(); // init page demo

   // delegate calls to data-toggle="lightbox"
				$(document).delegate('*[data-toggle="lightbox"]:not([data-gallery="navigateTo"])', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							if (window.console) {
								return console.log('Checking our the events huh?');
							}
						},
						onNavigate: function(direction, itemIndex) {
							if (window.console) {
								return console.log('Navigating '+direction+'. Current item: '+itemIndex);
							}
						}
					});
				});

				//Programatically call
				$('#open-image').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});
				$('#open-youtube').click(function (e) {
					e.preventDefault();
					$(this).ekkoLightbox();
				});

				$(document).delegate('*[data-gallery="navigateTo"]', 'click', function(event) {
					event.preventDefault();
					return $(this).ekkoLightbox({
						onShown: function() {
							var a = this.modal_content.find('.modal-footer a');
							if(a.length > 0) {
								a.click(function(e) {
									e.preventDefault();
									this.navigateTo(2);
								}.bind(this));
							}
						}
					});
				});
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>