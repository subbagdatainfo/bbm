<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Belajar Bersama Maestro | Pendaftaran</title>

  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <link rel="shortcut icon" href="favicon.ico">

  <!-- Fonts START -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700|PT+Sans+Narrow|Source+Sans+Pro:200,300,400,600,700,900&amp;subset=all" rel="stylesheet" type="text/css">
  <!-- Fonts END -->

  <!-- Global styles START -->          
  <link href="<?=ASSETS_PATH;?>/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?=ASSETS_PATH;?>/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Global styles END --> 
   
  <!-- Page level plugin styles START -->
  <link href="<?=ASSETS_PATH;?>/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet">
  <link href="<?=ASSETS_PATH;?>/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="<?=ASSETS_PATH;?>/global/plugins/slider-revolution-slider/rs-plugin/css/settings.css" rel="stylesheet">
  <!-- Page level plugin styles END -->

  <!-- Theme styles START -->
  <link href="<?=ASSETS_PATH;?>/global/css/components.css" rel="stylesheet">
  <link href="<?=ASSETS_PATH;?>/frontend/layout/css/style.css" rel="stylesheet">  
  <link href="<?=ASSETS_PATH;?>/frontend/pages/css/style-revolution-slider.css" rel="stylesheet"><!-- metronic revo slider styles -->
  <link href="<?=ASSETS_PATH;?>/frontend/layout/css/style-responsive.css" rel="stylesheet">
  <link href="<?=ASSETS_PATH;?>/frontend/layout/css/themes/red.css" rel="stylesheet" id="style-color">
  <link href="<?=ASSETS_PATH;?>/frontend/layout/css/custom.css" rel="stylesheet">
  <!-- Theme styles END -->
</head>
<!-- Head END -->

<!-- Body BEGIN -->
<body class="corporate">
	<?php include 'v_navigation.php';?>
    <!-- Header END -->
	<div class="container">    
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
			<!-- BEGIN SIDEBAR -->
			<div class="sidebar col-md-3 col-sm-3">
            
			</div>
			<!-- END SIDEBAR -->
			<!-- BEGIN CONTENT -->
			<div class="col-md-9 col-sm-9">
				<h3>Formulir Pendaftaran</h3>
				<?php echo validation_errors();
				$success_msg=$this->session->flashdata('success_msg');?>
				<?=$success_msg!=''?'<div class="alert alert-success">'.$success_msg.'</div>':'';?>
				<!-- BEGIN FORM-->
				<div class="content-form-page">
					<div class="row">
						<div class="col-md-7 col-sm-7">
							<form action="<?=site_url('daftar');?>" class="form-horizontal form-without-legend" role="form" method="POST">
								<div class="form-group">
									<label class="col-lg-4 control-label" for="Nisn">Nisn<span class="require">*</span></label>
									<div class="col-lg-8">
										<input type="text" class="form-control" name="Nisn" id="Nisn" required="required">
										<span class="help-block">
											Masukkan NISN </span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label" for="Tanggal_lahir">Tanggal Lahir<span class="require">*</span></label>
										<div class="col-lg-8">
											<input type="date" class="form-control" name="Tanggal_lahir" id="Tanggal_lahir" placeholder="yyyy-mm-dd">
											<span class="help-block">
												Masukkan Tanggal Lahir </span>
										</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn blue">Periksa Data</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- END FORM -->
			</div>
			<br />
							<p>
								BAGI CALON PESERTA YANG TIDAK DAPAT MENDAFTAR KARENA NISN TIDAK DITEMUKAN,
								HAL INI TERJADI KARENA DATA NISN BELUM DIVALIDASI OLEH PIHAK SEKOLAH. 
							</p>
							<p>
								Untuk itu calon peserta masih dapat mendaftar dengan cara melengkapi dan mengirimkan berkas kepada Panitia BBM yang berisi:<br />
								1. Daftar Riwayat Hidup <a href="<?=ASSETS_PATH;?>/FORMAT_DRH_BBM.doc" target="_blank">(download format)</a><br />
								2. Sertifikat/Bukti Prestasi di bidang Maestro yang dipilih<br />
								3. Foto/Video kemampuan seni sesuai dengan bidang Maestro yang dipilih
							</p>
							<p>
								Berkas dikirim melalui email bbm@kemdikbud.go.id dengan subjek : “pendaftaran bbm_nama siswa_nomor telp” paling lambat tanggal 17 Juni 2015.
							</p>
							<P>
								Contoh Subjek Email : PENDAFTARAN BBM_ABU BAKAR ALI_NASIRUN
							</p>
		</div>
	</div>
</body>
<!-- Load javascripts at bottom, this will reduce page load time -->
    <!-- BEGIN CORE PLUGINS (REQUIRED FOR ALL PAGES) -->
    <!--[if lt IE 9]>
    <script src="<?=ASSETS_PATH;?>/global/plugins/respond.min.js"></script>
    <![endif]--> 
    <script src="<?=ASSETS_PATH;?>/global/plugins/jquery.min.js" type="text/javascript"></script>
    <script src="<?=ASSETS_PATH;?>/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="<?=ASSETS_PATH;?>/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>      
    <script src="<?=ASSETS_PATH;?>/frontend/layout/scripts/back-to-top.js" type="text/javascript"></script>
    <!-- END CORE PLUGINS -->

    <!-- BEGIN PAGE LEVEL JAVASCRIPTS (REQUIRED ONLY FOR CURRENT PAGE) -->
    <script src="<?=ASSETS_PATH;?>/global/plugins/fancybox/source/jquery.fancybox.pack.js" type="text/javascript"></script><!-- pop up -->
    <script src="<?=ASSETS_PATH;?>/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min.js" type="text/javascript"></script><!-- slider for products -->

    <!-- BEGIN RevolutionSlider -->
  
    <script src="<?=ASSETS_PATH;?>/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.plugins.min.js" type="text/javascript"></script>
    <script src="<?=ASSETS_PATH;?>/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>
    <script src="<?=ASSETS_PATH;?>/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script> 
    <script src="<?=ASSETS_PATH;?>/frontend/pages/scripts/revo-slider-init.js" type="text/javascript"></script>
    <!-- END RevolutionSlider -->

    <script src="<?=ASSETS_PATH;?>/frontend/layout/scripts/layout.js" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {
            Layout.init();    
            Layout.initOWL();
            RevosliderInit.initRevoSlider();
            Layout.initTwitter();
            //Layout.initNavScrolling();
        });
    </script>
    <!-- END PAGE LEVEL JAVASCRIPTS -->
</html>