<!--[if lt IE 9]>
<script src="../../assets/global/plugins/respond.min.js"></script>
<script src="../../assets/global/plugins/excanvas.min.js"></script> 
<![endif]--> 
<?php
echo $this->Html->script(
        array(
            '/assets/global/plugins/jquery.min',
            '/assets/global/plugins/jquery-migrate.min',
            '/assets/global/plugins/bootstrap/js/bootstrap.min',
            '/assets/frontend/layout/scripts/back-to-top',
            '/assets/global/plugins/jquery-mixitup/jquery.mixitup.min',
            '/assets/frontend/pages/scripts/portfolio',
            '/assets/global/plugins/jquery.blockui.min',
            '/assets/global/plugins/uniform/jquery.uniform.min',
            '/assets/global/plugins/jquery.cokie.min',
            '/assets/global/plugins/jquery-validation/js/jquery.validate.min',
            '/assets/global/plugins/backstretch/jquery.backstretch.min',
            '/assets/global/plugins/fancybox/source/jquery.fancybox.pack',
            '/assets/global/plugins/select2/select2.min',
            '/assets/global/plugins/carousel-owl-carousel/owl-carousel/owl.carousel.min',
            '/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min',
            '/assets/global/plugins/slider-revolution-slider/rs-plugin/js/jquery.themepunch.tools.min',
            '/assets/frontend/pages/scripts/revo-slider-init',
            '/assets/global/scripts/metronic',
            '/assets/frontend/layout/scripts/layout',
            '/assets/admin/layout/scripts/demo',
            '/assets/admin/pages/scripts/login-soft',
            'moreless',
            'seat_booking',
            'custom.js',
	   'formValidationJs/formValidation'
        )
);
?>

<script type="text/javascript">
    jQuery(document).ready(function () {
        Metronic.init();
        Layout.init();
        Login.init();
        Demo.init();
        Layout.initOWL();
        RevosliderInit.initRevoSlider();
        Layout.initTwitter();
         Portfolio.init();
        Layout.initFixHeaderWithPreHeader(); /* Switch On Header Fixing (only if you have pre-header) */
        Layout.initNavScrolling();
           // init background slide images
       $.backstretch([
        "<?php echo $this->request->webroot; ?>assets/admin/pages/media/bg/1.jpg",
        "<?php echo $this->request->webroot; ?>assets/admin/pages/media/bg/2.jpg",
        "<?php echo $this->request->webroot; ?>assets/admin/pages/media/bg/3.jpg",
        "<?php echo $this->request->webroot; ?>assets/admin/pages/media/bg/4.jpg"
        ], {
          fade: 1000,
          duration: 8000
    }
    );
      
    });
</script>
<!-- END PAGE LEVEL JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>
<!-- End #wrapper -->


</body>
</html>


