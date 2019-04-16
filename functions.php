<?php
require_once('config/init.php'); //Init de Config
require_once('functions/post-type.php'); //Custom Post Types
require_once('functions/sidebar.php'); //Custom Sidebar (dynamic_sidebay)
require_once('functions/taxonomies.php'); //Taxonomies
require_once('functions/metabox.php'); //Metaboxes

//  PLUGINS
// require_once('functions/plugins/newsletter/init.php'); //Custom Sidebar (dynamic_sidebay)

function WPAG_scripts(){
	// CSS
	//// Bootstrap
	wp_enqueue_style(
		'bootstrapCss',
		getAddAssets().'/bootstrap/css/bootstrap.min.css',
		array(),
		$ver = false,
		$media = 'all'
	);
	//// Fontawesome
	wp_enqueue_style(
		'fontawesomeCss',
		getAddAssets().'/fontawesome/css/fontawesome.min.css',
		array(),
		$ver = false,
		$media = 'all'
	);
	//// Slick
	wp_enqueue_style(
		'slickCss',
		getAddAssets().'/slick/slick.min.css',
		array(),
		$ver = false,
		$media = 'all'
	);
	wp_enqueue_style(
		'slickThemeCss',
		getAddAssets().'/slick/slick-theme.css',
		array(),
		$ver = false,
		$media = 'all'
	);
	//// Main
	wp_enqueue_style(
		'mainCss', get_bloginfo('template_directory').'/assets/css/main.css',
		array(),
		$ver = false,
		$media = 'all'
	);

	// Javascript
	//// jQuery
	wp_enqueue_script('jquery');

	//// Bootstrap
	wp_register_script(
		'bootstrapJs',
		getAddAssets().'/bootstrap/css/bootstrap.min.css',
		array('jquery')
	);

	//// Main
	global $wp_query;
	wp_register_script( 'mainJs', getJsAssets().'/main.js', array('jquery') );
	wp_localize_script( 'mainJs', 'params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 	wp_enqueue_script( 'mainJs' );
}

add_action( 'wp_enqueue_scripts', 'WPAG_scripts' );

// POSTS THUMBNAIL
add_theme_support('post-thumbnails' );

// MENU
register_nav_menus(array(
	'principal' => 'Principal',
));


