<?php get_header(); ?>
<div class="single-pub">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-xl-8">
				<main role="main">
				<!-- section -->
				<section>
				<div class="back-to">
					<a href="<?php echo esc_url( get_permalink( get_page_by_title( 'Publicaciones' ) ) ); ?>">&laquo; Volver a Publicaciones</a>
				</div>
				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<div class="row">
							<div class="col-lg-2">
								<div class="date-wrap">
									<span class="date d-month"><?php the_time('M'); ?></span>
									<span class="line"></span>
									<span class="date d-year"><?php the_time('Y'); ?></span>
								</div>
							</div>
							<div class="col-lg-10">

								<!-- post title -->
								<h2 class="post-title">
									<?php the_title(); ?>
								</h2>
								<!-- /post title -->

								<!-- Autores -->
								<div class="autores">
									<h3><span>Autores:</span> <?php the_field('autores'); ?></h3>
								</div>
								<!-- /autores -->
							
								<!-- post thumbnail -->
								<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
									<?php the_post_thumbnail(); // Fullsize image for the single post ?>
								<?php endif; ?>
								<!-- /post thumbnail -->
								
								<?php the_content(); ?>

								<div class="descarga-pdf">
									<a class="btn btn-main"	target="_blank" href="<?php the_field('pdf'); ?>">Ver Publicación</a>
								</div>

							</div>
						</div>
					</article>

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

					</article>
					<!-- /article -->

				<?php endif; ?>

				</section>
				<!-- /section -->
				</main>
			</div>
			<div class="col-lg-4 col-xl-3 offset-xl-1">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>
</div>	

<?php get_footer(); ?>
