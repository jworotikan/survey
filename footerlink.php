<!-- JS Global Compulsory -->
	<script type="text/javascript" src="plugins/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="plugins/jquery/jquery-migrate.min.js"></script>
	<script type="text/javascript" src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- JS Implementing Plugins -->
	<script type="text/javascript" src="plugins/back-to-top.js"></script>
	<script type="text/javascript" src="plugins/smoothScroll.js"></script>
	<script type="text/javascript" src="plugins/jquery.parallax.js"></script>
	<script type="text/javascript" src="plugins/fancybox/source/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="plugins/image-hover/js/touch.js"></script>
	<script type="text/javascript" src="plugins/image-hover/js/modernizr.js"></script>
	<script type="text/javascript" src="plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
	<script type="text/javascript" src="plugins/revolution-slider/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script type="text/javascript" src="plugins/revolution-slider/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!-- JS Customization -->
	<script type="text/javascript" src="js/custom.js"></script>
	<!-- JS Page Level -->
	<script type="text/javascript" src="js/app.js"></script>
	<script type="text/javascript" src="js/fancy-box.js"></script>
	<script type="text/javascript" src="js/owl-carousel.js"></script>
	<script type="text/javascript" src="js/revolution-slider.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function() {
			App.init();
			App.initParallaxBg();
			FancyBox.initFancybox();
			OwlCarousel.initOwlCarousel();
			RevolutionSlider.initRSfullWidth();
		});
	</script>
	<!--[if lt IE 9]>
	<script src="assets/plugins/respond.js"></script>
	<script src="assets/plugins/html5shiv.js"></script>
	<script src="assets/plugins/placeholder-IE-fixes.js"></script>
	<![endif]-->