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
				<ul class="top-right-nav clearfix">
					<?php query_posts('post_type=attributes'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<li class="phone-icon"><?php the_field('telefone');?></li>
						<li class="email-icon"><?php the_field('email');?></li>
					<?php endwhile; ?>
					<?php else : ?>
					<?php _e( '...' ); ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>	
				</ul>
			
		

			<!-- END #header-top -->
			</div>
			
			<!-- BEGIN #header-content-wrapper -->
			<div id="header-content-wrapper" class="clearfix">
			
				<div id="logo">
					<?php query_posts('post_type=attributes'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<a href="index.php"><img width="150px" src="<?php the_field('logo');?>"/></a>
					<?php endwhile; ?>
					<?php else : ?>
					<?php _e( '...' ); ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>						
				</div>
			

				<ul class="social-icons clearfix">
					<?php query_posts('post_type=attributes'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li>
						<a target="_blank" href="<?php the_field('twitter_url');?>">
							<span class="<?php the_field('twitter');?>"></span>
						</a>
					</li>
					<li>
						<a target="_blank" href="<?php the_field('facebook_url');?>">
							<span class="<?php the_field('facebook');?>"></span>
						</a>
					</li>
					<li>
						<a target="_blank" href="<?php the_field('google_plus_url');?>">
							<span class="<?php the_field('google');?>"></span>
						</a>
					</li>
					<li>
						<a target="_blank" href="<?php the_field('youtube_url');?>">
							<span class="<?php the_field('youtube');?>"></span>
						</a>
					</li>
					<?php endwhile; ?>
					<?php else : ?>
					<?php endif; ?>
					<?php wp_reset_query(); ?>	

				</ul>
			
			<!-- END #header-content-wrapper -->
			</div>
		
			<!-- BEGIN #main-menu-wrapper -->
			<div id="main-menu-wrapper" class="clearfix">
			<?php wp_nav_menu( array( 'theme_location' => 'main-menu' )); ?>
		
				<!--div class="menu-search-button"></div>
				<form method="get" action="<?php //echo esc_url( home_url( '/' ) ); ?>" class="menu-search-form">
					<input class="menu-search-field" type="search" onblur="if(this.value=='')this.value='To search, type and hit enter';" onfocus="if(this.value=='To search, type and hit enter')this.value='';" value="<?php //echo get_search_query(); ?>" name="s" />
				</form-->
		
			<!-- END #main-menu-wrapper -->
			</div>
		
		<!-- END #header-border -->
		</div>
	
	<!-- END #header-wrapper -->
	</div>