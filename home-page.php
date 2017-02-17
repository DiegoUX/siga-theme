
<?php /* Template Name: Home */ get_header(); ?>
<?php remove_filter( 'the_content', 'wpautop' ); ?>

	<main role="main">

		<!-- section -->
		<section>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<!-- Sacar luego -->
				<section class="billboard">
					<ul class="cb-slideshow">
				        <li><span></span></li>
				        <li><span></span></li>
				        <li><span></span></li>
				        <li><span></span></li>
				        <li><span></span></li>
				        <li><span></span></li>
				    </ul>
				    <div class="container">
						<div class="row">
							<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
								<div class="square-hero">
									<h1>información geográfica más accesible</h1>
									<h4>Gestionamos y procesamos información ambiental, social y productiva,<br> para definir pautas para la conservación de la biodiversidad<br> y el manejo responsable de los recursos naturales.</h4>
									<a href="#" class="btn btn-main">Conocenos</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section class="services section">
					<div class="container">
						<div class="row">
							<div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
								<h2>Nuestros Servicios</h2>
								<h4>Generamos y analizamos información espacial del Subtrópico y la difundimos en mapas. Ofrecemos capacitación técnica en distintos niveles educativos. Participamos en proyectos con incidencia en políticas ambientales y productivas.</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-sm-6 mbl-mgn two-top-services">
								<img src="../wp-content/themes/siga-theme/img/visores.svg" alt="Icon Visores de Mapas">
								<h3>Visores<br> de Mapas</h3>
								<p>Visualizá la información en capas, descargá documentos y accedé a mapas interactivos.</p>
								<a href="#" class="btn btn-main">Ver Más</a>
							</div>
							<div class="col-lg-3 col-sm-6 mbl-mgn two-top-services">
								<img src="../wp-content/themes/siga-theme/img/appmoviles.svg" alt="Icon Apps Móviles">
								<h3>Aplicaciones<br>Móviles</h3>
								<p>Visualizá la información en capas, descargá documentos y accedé a mapas interactivos.</p>
								<a href="#" class="btn btn-main">Ver Más</a>
							</div>
							<div class="col-lg-3 col-sm-6 mbl-mgn">
								<img src="../wp-content/themes/siga-theme/img/cartografia.svg" alt="Icon Produtos Cartográficos">
								<h3>Productos<br> Cartográficos</h3>
								<p>Visualizá la información en capas, descargá documentos y accedé a mapas interactivos.</p>
								<a href="#" class="btn btn-main">Ver Más</a>
							</div>
							<div class="col-lg-3 col-sm-6 mbl-mgn">
								<img src="../wp-content/themes/siga-theme/img/capacitacion.svg" alt="Icon Capacitación y Formación">
								<h3>Formación<br> y Capacitación</h3>
								<p>Visualizá la información en capas, descargá documentos y accedé a mapas interactivos.</p>
								<a href="#" class="btn btn-main">Ver Más</a>
							</div>
						</div>
					</div>
				</section>
				<section class="help-you section">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<h2>Podemos ayudarte con algún proyecto?</h2>
								<h4>Queremos aportar toda nuestra experiencia y capacidad a tu proyecto. Trabajemos en equipo para lograr mejores resultados ¡Contanos de qué se trata!</h4>
							</div>
							<div class="col-md-3 tac">
								<a href="#" class="btn btn-invert">Contactanos</a>
							</div>
						</div>
					</div>
				</section>
				<section class="recursos section">
					<div class="container">
						<div class="row">
							<div class="col-md-9">
								<h2>Descargá recursos gratuitos</h2>
								<h4>Accedé de forma gratuita a mapas y archivos GIS del subtrópico de Argentina. Optimizá tu proyecto con información precisa y actualizada de la región.</h4>
							</div>
							<div class="col-md-3 tac">
								<a href="#" class="btn btn-invert">Recursos</a>
							</div>
						</div>
					</div>
				</section>
				
				<!-- FIN Sacar luego -->
				


				<!-- <br class="clear"> -->

				<!-- <?php edit_post_link(); ?> -->

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
