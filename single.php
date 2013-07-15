<?php get_header(); ?>

		<!-- CONTENIDO -->
		<section class="contenido">
		
		<h2>NOTICIAS PLACOSS</h2>

		<section id="novedades">
			
		<?php query_posts('category_name=noticias&showposts=1'); ?>			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="item entry" id="post-<?php the_ID(); ?>">
		
		<hgroup>
		<h1><?php the_title(); ?></h1>
		</hgroup>

		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

		</div>

		<?php endwhile; ?>
	    <?php endif; ?>

		</section> <!-- End of novedades -->


		</section> <!-- contenido -->

		<div class="clearfix"></div>

		<!-- CONTENIDO -->

<?php get_footer(); ?>