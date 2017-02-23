<?php /* Template Name: Quienes Somos */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<!-- Imagen destacada/Billboard páginas -->
				<?php
				$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
				?>
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


		<!-- Sección Miembros del Equipo -->
		<?php

		the_post();

		// Get 'team' posts
		$team_posts = get_posts( array(
			'post_type' => 'equipo',
			'posts_per_page' => 10, // Unlimited posts
			'order' => 'ASC', // Order alphabetically by name
		) );

		if ( $team_posts ):
		?>
		<div class="container">
			<div class="row">
				<div class="intro-equipo col-md-10 offset-md-1">
					<h2>El Equipo de Siga Proyungas</h2>
					<h4>Dolor sit amet, vix deleniti maiestatis no, cu summo adversarium consectetuer vis. Duo falli quodsi eripuit ne. In assum ignota indoctum usu, est ei sale rebum voluptatibus, eu quo iusto mnesarchum. Pro quis magna regione eu. Vis ex choro saepe. Ubique blandit cu duo. Placerat adipiscing te vis, fastidii legendos vel in, ea nobis feugait praesent mea.</h4>
				</div>
			</div><!-- /.row -->	
			<div class="profiles" id="accordion" aria-multiselectable="true">
				<?php 
				$count=0;
				foreach ( $team_posts as $post ): 
				setup_postdata($post);
				
				// Resize and CDNize thumbnails using Automattic Photon service
				$thumb_src = null;
				if ( has_post_thumbnail($post->ID) ) {
					$src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
					$thumb_src = $src[0];
				}
				?>

				<article class="col-profile">
					<div class="profile-header">
						<?php if ( $thumb_src ): ?>
						<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('area'); ?>" class="img-circle">
						<?php endif; ?>
					</div>
					
					<div class="profile-content">
						<h3><?php the_title(); ?></h3>
						<h5 class="area-position"><?php the_field('area'); ?></h5>	

						<?php echo '<a data-toggle="collapse" data-parent="#accordion" href="#collapse-' .$count. '" aria-expanded="false" aria-controls="#collapse-' .$count. '">' ?>Ver Más</a>
						<?php echo '<div id="collapse-' .$count. '" class="collapse member-detail">' ?>
							<?php the_content(); ?>
						</div>
					</div>
					
				</article><!-- /.col-profile -->
				<?php $count++; ?>
				<?php endforeach; ?>
			</div>	
			
		</div><!-- /.container -->
		<?php endif; ?>





		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
