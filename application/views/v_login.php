<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Head BEGIN -->
<head>
  <meta charset="utf-8">
  <title>Belajar Bersama Maestro | Login</title>

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
<div class="main">
      <div class="container">
        
        <!-- BEGIN SIDEBAR & CONTENT -->
        <div class="row margin-bottom-40">
          <!-- BEGIN SIDEBAR -->
          <div class="sidebar col-md-3 col-sm-3">
            
          </div>
          <!-- END SIDEBAR -->

          <!-- BEGIN CONTENT -->
          <div class="col-md-9 col-sm-9">
            <h3>Login</h3>
			<?php echo validation_errors()?>
			<?=$this->session->flashdata('success_msg');?>
            <?=$this->session->flashdata('error_msg');?>
            <div class="content-form-page">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <form class="form-horizontal form-without-legend" role="form" action="<?=site_url('login')?>" method="POST">
                    <input type="hidden" name="submit" value="submit"/>
					  <div class="form-group">
                      <label for="email" class="col-lg-4 control-label">Username / Email <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="text" name="email" class="form-control" id="email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="password" class="col-lg-4 control-label">Password <span class="require">*</span></label>
                      <div class="col-lg-8">
                        <input type="password" name="password" class="form-control" id="password">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0">
                        <a href="<?=site_url('daftar');?>">Daftar</a>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-20">
                        <button type="submit" class="btn btn-blue">Login</button>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-lg-8 col-md-offset-4 padding-left-0 padding-top-10 padding-right-30">
                        <hr>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-md-4 col-sm-4 pull-right">
                  <div class="form-info">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- END CONTENT -->
        </div>
        <!-- END SIDEBAR & CONTENT -->
      </div>
    </div>
	<?php include 'v_footer.php';?>
</body>
</html>