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
