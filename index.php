<?php get_header(); ?>

		<!-- CONTENIDO -->
		<section class="contenido">

			<a href="">
				<div class="cuadro">
					
					
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>

				<div class="item entry" id="post-<?php the_ID(); ?>">
				<div class="itemhead">
				<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
				
				</div>

					<p><?php the_content('Read more &raquo;'); ?></p>

				</div>

				<?php endwhile; ?>
				<?php else : ?>
				<?php endif; ?>

				</div> <!-- End of cuador -->
		    </a>

		</section>

		<div class="clearfix"></div>
		<!-- CONTENIDO -->

<?php get_footer(); ?>