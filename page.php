<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<!-- Imagen destacada/Billboard páginas -->
				<?php
				$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
				?>

				<!-- <div class="page-billboard" style="height:<?php echo $thumbnail[2]; ?>px;background-image:url(<?php echo $thumbnail[0]; ?>);background-repeat:no-repeat;"> -->
				<div class="page-billboard" style="background-image:url(<?php echo $thumbnail[0]; ?>);background-repeat:no-repeat;">

					<div class="container">
						<div class="row">
							<div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1">
								<div class="square-hero-page">
									<h1><?php the_title(); ?></h1>
									<h4><?php echo get_post_meta($post->ID, 'bajada', true); ?></h4>
								</div>
							</div>
						</div>	
					</div>	

				</div>
			<!-- end Imagen destacada...  -->

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<!-- Quitar luego -->
				<section class="main-activities">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 col-lg-10">
								<h2>Principales Actividades</h2>
								<h4>Gestionamos información ambiental, social y productiva, para definir pautas de conservación de la biodiversidad y el manejo responsable de los recursos naturales, en un contexto de mayor equidad social.</h4>
							</div>
						</div>
						<div class="row ma-list">
							<div class="col-md-3">
								<i class="icon icon-arrows-anticlockwise"></i>
								<p>Generamos y analizamos datos para el subtrópico de Argentina</p>
							</div>
							<div class="col-md-3">
								<i class="icon icon-arrows-anticlockwise"></i>
								<p>Difundimos cartográfica e información espacial</p>
							</div>
							<div class="col-md-3">
								<i class="icon icon-arrows-anticlockwise"></i>
								<p>Brindamos capacitación técnica en distintos niveles educativos</p>
							</div>
							<div class="col-md-3">
								<i class="icon icon-arrows-anticlockwise"></i>
								<p>Desarrollamos proyectos con incidencia en políticas ambientales y productivas</p>
							</div>
						</div>
					</div>
				</section>
				<section class="siga-info">
					<div class="container">
						<div class="row">
							<div class="col-md-7 offset-md-5">
								<h2>DIFUSIÓN Y VISUALIZACIÓN EFICIENTE DE LA INFORMACIÓN TERRITORIAL</h2>
								<h4>Dolor sit amet, vix deleniti maiestatis no, cu summo adversarium consectetuer vis. Duo falli quodsi eripuit ne. In assum ignota indoctum usu, est ei sale rebum voluptatibus, eu quo iusto mnesarchum.</h4>
								<h4>Placerat adipiscing te vis, fastidii legendos vel in, ea nobis feugait praesent mea. At sea delectus omittantur. Et omnesque detraxit accusata pro, stet maiorum pri eu. Mei ad graeci iracundia, sit nobis persius ne, ei meis.</h4>
							</div>
						</div>
					</div>
				</section>
				<!-- end Quitar luego -->

			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
