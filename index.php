<?php get_header(); ?>
<div class="publicaciones">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="pub-title"><?php _e( 'Publicaciones', 'html5blank' ); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-8 col-xl-8">
				<main role="main">
					<!-- section -->
					<section>

						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>

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
