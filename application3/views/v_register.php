<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Maestro | Pendaftaran</title>

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
<div class="header">
      <div class="container">
        <a class="site-logo" href="#"><img src="<?=ASSETS_PATH;?>/img/footer_logo.png" alt="Kementerian Pendidikan dan Kebudayaan"></a>
        <!-- BEGIN NAVIGATION -->
        <?php include 'v_navigation.php';?>
        <!-- END NAVIGATION -->
      </div>
    </div>
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
		<!-- BEGIN FORM-->
		 <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal form-without-legend" role="form">
                    <div class="form-group">
					<label class="col-lg-4 control-label">Jenis Kegiatan <span class="require">*</span></label>
					<div class="col-lg-8">
						<select class="form-control">
							<option value="">Seni Musik</option>
							<option value="">Seni Rupa</option>
							<option value="">Seni Tari</option>
							<option value="">Seni Lukis</option>
							<option value="">Seni Pahat</option>
						</select>
						<span class="help-block">
							Jenis Kegiatan yang Ingin Diikuti </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">NISN <span class="require">*</span></label>
					<div class="col-lg-8">
						<input type="text" name="nisn" class="form-control" placeholder="NISN">
						<span class="help-block">
							Masukkan NISN </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">Nama <span class="require">*</span></label>
					<div class="col-lg-8">
						<input type="text" name="nama" class="form-control" placeholder="Nama Siswa">
						<span class="help-block">
							Masukkan Nama Siswa </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">Tanggal Lahir <span class="require">*</span></label>
					<div class="col-lg-8">
						<input type="text" name="tgl" class="form-control" placeholder="Tanggal Lahir Siswa">
						<span class="help-block">
							Masukkan Tanggal Lahir Siswa </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">Lampiran Keterangan Prestasi <span class="require">*</span></label>
					<div class="col-lg-8">
						<input type="file" name="prestasi" class="form-control fileinput-button"></input>
						<span class="help-block">
							Tipe file lampiran yang diperbolehkan untuk diunggah: PDF, DOC, JPEG dengan maksimal besar file 2MB.  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">Lampiran Dokumen Karya <span class="require">*</span></label>
					<div class="col-lg-8">
						<input type="file" name="karya" class="form-control fileinput-button"></input>
						<span class="help-block">
							Tipe file lampiran yang diperbolehkan untuk diunggah: PDF, DOC, JPEG dengan maksimal besar file 2MB.  </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">Username <span class="require">*</span></label>
					<div class="col-lg-8">
						<input type="text" name="username" class="form-control" placeholder="Username">
						<span class="help-block">
							Masukkan Username Siswa </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">Password <span class="require">*</span></label>
					<div class="col-lg-8">
						<input type="password" name="pass" class="form-control" placeholder="Password">
						<span class="help-block">
							Masukkan Password Siswa </span>
					</div>
				</div>
				<div class="form-group">
					<label class="col-lg-4 control-label">Konfirmasi Password <span class="require">*</span></label>
					<div class="col-lg-8">
						<input type="password" name="confirmpass" class="form-control" placeholder="Konfirmasi Password">
						<span class="help-block">
							Masukkan Ulang Password Siswa </span>
					</div>
				</div>
				<div class="form-actions">
					<div class="row">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn blue">Submit</button>
							<button type="button" class="btn default">Cancel</button>
						</div>
					</div>
				</div>
			</div>
			</form>
			</div>
			
		<!-- END FORM-->
		</div>
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