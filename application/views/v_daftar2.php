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
				<?php echo validation_errors();?>
				<!-- BEGIN FORM-->
				<div class="content-form-page">
					<div class="row">
						<div class="col-md-7 col-sm-7">
							<form action="<?=site_url('daftar/do_daftar');?>" class="form-horizontal form-without-legend" role="form" method="POST">
								<div class="form-group">
									<label class="col-lg-4 control-label" for="nama_siswa">Nama</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" name="nama_siswa" value="<?php echo $siswa['nama_siswa'];?>" disabled>
										</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label" for="tempat_lahir">Tempat Lahir</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" name="tempat_lahir" value="<?php echo $siswa['tempat_lahir'];?>" disabled>
										</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label" for="tanggal_lahir">Tanggal Lahir</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" name="tanggal_lahir" value="<?php echo get_tgl2($siswa['tanggal_lahir']);?>" disabled>
										</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label" for="nama_sekolah">Nama Sekolah</label>
										<div class="col-lg-8">
											<input type="text" class="form-control" name="nama_sekolah" value="<?php echo $sekolah['Nama'];?>" disabled>
										</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label" for="alamat_sekolah">Alamat Sekolah</label>
										<div class="col-lg-8">
											<textarea name="alamat_sekolah" class="form-control" rows="10" disabled>Jalan <?php echo $sekolah['Alamat_jalan'].', Desa/Kelurahan '.$sekolah['Desa_kelurahan'].', Kecamatan/Kelurahan '.$sekolah['Kecamatan'].', Kabupaten/Kota '.$sekolah['Kabupaten'].', Provinsi '.$sekolah['Provinsi'];?></textarea>
										</div>
								</div>
								<hr />
								<input type="hidden" name="nisn" value="<?php echo $siswa['nisn'];?>">
								<div class="form-group">
									<label class="col-lg-4 control-label" for="maestro">Maestro yang Ingin Diikuti<span class="require">*</span></label>
									<div class="col-lg-8">
										<select class="form-control select2me" name="maestro" required="required">
											<option value="">Pilih Maestro...</option>
											<?php if(isset ($maestro)): foreach ($maestro as $row ): ?>
											<option value="<?=$row->maestro_pop_nama;?>"><?=$row->maestro_pop_nama;?></option>
											<?php endforeach;endif;?>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label" for="email">Alamat E-mail<span class="require">*</span></label>
									<div class="col-lg-8">
										<input type="email" class="form-control" name="email_siswa" id="email_siswa" required="required">
										<span class="help-block">
											Masukkan Alamat E-mail yang valid</span>
									</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label" for="password">Password<span class="require">*</span></label>
										<div class="col-lg-8">
											<input type="password" class="form-control" name="password" id="password">
											<span class="help-block">
												Masukkan Password </span>
										</div>
								</div>
								<div class="form-group">
									<label class="col-lg-4 control-label" for="conf_password">Konfirmasi Password<span class="require">*</span></label>
										<div class="col-lg-8">
											<input type="password" class="form-control" name="conf_password" id="conf_password">
											<span class="help-block">
												Konfirmasi Password </span>
										</div>
								</div>
								<div class="form-actions">
									<div class="row">
										<div class="col-md-offset-3 col-md-9">
											<button type="submit" class="btn blue">Daftar</button>
										</div>
									</div>
								</div>
								<input type="hidden" name="submit" value="submit"/>
							</form>
						</div>
					</div>
				</div>
				<!-- END FORM -->
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