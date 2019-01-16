<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 7]>
<html id="ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html id="ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<?php elegant_description(); ?>
	<?php elegant_keywords(); ?>
	<?php elegant_canonical(); ?>

	<?php do_action( 'et_head_meta' ); ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php $template_directory_uri = get_template_directory_uri(); ?>
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( $template_directory_uri . '/js/html5.js"' ); ?>" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
		<header id="scroll-nav">
			<div id="top_menu" class="container clearfix et_menu_container king-container">
			<?php
				$logo = ( $user_logo = et_get_option( 'divi_logo' ) ) && '' != $user_logo
					? $user_logo
					: $template_directory_uri . '/images/logo.png';
			?>
				<div class="logo_container">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_attr( $logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" id="logo" data-height-percentage="<?php echo esc_attr( et_get_option( 'logo_height', '54' ) ); ?>" />
					</a>
				</div>
				
				
				<div id="menu_responsive_bar" style="display: none;">
					<i class="fa fa-bars" aria-hidden="true"></i>
				</div>
				
				<div id="menu_responsive" style="display: none;">
					<div class="primary_menu_wrapper">
						<?php 
							echo wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => '', 'menu_id' => '', 'echo' => false ) );
						?>
					</div>
					<div class="secondary_menu_wrapper">
						<?php 
							echo wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => '', 'menu_id' => '', 'echo' => false ) );
						?>
					</div>
				</div>

				<div id="center_header">
					<p>CYCLE ADVENTURES TO FIGHT POVERTY</p>
				</div>

				<div id="right_header">
					<!-- <div class="social_header">
						<a href=""><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/fb.png' ?>" alt=""></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/tw.png' ?>" alt=""></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/in.png' ?>" alt=""></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/vi.png' ?>" alt=""></a>
						<a href=""><img src="<?php echo get_stylesheet_directory_uri().'/assets/images/li.png' ?>" alt=""></a>
					</div> -->

					<!-- <div class="search_box">
							<form role="search" method="get" class="" action="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php
								printf( '<input type="search" class="et-search-field" placeholder="SEARCH" value="%2$s" name="s" title="%3$s" />',
									esc_attr__( 'Search &hellip;', 'Divi' ),
									get_search_query(),
									esc_attr__( 'Search for:', 'Divi' )
								);
							?>
							<i class="fa fa-search search_icon" aria-hidden="true"></i>
							</form>
					</div> -->

					<div class="button_login">
							<a href="#">LOG IN</a>
					</div>
				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
		 <!-- #main-header -->
		<!-- class="container et_menu_container" -->
		<div id="main_menu_wrapper">
			<div id="main_menu" class="container king-container">
				<header class="primary_menu">
					<div class="primary_menu_wrapper">
						<?php 
							echo wp_nav_menu( array( 'theme_location' => 'primary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => '', 'menu_id' => '', 'echo' => false ) );
						?>
					</div>
				</header>
				<header class="secondary_menu">
					<div class="secondary_menu_wrapper">
						<?php 
							echo wp_nav_menu( array( 'theme_location' => 'secondary-menu', 'container' => '', 'fallback_cb' => '', 'menu_class' => '', 'menu_id' => '', 'echo' => false ) );
						?>
					</div>
				</header>
			</div>
		</div>
		</header>
		<div id="et-main-area">
