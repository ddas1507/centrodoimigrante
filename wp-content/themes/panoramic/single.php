<?php 
get_header(); 
/*
template name: Página de Posts
*/

?>
	<!-- BEGIN .page-header -->
	<div class="page-header clearfix">
		
		<div class="page-header-inner clearfix">
		
		<div class="page-title">	
			<h2><?php the_title(); ?> single.php</h2>
			<div class="page-title-block"></div>
		</div>
		
		<div class="breadcrumbs">
			<p><a href="index.php">Home</a> &#187; <?php the_title(); ?></p>
		</div>
		
		</div>
		
	<!-- END .page-header -->
	</div>
	<!-- BEGIN .content-wrapper -->
	<div class="content-wrapper page-content-wrapper clearfix">
		
		<!-- BEGIN .main-content -->
		<div class="main-content page-content">
			
			<!-- BEGIN .inner-content-wrapper -->
			<div class="inner-content-wrapper">
				
				<!-- BEGIN .blog-entry -->
				<div class="blog-entry clearfix">
					<?php $posts = new WP_Query("cat=3");?>
					<?php while ($posts->have_posts()): $posts->the_post(); ?>

					<div class="blog-info">
						<div class="blog-date">
							<h3><?php the_time(__('j')) ?> <span><?php the_time(__('F')) ?></span></h3>
						</div>
						<ul class="blog-meta">
							<li><strong></strong><?php the_author_posts_link() ?></li>
							<li><strong></strong><?php the_category(); ?></li>
							<li><strong></strong>&nbsp;</li>
						</ul>
					</div>
					
					<div class="blog-content">	
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
						<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="news-excerpt"><?php echo get_excerpt2(); ?></p>

					</div>

				<?php endwhile; // end of the loop. ?>
				
				<!-- END .blog-entry -->
				</div>
				
				<div class="pagination-wrapper">
					<a class="selected" href="#">1</a>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">></a>
				</div>
				
				<div class="clearboth"></div>
			
			<!-- END .inner-content-wrapper -->
			</div>
			
		<!-- END .main-content -->
		</div>
		
		<!-- BEGIN .sidebar-right -->
		<div class="sidebar-right page-content">

			<!-- BEGIN .content-block -->
			<div class="content-block">
				<?php query_posts('post_type=attributes'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<h3 class="block-title"><?php the_field('titulo_do_bloco_agenda');?></h3>
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
				
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
				<?php query_posts('post_type=attributes'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<li><a href="<?php the_field('url_da_categoria_1');?>"><?php the_field('titulo_da_categoria_1');?></a></li>
					<li><a href="<?php the_field('url_da_categoria_2');?>"><?php the_field('titulo_da_categoria_2');?></a></li>
					<li><a href="<?php the_field('url_da_categoria_3');?>"><?php the_field('titulo_da_categoria_3');?></a></li>
					<li><a href="<?php the_field('url_da_categoria_4');?>"><?php the_field('titulo_da_categoria_4');?></a></li>
					<li><a href="<?php the_field('url_da_categoria_5');?>"><?php the_field('titulo_da_categoria_5');?></a></li>
					<li><a href="<?php the_field('url_da_categoria_6');?>"><?php the_field('titulo_da_categoria_6');?></a></li>
					<li><a href="<?php the_field('url_da_categoria_7');?>"><?php the_field('titulo_da_categoria_7');?></a></li>
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
				</ul>				
			<!-- END .content-block -->	
			</div>
		<!-- END .sidebar-right -->
		</div>
	
	<!-- END .content-wrapper -->
	</div>
	
<?php get_footer(); ?>