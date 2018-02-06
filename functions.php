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
	wp_enqueue_style(
		'fontAwesomeCss',
		getAddAssets().'/fontawesome/css/font-awesome.min.css',
		array(),
		$ver = false,
		$media = 'all'
	);
	wp_enqueue_style(
		'izimodalCss',
		getAddAssets().'/izimodal/css/iziModal.min.css',
		array(),
		$ver = false,
		$media = 'all'
	);
}

function source_scripts(){

	wp_enqueue_script(
		'jQueryJs',
		getAddAssets().'/foundation/js/vendor/jquery.js',
		array() ,
		$ver = false,
		true
	);
	wp_enqueue_script(
		'mainJs',
		getJsAssets().'/script.js',
		array('jQueryJs'),
		$ver = false,
		true
	);
	wp_enqueue_script(
		'izimodalJs',
		getAddAssets().'/izimodal/js/iziModal.min.js',
		array(),
		$ver = false,
		true
	);
	
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


