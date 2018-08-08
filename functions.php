<?php
require_once('config/init.php'); //Init de Config
require_once('functions/post-type.php'); //Custom Post Types
require_once('functions/sidebar.php'); //Custom Sidebar (dynamic_sidebay)
require_once('functions/taxonomies.php'); //Taxonomies
require_once('functions/metabox.php'); //Metaboxes

//  PLUGINS
// require_once('functions/plugins/newsletter/init.php'); //Custom Sidebar (dynamic_sidebay)

function source_styles(){
	wp_enqueue_style(
		'foundationCss',
		getAddAssets().'/foundation/css/foundation.min.css',
		array(),
		$ver = false,
		$media = 'all'
	);
	wp_enqueue_style(
		'mainCss', get_bloginfo('template_directory').'/assets/css/main.css',
		array(),
		$ver = false,
		$media = 'all'
	);

}

function source_scripts(){

	wp_enqueue_script('jquery');

	global $wp_query;
	wp_register_script( 'mainJs', getJsAssets().'/script.js', array('jquery') );
	wp_localize_script( 'mainJs', 'loadmore_params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php', // WordPress AJAX
		'posts' => json_encode( $wp_query->query_vars ), // everything about your loop is here
		'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		'max_page' => $wp_query->max_num_pages
	) );
 	wp_enqueue_script( 'mainJs' );
	
}

add_action( 'wp_enqueue_scripts', 'source_styles' );
add_action( 'wp_enqueue_scripts', 'source_scripts' );

/** Odin Classes. **/
// require_once get_template_directory() . '/core/classes/class-bootstrap-nav.php';
// require_once get_template_directory() . '/core/classes/class-shortcodes.php';
// require_once get_template_directory() . '/core/classes/class-shortcodes-menu.php';
// require_once get_template_directory() . '/core/classes/class-thumbnail-resizer.php';
// require_once get_template_directory() . '/core/classes/class-theme-options.php';
// require_once get_template_directory() . '/core/classes/class-options-helper.php';
// require_once get_template_directory() . '/core/classes/class-post-type.php';
// require_once get_template_directory() . '/core/classes/class-taxonomy.php';
// require_once get_template_directory() . '/core/classes/class-metabox.php';
// require_once get_template_directory() . '/core/classes/abstracts/abstract-front-end-form.php';
// require_once get_template_directory() . '/core/classes/class-contact-form.php';
// require_once get_template_directory() . '/core/classes/class-post-form.php';
// require_once get_template_directory() . '/core/classes/class-user-meta.php';
// require_once get_template_directory() . '/core/classes/class-post-status.php';
// require_once get_template_directory() . '/core/classes/class-term-meta.php';
/** FIM - Odin Classes. **/

// POSTS THUMBNAIL
add_theme_support('post-thumbnails' );

// MENU
register_nav_menus(array(
	'principal' => 'Principal',
	));


