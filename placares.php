<?php
/*
Template Name: placares
*/
?>

<?php get_header(); ?>

		<!-- CONTENIDO -->
		<section class="contenido">

		<h2>PLACARES</h2>


		<section id="marcoContorno">
		<?php query_posts('category_name=placares&showposts=10'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="item entry" id="post-<?php the_ID(); ?>">
	
		<hgroup>
			<h1><?php the_title(); ?></h1>
		</hgroup>		
	
		<section class="separador"></section> <!-- End of separador  -->

		<p><?php the_content(); ?></p>
		

		</div>

		<?php endwhile; ?>
	    <?php endif; ?>
	 
		</section> <!-- End of marcoContorno -->




		</section> <!-- contenido -->

		<div class="clearfix"></div>

		<!-- CONTENIDO -->

<?php get_footer(); ?>