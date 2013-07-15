<?php
/*
Template Name: quienes-somos
*/
?>

<?php get_header(); ?>

		<!-- CONTENIDO -->
		<section class="contenido">

		<div id="contCuad">

		<section id="cuad01">
		<?php query_posts('category_name=quienes-somos&showposts=1'); ?>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="item entry" id="post-<?php the_ID(); ?>">
		
		<hgroup>
		<h1><?php the_title(); ?></h1>
		</hgroup>
		
		<p><?php the_content(); ?></p>

		</div>

		<?php endwhile; ?>
	    <?php endif; ?>
		</section> <!-- End of cuad01 -->

		<section id="cuad02" class="mapa">
			<iframe width="430" height="250" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Concordia,+Gualeguaych%C3%BA,+Entre+R%C3%ADos&amp;aq=3&amp;oq=entre+rios,+co&amp;sll=-34.615853,-58.433298&amp;sspn=0.396697,0.726471&amp;ie=UTF8&amp;hq=&amp;hnear=Concordia,+Gualeguaych%C3%BA,+Entre+R%C3%ADos&amp;t=m&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe><br /><small></small>
		</section> <!-- End of cuad02 -->

	 	</div> <!-- End of contCuad -->


		</section> <!-- contenido -->

		<div class="clearfix"></div>

		<!-- CONTENIDO -->

<?php get_footer(); ?>