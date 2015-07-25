<?php get_header(); ?>

		<!-- CONTENIDO -->
		<section class="contenido">

			<a href="">
				<div class="cuadro">
					
				<?php query_posts('category_name=noticias&showposts=1'); ?>	
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

				<div class="item entry" id="post-<?php the_ID(); ?>">
				<div class="itemhead">
				<h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				
				</div>

					<p><?php the_content('ver m&aacute;s &raquo;'); ?></p>

				</div>

				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>

				</div> <!-- End of cuadro -->
		    </a>

		    <div class="cuadroMovil">
					
				<ul>
					<?php wp_list_pages('title_li=');?>
				</ul>

			</div> <!-- End of cuadroMovil -->

		</section>

		<div class="clearfix"></div>
		<!-- CONTENIDO -->

<?php get_footer(); ?>