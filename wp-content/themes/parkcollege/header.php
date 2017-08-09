<!DOCTYPE html>
<!--[if lt IE 7]> <html dir="ltr" lang="en-US" class="ie6"> <![endif]-->
<!--[if IE 7]>    <html dir="ltr" lang="en-US" class="ie7"> <![endif]-->
<!--[if IE 8]>    <html dir="ltr" lang="en-US" class="ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html dir="ltr" lang="en-US"> <!--<![endif]-->
<!-- BEGIN head -->
<head>

	<!--Meta Tags-->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
	<!--Title-->
	<title><?php bloginfo('name');?> | <?php bloginfo('description');?></title>

	<!--Stylesheets-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/style.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/colour.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/flexslider.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/superfish.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/prettyPhoto.css" type="text/css"  media="all" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/responsive.css" type="text/css"  media="all" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,700,900' rel='stylesheet' type='text/css'>

	<!--Favicon-->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />

	<!--JavaScript For IE-->	
	<!--[if (gte IE 6)&(lte IE 8)]>
		<script type="text/javascript" src="<?php //bloginfo('template_url');?>/js/selectivizr-min.js"></script>
	<![endif]-->

<!-- END head -->
</head>


<!-- BEGIN body -->
<body id="top" class="loading" <?php body_class();?>>
	<!-- BEGIN #header-wrapper -->
	<div id="header-wrapper">
		
		<!-- BEGIN #header-border -->
		<div id="header-border">
		
			<!-- BEGIN #header-top -->
			<div id="header-top" class="clearfix">
			
				<ul class="top-left-nav clearfix">
					<li><a href="blog.php">Blog</a><span>/</span></li>
					<li><a href="events.php">Events</a><span>/</span></li>
					<li><a href="typography.php">Jobs</a><span>/</span></li>
					<li><a href="courses.php">Courses</a><span>/</span></li>
					<li><a href="typography.php">Campus</a><span>/</span></li>
				</ul>
			
				<ul class="top-right-nav clearfix">
					<li class="phone-icon">2618 7979 / 0800 7785 599</li>
					<li class="email-icon"><?php bloginfo('admin_email');?></li>
				</ul>
			
			<!-- END #header-top -->
			</div>
			
			<!-- BEGIN #header-content-wrapper -->
			<div id="header-content-wrapper" class="clearfix">
			
				<div id="logo">
					<h1><a href="index.php"><span>Park</span>College</a></h1>
				</div>
			
				<ul class="social-icons clearfix">	
					<li><a target="_blank" href="#"><span class="gplus-icon"></span></a></li>
					<li><a target="_blank" href="#"><span class="twitter-icon"></span></a></li>
					<li><a target="_blank" href="#"><span class="facebook-icon"></span></a></li>
					<li><a target="_blank" href="#"><span class="pinterest-icon"></span></a></li>
					<li><a target="_blank" href="#"><span class="flickr-icon"></span></a></li>
				</ul>
			
			<!-- END #header-content-wrapper -->
			</div>
		
			<!-- BEGIN #main-menu-wrapper -->
			<div id="main-menu-wrapper" class="clearfix">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' )); ?>
		
				<div class="menu-search-button"></div>
				<form method="get" action="#" class="menu-search-form">
					<input class="menu-search-field" type="text" onblur="if(this.value=='')this.value='To search, type and hit enter';" onfocus="if(this.value=='To search, type and hit enter')this.value='';" value="To search, type and hit enter" name="s" />
				</form>
		
			<!-- END #main-menu-wrapper -->
			</div>
		
		<!-- END #header-border -->
		</div>
	
	<!-- END #header-wrapper -->
	</div>