<?php
/**
 * The template for displaying all single posts.
 *
 * @package panoramic
 */

get_header(); ?>

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
	
		<div class="content-wrapper page-content-wrapper clearfix">
		<div class="main-content page-content">
		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'library/template-parts/content', 'single' ); ?>

			<?php panoramic_post_nav(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>
		</div>
		</div>


	</div><!-- #primary -->

<?php get_footer(); ?>
