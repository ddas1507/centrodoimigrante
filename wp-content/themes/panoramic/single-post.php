<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package panoramic
 */

get_header(); ?>
    

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
            
			 <!-- Começa o Loop. -->
			 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			 <!-- O código a seguir testa se o post atual pertence à categoria 3 -->
			 <!-- Se pertence, a classe css da DIV será definida como "post-cat-three". -->
			 <!-- Se não, a classe da DIV será definida como "post". -->
			 <?php if ( in_category('3') ) { ?>
			           <div class="post-cat-three">
			 <?php } else { ?>
			           <div class="post">
			 <?php } ?>

			 <!-- Mostra o título como um link para o link permanente do post -->
			 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php //the_title(); ?></a></h2>

			 <!-- Mostra a data e um link para outros posts do mesmo autor. -->
				
				<!-- BEGIN .blog-entry -->
				<div class="blog-entry clearfix">
					
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
					
					<div class="blog-content blog-content-single">
						<a href="#"><?php the_post_thumbnail(); ?></a>
						<?php echo the_content(); ?>
						
					</div>

					
					<div class="clearboth"></div>
					
					<div id="respond">
						
						<h3 class="block-title"><?php get_comments_number();?></h3>
						
						<ul class="comments">

							<?php
								// If comments are open or we have at least one comment, load up the comment template
								if ( comments_open() || get_comments_number() ) :
									comments_template();
								endif;
							?>

						</ul>
						
					<!-- END #respond -->
					</div>
					
				<!-- END .blog-entry -->
				</div>
			 </div> <!-- Fecha a primeira DIV -->

			 <!-- Termina o Loop (mas repare no "else" - veja próxima linha) -->
			 <?php endwhile; else: ?>

			 <!-- O primeiro IF testou para ver se havia posts a serem mostrados -->
			 <!-- Este ELSE diz ao WordPress o que fazer se não houver nenhum -->
			 <p>Sorry, no posts matched your criteria.</p>

			 <!-- Término verdadeiro do Loop -->
			 <?php endif; ?>
		</div>
	<!-- END .content-wrapper -->
	</div>
	<!-- .content-area -->

<?php get_footer(); ?>