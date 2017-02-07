<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

        <link href="https://fonts.googleapis.com/css?family=Oswald:300,400|Roboto:300,400" rel="stylesheet">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

        <link href="<?php echo get_template_directory_uri(); ?>/assets/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<!--[if IE]>
		  <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<![endif]-->

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		
		<!-- header -->
		<header class="header clear sticky-top navbar-light" role="banner">
			<div class="container">
				<div class="row">
					<!-- logo -->
					<div class="logo col-md-3">
						<a href="<?php echo home_url(); ?>">
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
							<img src="<?php echo get_template_directory_uri(); ?>/img/logo-siga.svg" alt="Logo" class="logo-img">
						</a>
						<div class="hidden-md-up mobile-btn">
							<a href="#">
								<i class="ion-navicon-round">BTN</i>
							</a>
						</div>
					</div>
					<!-- /logo -->
					
					<div class="col-md-9 navigations" id="navigations">
						<div class="top-nav hidden-sm-down">
							<?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
						</div>
						<!-- nav -->
						<nav class="" role="navigation">
							<?php html5blank_nav(); ?>
						</nav>
						<!-- /nav -->
						<div class="top-nav mobile hidden-md-up">
							<?php wp_nav_menu( array( 'theme_location' => 'extra-menu' ) ); ?>
						</div>
					</div>
				</div>
			</div>	

		</header>
		<!-- /header -->
