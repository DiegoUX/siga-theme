<?php /* Template Name: Trabajos */ get_header(); ?>


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

					<!-- Dentro va el shortcode del plugin de porfolio -->
					<?php the_content(); ?>
					<!-- end -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

					</article>
					<!-- /article -->

				<?php endif; ?>

			<section class="more-services section">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<h2>¿Querés Saber Más Sobre Nuestros Servicios?</h2>
							<h4>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostru</h4>
						</div>
						<div class="col-md-3 tac">
							<a href="/servicios" class="btn btn-invert">Servicios</a>
						</div>
					</div>
				</div>
			</section>

<?php get_footer(); ?>
