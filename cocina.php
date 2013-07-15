<?php
/*
Template Name: cocina
*/
?>

<?php get_header(); ?>

		<!-- CONTENIDO -->
		<section class="contenido">

		<h2>COCINAS</h2>

		<section class="marcoNota">
		<section id="marcoContorno" class="boxscroll">
		<?php query_posts('category_name=cocina&showposts=10'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="item entry" id="post-<?php the_ID(); ?>">
	
		<hgroup>
			<h3><?php the_title(); ?></h3>
		</hgroup>		
	
		<p><?php the_content(); ?></p>
		

		</div>

		<?php endwhile; ?>
	    <?php endif; ?>
	 
		</section> <!-- End of marcoContorno -->

	    </section> <!-- End of marcoNota -->


		</section> <!-- contenido -->

		<div class="clearfix"></div>

		<!-- CONTENIDO -->

<?php get_footer(); ?>