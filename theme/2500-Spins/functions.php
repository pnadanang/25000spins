<?php 
	if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

	if ( !function_exists( 'chld_thm_cfg_parent_css' ) ):
	    function chld_thm_cfg_parent_css() {
	        wp_enqueue_style( 'chld_thm_cfg_parent', trailingslashit( get_template_directory_uri() ) . 'style.css', array(  ) );
	        // Main script
	        wp_enqueue_script( 'jquery-js', 'https://code.jquery.com/jquery-3.3.1.min.js' );
	        wp_enqueue_script( 'OwlCarousel-js','https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(  ) );
	        wp_enqueue_script( 'main-js', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/js/main.js', array(  ) );

	        wp_enqueue_style( 'main-css', trailingslashit( get_stylesheet_directory_uri() ) . 'assets/css/main.css', array(  ) );
	        wp_enqueue_style( 'font-awesome-css', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	    	wp_enqueue_style( 'OwlCarousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css' );
	    }
	endif;
	add_action( 'wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10 );


	define('THEME_URL_FOLDER', get_stylesheet_directory());
	require_once THEME_URL_FOLDER . '/inc/shortcode.php';

add_filter('widget_text', 'do_shortcode');
// =========================================
	function wpb_widgets_init() {
		    register_sidebar( array(
		        'name' =>__( 'Social Footer', 'wpb'),
		        'id' => 'social-footer',
		        'description' => __( 'Appears on the static front page template', 'wpb' ),
		        'before_widget' => '',
		        'after_widget' => '',
		        'before_title' => '',
		        'after_title' => '',
		    ) );
	    }
	add_action( 'widgets_init', 'wpb_widgets_init' );

	add_filter( 'http_request_host_is_external', '__return_true' );
	
?>