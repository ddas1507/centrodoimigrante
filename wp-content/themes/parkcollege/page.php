<?php 
/*
	template name: default
*/
get_header(); 
?>
	<!-- BEGIN .page-header -->
	<div class="page-header clearfix">
		
			<div class="page-header-inner clearfix">
			
			<div class="page-title">	
				<h2><?php the_title(); ?></h2>
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
		

		<div class="main-content page-content">
			<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?> 
			<?php the_content(); ?> 
			<?php endwhile; ?>
			<?php else: ?>
			<p>Não existe conteúdo nessa página.</p>
			<?php endif; ?>
		</div>
	<!-- END .content-wrapper -->
	</div>
	<!-- .content-area -->

<?php get_footer(); ?>
