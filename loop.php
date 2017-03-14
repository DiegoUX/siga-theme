<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
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
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title();?></a>
					</h2>
					<!-- /post title -->

					<!-- Autores -->
					<div class="autores">
						<h3><span>Autores:</span> <?php the_field('autores'); ?></h3>
					</div>
					<!-- /autores -->
				
					<!-- post thumbnail -->
					<?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="img-link">
							<?php the_post_thumbnail(); // Fullsize image for the single post ?>
						</a>
					<?php endif; ?>
					<!-- /post thumbnail -->
					
					<?php the_content(); ?>

					<div class="descarga-pdf">
						<a class="btn btn-main"	target="_blank" href="<?php the_field('pdf'); ?>">Ver Publicación</a>
					</div>

					<hr>
				</div>
			</div>
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
