<?php
/*
Template Name: contacto
*/
?>

<?php get_header(); ?>

		<!-- CONTENIDO -->
		<section class="contenido">

		<h2>CONTACTO</h2>

		<section id="marcoContorno">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="item entry" id="post-<?php the_ID(); ?>">
	
		<!-- <hgroup>
			<h1><?php the_title(); ?></h1>
		</hgroup> -->	

		<section id="infoInstitucional">
			<p>
				<span>Empresa:</span>
				<br>
				En PLACOSS fabricamos muebles a medida en los cuales combinamos conceptos de arquitectura y diseño de vanguardia, con materiales de alta calidad y última tecnología.
			</p>
			<br>
			<p>
				<span>Objetivos:</span>
				<br>
				Satisfacer las necesidades específicas de nuestros clientes ofreciéndoles un producto creativo y funcional para cada espacio.
			</p>
			<p>
				Tel: 0343 4.314.327
				<br>
				Email: <a href="mailto:contacto@placoss.com.ar">contacto@placoss.com.ar</a>
				<br>
				Paran&aacute; - Entre R&iacute;os - Argentina
			</p>
		</section> <!-- End of infoInstitucional -->
	
		<section class="separador"></section> <!-- End of separador  -->

		<!-- <h3 class="tituloMapas">Como llegar</h3> -->

		<!-- <section id="maps">
			<iframe width="90%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.ar/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Paran%C3%A1,+Entre+R%C3%ADos&amp;aq=0&amp;oq=parana+entre+&amp;sll=-34.615853,-58.433299&amp;sspn=0.355446,0.637207&amp;ie=UTF8&amp;hq=&amp;hnear=R%C3%ADo+Paran%C3%A1&amp;t=m&amp;ll=-32.976412,-59.639282&amp;spn=1.612834,3.845215&amp;z=8&amp;iwloc=A&amp;output=embed"></iframe>
		</section> <!-- End of mapa -->
	
	
		<div id="contenidoSocial">
			<a href="#">
				<div class="btnSocial" id="mapa">
					Como llegar
				</div>
			</a>
			
			<a href="#">
				<div class="btnSocial" id="face">
					Facebook
				</div>
			</a>
		</div> <!-- End of contenidoSocial -->
		
			<p><?php the_content(); ?></p>	

		</div>

		<?php endwhile; ?>
	    <?php endif; ?>
	 
		</section> <!-- End of marcoContorno -->




		</section> <!-- contenido -->

		<div class="clearfix"></div>

		<!-- CONTENIDO -->

<?php get_footer(); ?>