<?php get_header();?>	
	<!-- BEGIN .slider -->
	<div class="slider clearfix">
		
		<ul class="slides slide-loader">
			<?php query_posts('post_type=attributes'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<li style="background:url(<?php the_field('primeira_imagem_do_slider');?>) no-repeat bottom center">
				
				<div class="flex-caption-wrapper">
					<div class="flex-caption">
						<p><?php the_field('descricao_um_primeira_da_imagem');?></p>
						<div class="clearboth"></div>
						<p><?php the_field('descricao_dois_primeira_da_imagem');?></p>
					</div>
				</div>
				
			</li>

			<li style="background:url(<?php the_field('segunda_imagem_do_slider');?>) no-repeat bottom center">
				
				<div class="flex-caption-wrapper">
					<div class="flex-caption">
						<p><?php the_field('descricao_um_segunda_da_imagem');?></p>
						<div class="clearboth"></div>
						<p><?php the_field('descricao_dois_segunda_da_imagem');?></p>
					</div>
				</div>
				
			</li>
			<li style="background:url(<?php the_field('terceira_imagem_do_slider');?>) no-repeat bottom center">
				
				<div class="flex-caption-wrapper">
					<div class="flex-caption">
						<p><?php the_field('descricao_um_terceira_da_imagem');?></p>
						<div class="clearboth"></div>
						<p><?php the_field('descricao_dois_terceira_da_imagem');?></p>
					</div>
				</div>
				
			</li>
			<?php endwhile; ?>
			<?php else : ?>
			<?php _e( '' ); ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>	


		</ul>
		
	<!-- END .slider -->
	</div>
	
	<div class="header-block-wrapper clearfix">
		
		<div class="header-block-inner">
			<?php query_posts('post_type=attributes'); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<a href="<?php the_field('url_bloco_1');?>" class="header-block-5 header-block-style-1 clearfix">
				<img src="<?php the_field('imagem_bloco_1');?>" alt="" />
				<h2><?php the_field('titulo_bloco_1');?></h2>
				<h4 style="margin-top: 10px;font-size: 12px;padding: 0 50px 0 50px;"><?php the_field('descricao_bloco_1');?></h4>
			</a>
			<a href="<?php the_field('url_bloco_2');?>" class="header-block-5 header-block-style-2 clearfix">
				<img src="<?php the_field('imagem_bloco_2');?>" alt="" />
				<h2><?php the_field('titulo_bloco_2');?></h2>
				<h4 style="margin-top: 10px;font-size: 12px;padding: 0 50px 0 50px;"><?php the_field('descricao_bloco_2');?></h4>
			</a>
			<a href="<?php the_field('url_bloco_3');?>" class="header-block-5 header-block-style-3 clearfix">
				<img src="<?php the_field('imagem_bloco_3');?>" alt="" />
				<h2><?php the_field('titulo_bloco_3');?></h2>
				<h4 style="margin-top: 10px;font-size: 12px;padding: 0 50px 0 50px;"><?php the_field('descricao_bloco_3');?></h4>
			</a>
			<?php endwhile; ?>
			<?php else : ?>
			<?php _e( '...' ); ?>
			<?php endif; ?>
			<?php wp_reset_query(); ?>	
		</div>
	
	</div>
	
	<!-- BEGIN .content-wrapper -->
	<div class="content-wrapper clearfix">
		
		<!-- BEGIN .content-wrapper-inner -->
		<div class="content-wrapper-inner clearfix">
		
		<!-- BEGIN .sidebar-left -->
		<div class="sidebar-left page-content">
			
			<!-- BEGIN .content-block -->
			<div class="content-block">
				
				<h3 class="block-title"><a href="#">Newsletter &raquo;</a></h3>
				<p>Sed turpis tortor ultricies non adipiscing ultrices in orci ut</p>
				
				<form method="get" action="#" class="course-finder-form clearfix">
					<input type="text" value="Email Address" name="email-address" />
					<input type="submit" value="Subscribe" />
				</form>
			
			<!-- END .content-block -->	
			</div>

			<!-- BEGIN .content-block -->
			<div class="content-block" style="padding: 0px;">
				<?php query_posts('post_type=attributes'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_field('url_espaço_publicitario');?>" ><img src="<?php the_field('espaco_publicitario');?>"></a>
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
				<!-- END .content-block -->
			</div>

			<!-- BEGIN .content-block -->
			<div class="content-block">
				
				<h3 class="block-title"><a href="http://www.flickr.com/photos/governoromalley/">Flickr Stream &raquo;</a></h3>
			
				<div class="flickr_badge_wrapper clearfix">
					<script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=6&amp;flickr_display=latest&amp;size=s&amp;layout=x&amp;source=user&amp;user=29479066@N07"></script>
				</div>
				
			<!-- END .content-block -->	
			</div>
		
		<!-- END .sidebar-left -->
		</div>
		
		<!-- BEGIN .center-content -->
		<div class="center-content page-content">
			
			<!-- BEGIN .content-block -->
			<div class="content-block">
				
				<h3 class="block-title"><a href="blog.php">Últimas Notícias</a></h3>
				
				<!-- BEGIN .slider-blocks -->
				<div class="slider-blocks clearfix">
					
					<!-- BEGIN .slides -->
					<ul class="slides slide-loader2">
						<!-- BEGIN .slides li -->
						<li>
							<!-- BEGIN .news-items -->
							<ul class="news-items">
									<?php $posts = new WP_Query("cat=3&showposts=3");?>
									<?php while ($posts->have_posts()): $posts->the_post(); ?>
									<li class="clearfix">
									<div class="news-image">
										<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
									</div>
									<div class="news-content">
										<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
										<p class="news-date"><?php the_time(__('j \d\e F \d\e Y')) ?></p>
										<p class="news-excerpt"><?php echo get_excerpt(); ?></p>
									</div>
								</li>
								<?php endwhile;?>
							<!-- END .news-items -->
							</ul>
							
						<!-- END .slides li -->
						</li>
					<!-- END .slides -->
					</ul>
					
				<!-- END .slider-blocks -->
				</div>
				
			<!-- END .content-block -->	
			</div>
		
			<!-- BEGIN .content-block -->
			<div class="content-block">
				
				<h3 class="block-title">
					<a href="#">Centro Integrado do Imigrante</a>
					<br /><span>Pronto para lhe atender</span>
				</h3>
				
				<div class="video-wrapper">
					<iframe height="215" src="http://player.vimeo.com/video/29521088?autoplay=0&amp;title=0&amp;byline=0&amp;portrait=0;"></iframe>
				</div>
				
				<p>Morbi quam arcu, sagittis sit amet gravida a, pretium id ligula. Sed pelle fermentum aliquam.</p>
				
			<!-- END .content-block -->	
			</div>
			
		<!-- END .center-content -->
		</div>
		
		<!-- BEGIN .sidebar-right -->
		<div class="sidebar-right page-content">

			<!-- BEGIN .content-block -->
			<div class="content-block">
				
				<h3 class="block-title"><a href="events.php">Agenda &raquo;</a></h3>
				
				<ul class="event-list">
				
					<!-- BEGIN .event-wrapper -->
					<li class="event-wrapper clearfix">
					
						<div class="event-date">
							<div class="event-m">Feb</div>
							<div class="event-d">08</div>	
						</div>
				
						<div class="event-info">
							<h4><a href="events-single.php">In molestie congu enim sit amet</a></h4>
							<p>9:00am to 1:00pm</p>
						</div>
				
					<!-- END .event-wrapper -->
					</li>
				
					<!-- BEGIN .event-wrapper -->
					<li class="event-wrapper clearfix">
					
						<div class="event-date">
							<div class="event-m">Feb</div>
							<div class="event-d">08</div>	
						</div>
				
						<div class="event-info">
							<h4><a href="events-single.php">In molestie congu enim sit amet</a></h4>
							<p>9:00am to 1:00pm</p>
						</div>
				
					<!-- END .event-wrapper -->
					</li>
					
					<!-- BEGIN .event-wrapper -->
					<li class="event-wrapper clearfix">
					
						<div class="event-date">
							<div class="event-m">Feb</div>
							<div class="event-d">08</div>	
						</div>
				
						<div class="event-info">
							<h4><a href="events-single.php">In molestie congu enim sit amet</a></h4>
							<p>9:00am to 1:00pm</p>
						</div>
				
					<!-- END .event-wrapper -->
					</li>
				
				</ul>
				
			<!-- END .content-block -->	
			</div>			
			<!-- BEGIN .content-block -->
			<div class="content-block">
				
				<ul>
					<li><a href="#">Students</a></li>
					<li><a href="#">Teachers</a></li>
					<li><a href="#">Alumni</a></li>
					<li><a href="#">Parents</a></li>
				</ul>
				
			<!-- END .content-block -->	
			</div>
		
			
			<!-- BEGIN .content-block -->
			<div class="content-block">
					
				<h3 class="block-title"><a href="#">Sponsors &raquo;</a></h3>
				
					<!-- BEGIN .slider-blocks -->
					<div class="slider-blocks clearfix">

						<!-- BEGIN .slides -->
						<ul class="slides slide-loader2">

							<!-- BEGIN .slides li -->
							<li>
								
								<div class="center-images">
									<a href="#"><img src="<?php bloginfo('template_url');?>/images/03_sponsor_image.png" alt="" class="content-img" /></a>
									<a href="#"><img src="<?php bloginfo('template_url');?>/images/03_sponsor_image.png" alt="" class="content-img" /></a>
									<a href="#"><img src="<?php bloginfo('template_url');?>/images/03_sponsor_image.png" alt="" class="content-img" /></a>
								</div>
								
							<!-- END .slides li -->
							</li>

						<!-- END .slides -->
						</ul>

					<!-- END .slider-blocks -->
					</div>
				
			<!-- END .content-block -->
			</div>
		
		<!-- END .sidebar-right -->
		</div>
		
		<!-- END .content-wrapper-inner -->
		</div>
		
	<!-- END .content-wrapper -->
	</div>
	
	<?php get_footer();?>
	
	
	<!--JavaScript-->
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery-1.9.1.js"></script>
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/jquery-ui.js'></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/superfish.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/tinynav.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.uniform.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url');?>/js/scripts.js"></script>
	
<!-- END body -->
</body>
</html>