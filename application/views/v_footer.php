<!-- BEGIN PRE-FOOTER -->
    <div class="pre-footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN BOTTOM ABOUT BLOCK -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Belajar Bersama Maestro</h2>
            <p><a href="#">Beranda</a><br />
			<a href="#">Tentang Kami</a><br />
			<a href="#">Syarat & Ketentuan</a><br />
			<a href="#">Alur Pendaftaran</a><br />
			<a href="#">Login</a></p>
            <div class="photo-stream">
              <h2></h2>
              <ul class="list-unstyled">
                
              </ul>                    
            </div>
          </div>
          <!-- END BOTTOM ABOUT BLOCK -->

          <!-- BEGIN BOTTOM CONTACTS -->
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Hubungi Kami</h2>
            <address class="margin-bottom-40">
              Ditjen Kebudayaan, Jalan Jenderal Sudirman,<br>
              Komplek Kemdikbud RI Gd. E Lt. 9 Senayan - Jakarta<br>
              Telepon: 0812-8158-8528, 0857-2426-62511<br>
              Jam Kerja: 09.00 - 16.00<br>
              Email: <a href="mailto:bbm@kemdikbud.go.id">bbm@kemdikbud.go.id</a>
            </address>
          </div>
          <!-- END BOTTOM CONTACTS -->

          <!-- BEGIN TWITTER BLOCK --> 
          <div class="col-md-4 col-sm-6 pre-footer-col">
            <h2>Tautan</h2>
            <p><a href="http://kemdikbud.go.id/"><img src="<?=ASSETS_PATH;?>/img/footer_logo.png"></a>&nbsp;
				<a href="http://setjen.kemdikbud.go.id/pustekkom/"><img src="<?=ASSETS_PATH;?>/img/logo.png"></a>&nbsp;
			  <!--<a href="http://belajar.kemdikbud.go.id/"><img src="<?=ASSETS_PATH;?>/img/rumah_belajar.png" width="120"></a>-->
			</p>
          </div>
          <!-- END TWITTER BLOCK -->
        </div>
      </div>
    </div>
    <!-- END PRE-FOOTER -->

    <!-- BEGIN FOOTER -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <!-- BEGIN COPYRIGHT -->
          <div class="col-md-6 col-sm-6 padding-top-10">
            Copyright Kementerian Pendidikan dan Kebudayaan.
          </div>
          <!-- END COPYRIGHT -->
          <!-- BEGIN PAYMENTS -->
          <div class="col-md-6 col-sm-6">
            <ul class="social-footer list-unstyled list-inline pull-right">
              
            </ul>  
          </div>
          <!-- END PAYMENTS -->
        </div>
      </div>
    </div>
    <!-- END FOOTER -->
	
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