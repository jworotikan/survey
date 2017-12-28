<?php
	$webconfig = $db_conn->query("SELECT * FROM dbsite_config order by id");
		while($dataweb=$webconfig->fetch_array())  {;
?>

<title><?php echo $dataweb['site_name'];?></title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo $dataweb['favico'];?>">
	<link rel="stylesheet" href="assets/css/newstyle.css">
	<!-- Web Fonts -->
	<link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

	<!-- CSS Global Compulsory -->
	<link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
	
	<link rel="stylesheet" href="assets/css/style.css">

	<!-- CSS Header and Footer -->
	<link rel="stylesheet" href="assets/css/headers/header-v6.css">
	<link rel="stylesheet" href="assets/css/footer-v1.css">

	<!-- CSS Implementing Plugins -->
	<link rel="stylesheet" href="assets/plugins/animate.css">
	<link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
	<link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/plugins/fancybox/source/jquery.fancybox.css">
	<link rel="stylesheet" href="assets/plugins/image-hover/css/img-hover.css">
	<link rel="stylesheet" href="assets/plugins/revolution-slider/rs-plugin/css/settings.css" type="text/css" media="screen">
	<!--[if lt IE 9]><link rel="stylesheet" href="assets/assets/plugins/revolution-slider/rs-plugin/css/settings-ie8.css" type="text/css" media="screen"><![endif]-->

	<!-- CSS Page Style -->
	<link rel="stylesheet" href="assets/css/pages/page_about.css">
	<link rel="stylesheet" href="assets/css/pages/page_search.css">

	<!-- CSS Theme -->
	<link rel="stylesheet" href="assets/css/theme-colors/dark-red.css" id="style_color">
	<link rel="stylesheet" href="assets/css/theme-skins/dark.css">
	<link rel="stylesheet" href="assets/css/newstyle-imi.css">

	<!-- CSS Customization -->
	<link rel="stylesheet" href="assets/css/custom.css">
	<?php } ?>