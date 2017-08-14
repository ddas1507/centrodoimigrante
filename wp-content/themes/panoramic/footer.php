	<div id="footer-wrapper-parceiros" style="margin-top: 5px;">
		
		<!-- BEGIN #footer -->
		<div id="footer">
			
			<div class="widget-title clearfix">
				<h4>Parceiros</h4>
				<?php query_posts('post_type=attributes'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<?php the_field('shortcode_partners');?>
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
			</div>

		<!-- END #footer -->
		</div>
	
	<!-- END #footer-wrapper -->
	</div>
	<div id="footer-wrapper">
		
		<!-- BEGIN #footer -->
		<div id="footer">
			
			<ul class="columns-4 clearfix">
				
				<li class="col">
					<div class="widget-title clearfix">
						<h4>Navegação</h4>
						<div class="widget-title-block"></div>
					</div>
						<?php wp_nav_menu( array( 'theme_location' => 'main-menu' )); ?>
				</li>
				
				<li class="col" style="margin: 0 13% 0 0;">
					<div class="widget-title clearfix">
						<?php query_posts('post_type=attributes'); ?>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<h4><?php the_field('titulo_do_bloco_de_blog');?></h4>
						<div class="widget-title-block"></div>
						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
					</div>
					
					<ul>
					<?php $posts = new WP_Query("cat=3&showposts=4");?>
					<?php while ($posts->have_posts()): $posts->the_post(); ?>
						<li ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
					<?php endwhile;?>
				<!-- END .news-items -->
					</ul>
					
				</li>
				
				<li class="col" style="width:25.7%">
					<?php query_posts('post_type=attributes'); ?>
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="widget-title clearfix">
							<h4><?php the_field('titulo_site_rodape');?></h4>
							<div class="widget-title-block"></div>
						</div>
					
						<p>
							<?php the_field('endereco_rodape');?><br />
							<?php the_field('bairro_rodape');?> - <?php the_field('cidade_rodape');?><br />
							<?php the_field('pais_rodape');?>
						</p>

						<p>
							<?php the_field('telefone_rodape_1');?><br />
							<?php the_field('telefone_rodape_2');?>
						</p>

						<p>
							<?php the_field('email_rodape_1');?><br />
							<?php the_field('email_rodape_2');?>
						</p>

						<?php endwhile; ?>
						<?php else : ?>
						<?php endif; ?>
						<?php wp_reset_query(); ?>
				</li>
			
			</ul>
			
			<div id="footer-bottom" class="clearfix">
				<?php query_posts('post_type=attributes'); ?>
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<p class="fl">&copy; Copyright - 
					<?php the_time(__('Y')) ?>
					<?php the_field('titulo_site_rodape');?> - 
					Todos os direitos reservados
					</p>
				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>
				<?php wp_reset_query(); ?>
				<p class="go-up fr"><a href="#top" class="scrollup">Top</a></p>
			</div>
			
		<!-- END #footer -->
		</div>
	
	<!-- END #footer-wrapper -->
	</div>