<?php /* Template Name: Recursos */ get_header(); ?>

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
                  <?php $pagePostID = $post->ID; ?>
                  <h4><?php echo get_post_meta($post->ID, 'bajada', true); ?></h4>
                </div>
              </div>
            </div>  
          </div>  

        </div>
      <!-- end Imagen destacada...  -->

    <?php 
    if (have_posts()): while (have_posts()) : the_post(); ?>

      <!-- article -->
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <?php 
        the_content(); ?>

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


      <section class="descargas">
        <div class="container">
          <div class="row">
            
            <div class="col-sm-12">
              <h2 class="descargas-title">Descargas Gratuitas</h2>  
            </div>
            
          </div>
        </div>
  
        <!-- Nav tabs -->
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <ul class="nav nav-tabs" role="tablist" id="descargasTablist">
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#posters" role="tab">Posters</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#maps" role="tab">Mapas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#coberturas" role="tab">Coberturas</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
          <div class="tab-pane active" id="posters" role="tabpanel">
            <div class="container">
              <?php 
                $allTems = get_terms([
                  'taxonomy' => 'tematicas',
                  'hide_empty' => false,
                ]);
                $allEcos = get_terms([
                  'taxonomy' => 'ecorregiones',
                  'hide_empty' => false,
                ]);
                $allUbis = get_terms([
                  'taxonomy' => 'ubicaciones',
                  'hide_empty' => false,
                ]);
              ?>
              <div class="filter-posters">
                <select>
                  <option value="">Tem&aacute;tica...</option>
                  <?php 
                    foreach ($allTems as $temItem) {
                      echo "<option value='." . $temItem->slug . "'>" . $temItem->name ."</option>";
                    }
                  ?>
                </select>

                <select>
                  <option value="">Ecorregi&oacute;n...</option>
                  <?php 
                    foreach ($allEcos as $ecoItem) {
                      echo "<option value='." . $ecoItem->slug . "'>" . $ecoItem->name ."</option>";
                    }
                  ?>
                </select>

                <select>
                  <option value="">Ubicaci&oacute;n...</option>
                  <?php 
                    foreach ($allUbis as $ubiItem) {
                      echo "<option value='." . $ubiItem->slug . "'>" . $ubiItem->name ."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="" id="container-posters">
                <?php 
                
                  // Get 'poster' posts
                  $poster_posts = get_posts(array(
                    'post_type' => 'poster',
                    'posts_per_page' => -1, // Unlimited posts
                    'order' => 'ASC', // Order alphabetically by name
                  ));
                  $countPosters=0;
                  // var_dump($poster_posts);
                  if($poster_posts):
                    foreach ($poster_posts as $post):
                    ?>
                    
                      <?php setup_postdata($post); ?>
                      
                      <?php 
                      $temNames = array();
                      $tems = get_the_terms(get_post(),'tematicas');

                      if(!$tems) {
                        $temsJoined = "no-tematica";
                      }
                      else {
                        $i = 0;
                        foreach ($tems as $tem) {
                          $temNames[$i] = $tem->slug;
                          $i++;
                        }
                        $temsJoined = join(" ", $temNames);
                      }
                      
                      $ecoNames = array();
                      $ecos = get_the_terms(get_post(),'ecorregiones');
                      
                      if(!$ecos) {
                        $ecosJoined = "no-ecorregion";
                      }
                      else {
                        $i = 0;
                        foreach ($ecos as $eco) {
                          $ecoNames[$i] = $eco->slug;
                          $i++;
                        }
                        $ecosJoined = join(" ", $ecoNames);
                      }

                      $ubiNames = array();
                      $ubis = get_the_terms(get_post(),'ubicaciones');
                      
                      if(!$ubis) {
                        $ubisJoined = "no-ubicacion";
                      }
                      else {
                        $i = 0;
                        foreach ($ubis as $ubi) {
                          $ubiNames[$i] = $ubi->slug;
                          $i++;
                        }
                        $ubisJoined = join(" ", $ubiNames);
                      }

                      ?>
                      
                      <?php 
                      echo "<div class='item-poster " . $temsJoined . " " . $ecosJoined . " " . $ubisJoined . "'>";
                      $thumb_src = null;
                      echo '<a href="#modal-poster-' . $countPosters . '" data-toggle="modal">';
                      if ( has_post_thumbnail($post->ID) ) {

                        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );

                        the_post_thumbnail(array( 100, 100));
                        $thumb_src = $src[0];
                      }
                      echo '</a>';
                      ?>
                        <h4><?php the_title(); ?></h4>
                        <!-- <p><?php the_field("caption"); ?></p> -->
                        <!-- <p><?php the_content(); ?></p> -->
                        <?php 
                        ?>
                        <!-- <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>"> -->

                      </div>
                      
                      <div id="modal-poster-<?php echo $countPosters ?>" class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                            <div class="profile-header">
                              
                            </div>
                            <?php the_post_thumbnail(array( 700, 500)); ?>
                            <h3><?php the_title(); ?></h3>
                            <div>
                              <a href="<?php the_field('urlDescarga'); ?>">Descargar archivo</a> 
                              <span class="file-size">(<?php the_field('peso'); ?>)</span>
                            </div>
                              
                          </div>
                        </div>
                      </div>


                      <?php
                    $countPosters++;
                    endforeach;
                  endif;
                ?> 
              </div>
            </div>
          </div>
          <div class="tab-pane" id="maps" role="tabpanel">
            <div class="container">
              <?php 
                $allTems = get_terms([
                  'taxonomy' => 'tematicas',
                  'hide_empty' => false,
                ]);
                $allEcos = get_terms([
                  'taxonomy' => 'ecorregiones',
                  'hide_empty' => false,
                ]);
                $allUbis = get_terms([
                  'taxonomy' => 'ubicaciones',
                  'hide_empty' => false,
                ]);
              ?>
              <div class="filter-maps">
                <select>
                  <option value="">Tem&aacute;tica...</option>
                  <?php 
                    foreach ($allTems as $temItem) {
                      echo "<option value='." . $temItem->slug . "'>" . $temItem->name ."</option>";
                    }
                  ?>
                </select>

                <select>
                  <option value="">Ecorregi&oacute;n...</option>
                  <?php 
                    foreach ($allEcos as $ecoItem) {
                      echo "<option value='." . $ecoItem->slug . "'>" . $ecoItem->name ."</option>";
                    }
                  ?>
                </select>

                <select>
                  <option value="">Ubicaci&oacute;n...</option>
                  <?php 
                    foreach ($allUbis as $ubiItem) {
                      echo "<option value='." . $ubiItem->slug . "'>" . $ubiItem->name ."</option>";
                    }
                  ?>
                </select>
              </div>
              <div class="" id="container-maps">
                    
              <?php 
              
                // Get 'mapa' posts
                $map_posts = get_posts(array(
                  'post_type' => 'mapa',
                  'posts_per_page' => -1, // Unlimited posts
                  'order' => 'ASC', // Order alphabetically by name
                ));
                $countMaps=0;
                // var_dump($map_posts);
                if($map_posts):
                  foreach ($map_posts as $post):
                  ?>
                     
                      <?php setup_postdata($post); 
                      $temNames = array();
                      $tems = get_the_terms(get_post(),'tematicas');

                      if(!$tems) {
                        $temsJoined = "no-tematica";
                      }
                      else {
                        $i = 0;
                        foreach ($tems as $tem) {
                          $temNames[$i] = $tem->slug;
                          $i++;
                        }
                        $temsJoined = join(" ", $temNames);
                      }
                      $ecoNames = array();
                      $ecos = get_the_terms(get_post(),'ecorregiones');
                      
                      if(!$ecos) {
                        $ecosJoined = "no-ecorregion";
                      }
                      else {
                        $i = 0;
                        foreach ($ecos as $eco) {
                          $ecoNames[$i] = $eco->slug;
                          $i++;
                        }
                        $ecosJoined = join(" ", $ecoNames);
                      }

                      $ubiNames = array();
                      $ubis = get_the_terms(get_post(),'ubicaciones');
                      
                      if(!$ubis) {
                        $ubisJoined = "no-ubicacion";
                      }
                      else {
                        $i = 0;
                        foreach ($ubis as $ubi) {
                          $ubiNames[$i] = $ubi->slug;
                          $i++;
                        }
                        $ubisJoined = join(" ", $ubiNames);
                      }

                      echo "<div class='item-map " . $temsJoined . " " . $ecosJoined . " " . $ubisJoined . "'>";
                      $thumb_src = null;
                      echo '<a href="#modal-map-' . $countMaps . '" data-toggle="modal">';
                      if ( has_post_thumbnail($post->ID) ) {

                        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );

                        the_post_thumbnail(array( 100, 100));
                        $thumb_src = $src[0];
                      }
                      
                      echo '</a>';
                      ?>

                      <h4><?php the_title(); ?></h4>
                      <!-- <p><?php the_field("desc"); ?></p> -->
                      <!-- <p><?php the_content(); ?> </p> -->
                      <!-- <?php echo '<a href="#modal-map-' . $countMaps . '" data-toggle="modal">Mas info</a>' ?> -->
                    </div>
                    
                    <div id="modal-map-<?php echo $countMaps ?>" class="modal fade bd-example-modal-lg" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                          <div class="profile-header">
                          </div>
                          <?php the_post_thumbnail(array( 700, 500)); ?>
                          <h3><?php the_title(); ?></h3>
                          <div>
                            <a href="<?php the_field('urlDescarga'); ?>">Descargar archivo</a> 
                            <span class="file-size">(<?php the_field('peso'); ?>)</span>
                          </div>

                          <!-- <h5><?php the_field('desc'); ?></h5>  -->
                          <!-- <p><?php the_content(); ?></p> -->
                        </div>
                      </div>
                    </div>


                    <?php
                  $countMaps++;
                  endforeach;
                endif;
              ?> 

              </div>
            </div>
          </div>
          <div class="tab-pane" id="coberturas" role="tabpanel">
            <div class="container"> 
              <div class="row">
                <div class="col-md-7">
                  <?php 
                  // Get 'cobertura' posts
                  $cob_posts = get_posts(array(
                    'post_type' => 'cobertura',
                    'posts_per_page' => -1, // Unlimited posts
                    'order' => 'ASC', // Order alphabetically by name
                  ));
                  $countCobs = 0;
                  if($cob_posts):  ?>
                    <ul class='cobertura-list'>
                      <li class="header-coberturas">
                        <span class="nombre-recurso">Nombre del recurso</span>
                        <span class="formatos-disponibles">Formatos para descargar</span>
                      </li>
                    <?php foreach ($cob_posts as $post):
                    ?>  
                      <li>
                        <?php setup_postdata($post); ?>
                        <div class="cob-row">
                          <a href="#collapse-<?php echo $countCobs; ?>" data-toggle="collapse" aria-expanded="false" class="nombre-recurso"><?php the_title(); ?></a>
                          <span class="formatos-disponibles">
                            <span class="SHP-link format-link">
                              <?php 
                              if(get_field("shp")): ?>
                                <a href="<?php the_field('shp'); ?>">SHP</a>
                              <?php 
                              endif; ?>
                            </span>
                            <span class="KML-link format-link">
                              <?php 
                              if(get_field("kml")): ?>
                                <a href="<?php the_field('kml'); ?>">KML</a>
                              <?php 
                              endif; ?>
                            </span>
                          </span>
                          <a href="#collapse-<?php echo $countCobs; ?>" data-toggle="collapse" aria-expanded="false" class="link-accordion"></a>
                        </div>                          
                        <div class="cob-content collapse" id="collapse-<?php echo $countCobs; ?>">
                          <div class="descripcion-cobertura"><?php the_content(); ?> </div>
                          <span class="fuente-cobertura">Fuente: <?php the_field("fuente"); ?></span>
                        </div>
                      </li>

                      <?php
                    $countCobs++;
                    endforeach;
                    echo "</ul>";
                  endif;
                  ?> 
                </div>
                <div class="col-md-5 descargar-wms">
                  <i class="icon icon-descargar"></i>
                  <h3>DESCARGAR WMS</h3>
                  <p><?php echo get_post_meta($pagePostID, 'descargarWMS', true); ?></p>
                  <a href="<?php echo get_post_meta($pagePostID, 'linkWMS', true); ?>" target="_blank"><?php echo get_post_meta($pagePostID, 'linkWMS', true); ?></a>
                </div>
              </div>
                  
            </div>
          </div>
        </div>

      </section>
      <div class="contacto-inst section" style="background-image:url(<?php echo home_url(); ?>/wp-content/themes/siga-theme/img/nosacompanian.jpg); background-repeat:no-repeat;">
        <div class="container">
          <div class="row">
            <div class="col-xl-9 col-lg-9">
              <div class="">
                <h1><?php echo get_post_meta($pagePostID, 'contactoInstTitle', true); ?></h1>
                <h4><?php echo get_post_meta($pagePostID, 'contactoInstText', true); ?></h4>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 acomp-link">
              <a class="btn btn-invert" href="nos-acompanan">Mirá Quienes Nos Acompañan</a>
            </div>
          </div>  
        </div>  
      </div>


    </section>

  </main>

<?php get_footer(); ?>
