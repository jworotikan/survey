<?php
	require 'config/conndb.php';
	require 'config/config.php';
?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<<<<<<< HEAD
	<?php
		//*include 'header2.php';
		include '2fas.php';
	?>
=======
<?php
	require 'headlink.php';
?>
>>>>>>> 32f7200971b5e75eed948c7bab048fa8b50f42d8

<body class="boxed-layout container dark">
	<div class="wrapper">
		
		<?php
			require 'header.php';
		?>

		<form action="#" class="sky-form">	
		<?php
			require 'qsttpe1.php';
		?>
		</form>

<<<<<<< HEAD
	<?php
	?>
=======
		<!--=== Footer Version 1 ===-->
		<div class="footer-v1">
			<div class="footer">
				<div class="container">
					<div class="row">
						<!-- About -->
						<div class="col-md-3 md-margin-bottom-40">
							<a href="index.html"><img id="logo-footer" class="footer-logo" src="assets/img/logo2-default.png" alt=""></a>
							<p>About Unify dolor sit amet, consectetur adipiscing elit. Maecenas eget nisl id libero tincidunt sodales.</p>
							<p>Duis eleifend fermentum ante ut aliquam. Cras mi risus, dignissim sed adipiscing ut, placerat non arcu.</p>
						</div><!--/col-md-3-->
						<!-- End About -->
>>>>>>> 32f7200971b5e75eed948c7bab048fa8b50f42d8

						<!-- Latest -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="posts">
								<div class="headline"><h2>Latest Posts</h2></div>
								<ul class="list-unstyled latest-list">
									<li>
										<a href="#">Incredible content</a>
										<small>May 8, 2014</small>
									</li>
									<li>
										<a href="#">Best shoots</a>
										<small>June 23, 2014</small>
									</li>
									<li>
										<a href="#">New Terms and Conditions</a>
										<small>September 15, 2014</small>
									</li>
								</ul>
							</div>
						</div><!--/col-md-3-->
						<!-- End Latest -->

						<!-- Link List -->
						<div class="col-md-3 md-margin-bottom-40">
							<div class="headline"><h2>Useful Links</h2></div>
							<ul class="list-unstyled link-list">
								<li><a href="#">About us</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Portfolio</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Latest jobs</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Community</a><i class="fa fa-angle-right"></i></li>
								<li><a href="#">Contact us</a><i class="fa fa-angle-right"></i></li>
							</ul>
						</div><!--/col-md-3-->
						<!-- End Link List -->

						<!-- Address -->
						<div class="col-md-3 map-img md-margin-bottom-40">
							<div class="headline"><h2>Contact Us</h2></div>
							<address class="md-margin-bottom-40">
								25, Lorem Lis Street, Orange <br />
								California, US <br />
								Phone: 800 123 3456 <br />
								Fax: 800 123 3456 <br />
								Email: <a href="mailto:info@anybiz.com" class="">info@anybiz.com</a>
							</address>
						</div><!--/col-md-3-->
						<!-- End Address -->
					</div>
				</div>
			</div><!--/footer-->

			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<p>
								2015 &copy; All Rights Reserved.
								<a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a>
							</p>
						</div>

						<!-- Social Links -->
						<div class="col-md-6">
							<ul class="footer-socials list-inline">
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
										<i class="fa fa-skype"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
										<i class="fa fa-google-plus"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linkedin">
										<i class="fa fa-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
										<i class="fa fa-pinterest"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
										<i class="fa fa-dribbble"></i>
									</a>
								</li>
							</ul>
						</div>
						<!-- End Social Links -->
					</div>
				</div>
			</div><!--/copyright-->
		</div>
		<!--=== End Footer Version 1 ===-->
	</div><!--/End Wrapepr-->

<?php
	require 'footlink.php';
?>
</body>
</html>
