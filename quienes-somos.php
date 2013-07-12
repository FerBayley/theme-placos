<?php
/*
Template Name: quienes-somos
*/
?>

<?php get_header(); ?>

		<!-- CONTENIDO -->
		<section class="contenido">

			
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="item entry" id="post-<?php the_ID(); ?>">
		<div class="itemhead">
		<h1><?php the_title(); ?></h1>
		</div>
		<div class="storycontent">

		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

		</div>
		</div>
 	    <?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		<?php endwhile; ?>
	    <?php endif; ?>


		</section> <!-- contenido -->

		<div class="clearfix"></div>

		<!-- CONTENIDO -->

<?php get_footer(); ?>