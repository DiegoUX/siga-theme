<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<!-- Imagen destacada/Billboard páginas -->
				<?php
				$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), '');
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
				<section class="visores-mapas section">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<h2>Visores de Mapas</h2>
								<h4>El visor de mapas del Subtrópico ofrece la posibilidad de acceder a la información espacial (ambiental, social y productiva) que gestiona el SIGA y a la documentación asociada para todo el Subtrópico de Argentina. A través de esta herramienta podrás:</h4>
								<ul>
									<li><span class="icon icon-check"></span>Visualizar las capas de información</li>
									<li><span class="icon icon-check"></span>Realizar consultas espaciales</li>
									<li><span class="icon icon-check"></span>Descargar documentos</li>
									<li><span class="icon icon-check"></span>Acceder a mapas interactivos específicos</li>
								</ul>
								<a href="#" class="btn btn-main">Ver Trabajos</a>
							</div>
							<div class="col-lg-6">
								<img src="../wp-content/themes/siga-theme/img/servicios-display.png" alt="Displays">
							</div>
						</div>
					</div>
				</section>
				<section class="apps-movil section">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 offset-lg-5">
								<h2>Aplicaciones Móviles</h2>
								<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</h4>
								<ul>
									<li><span class="icon icon-check"></span>Lorem ipsum dolor sit amet, consectetur adipiscing. </li>
									<li><span class="icon icon-check"></span>Ut enim ad minim veniam, quis nostrud.</li>
									<li><span class="icon icon-check"></span>Aecat cupidatat non proident, sunt in culpa.</li>
								</ul>
								<a href="#" class="btn btn-main">Ver Trabajos</a>
							</div>
						</div>
					</div>
				</section>
				<section class="productos-cartograficos section">
					<div class="container">
						<div class="row">
							<div class="col-lg-6">
								<h2>Productos Cartográficos</h2>
								<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</h4>
								<h4>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</h4>
								<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore. </h4>
								<a href="#" class="btn btn-main">Ver Trabajos</a>
							</div>
							<div class="col-lg-6">
								<img src="../wp-content/themes/siga-theme/img/servicios-navegadores.png" alt="Navegadores">
							</div>
						</div>
					</div>
				</section>
				<section class="formacion section">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 offset-lg-5">
								<h2>Formación y Capacitación</h2>
								<h4>Dictamos cursos y talleres de formación destinados a profesionales del ámbito privado, estatal y académico.</h4>
								<h4>Contamos con un programa de pasantías para estudiantes de grado y postgrado que estén interesados en el uso de la herramienta SIG.</h4>
								<ul>
									<li><span class="icon icon-check"></span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</li>
									<li><span class="icon icon-check"></span>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</li>
								</ul>
								<a href="#" class="btn btn-main">Ver Trabajos</a>
							</div>
						</div>
					</div>
				</section>
				<section class="meet-us section">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<h2>¿Querés conocer a nuestro equipo?</h2>
								<h4>Somos profesionales especializados en cartografía, informática y análisis de datos. Formamos el equipo de SIGA Proyungas desde hace más de 10 años. Conocenos.</h4>
							</div>
							<div class="col-md-3 tac">
								<a href="/quienes-somos" class="btn btn-invert">Quiénes Somos</a>
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
