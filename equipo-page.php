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
		// Get 'equipo' posts
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
						<!-- Modal trigger -->
						<?php echo '<a class="mas-info" data-toggle="modal" href="#modal-' .$count. '">' ?>Más info</a>

					</div>
				</article>

				<!-- Modal Content -->
				<?php echo '<div id="modal-' .$count. '"	class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
				  <div class="modal-dialog">'?>
				    <div class="modal-content">
				    	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
						<div class="profile-header">
							<?php if ( $thumb_src ): ?>
							<img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('area'); ?>" class="img-circle">
							<?php endif; ?>
						</div>
						<h3><?php the_title(); ?></h3>
						<h5 class="area-position"><?php the_field('area'); ?></h5>	
				    	<?php the_content(); ?>
				    </div>
				  </div>
				</div>

				<?php $count++; ?>
				<?php endforeach; ?>
			</div>	
			
		</div><!-- /.container -->
		<?php endif; ?>

		</section>
		<!-- /section -->

		<section class="resources section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<h2>Descargá recursos gratuitos</h2>
						<h4>Accedé de forma gratuita a mapas y archivos GIS del subtrópico de Argentina. Optimizá tu proyecto con información precisa y actualizada de la región.</h4>
					</div>
					<div class="col-md-3 tac">
						<a href="/recursos" class="btn btn-invert">Recursos</a>
					</div>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>
