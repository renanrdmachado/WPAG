<?php
require_once('config/init.php'); //Init de Config
require_once('functions/post-type.php'); //Custom Post Types
require_once('functions/sidebar.php'); //Custom Sidebar (dynamic_sidebay)
require_once('functions/taxonomies.php'); //Taxonomies
require_once('functions/metabox.php'); //Metaboxes
require_once('functions/admin_scheme.php'); //Admin Scheme

//  PLUGINS
// require_once('functions/plugins/newsletter/init.php'); //Custom Sidebar (dynamic_sidebay)

function WPAG_scripts(){
	
	/*********** CSS ***********/
	//// Bootstrap
	wp_enqueue_style(
		'bootstrapCss',
		getAddAssets().'/bootstrap/css/bootstrap.min.css',
		array(),
		$ver = false,
		$media = 'all'
	);

	//// Fontawesome
	// wp_enqueue_style(
	// 	'fontawesomeCss',
	// 	getAddAssets().'/fontawesome/css/all.min.css',
	// 	array(),
	// 	$ver = false,
	// 	$media = 'all'
	// );

	//// Slick
	// wp_enqueue_style(
	// 	'slickCss',
	// 	getAddAssets().'/slick/slick.min.css',
	// 	array(),
	// 	$ver = false,
	// 	$media = 'all'
	// );
	// wp_enqueue_style(
	// 	'slickThemeCss',
	// 	getAddAssets().'/slick/slick-theme.css',
	// 	array(),
	// 	$ver = false,
	// 	$media = 'all'
	// );

	//// Venobox
	// wp_enqueue_style(
	// 	'venoboxCss',
	// 	getAddAssets().'/venobox/venobox.css',
	// 	array(),
	// 	$ver = false,
	// 	$media = 'all'
	// );

	//// Main
	wp_enqueue_style(
		'mainCss', get_bloginfo('template_directory').'/assets/css/main.css',
		array(),
		$ver = false,
		$media = 'all'
	);

	/*********** Javascript ***********/
	//// jQuery
	wp_enqueue_script('jquery');

	//// Venobox
	// wp_register_script(
	// 	'venoboxJs',
	// 	getJsAssets().'/venobox/venobox.js',
	// 	array('jquery')
	// );

	//// Main
	global $wp_query;
	wp_register_script( 'mainJs', getJsAssets().'/main.js', array('jquery') );
	wp_localize_script( 'mainJs', 'params', array(
		'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',
		// 'posts' => json_encode( $wp_query->query_vars ),
		// 'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,
		// 'max_page' => $wp_query->max_num_pages
	) );
 	wp_enqueue_script( 'mainJs' );
}
add_action( 'wp_enqueue_scripts', 'WPAG_scripts' );

// POSTS THUMBNAIL
add_theme_support('post-thumbnails' );

// MENU
register_nav_menus(array(
	'principal' => 'Principal',
	'rodape' => 'Rodapé',
));

// SANITIZE FILE NAME
function my_custom_file_name ( $filename ){
	$info = pathinfo( $filename );
	$ext = empty( $info['extension'] ) ? '' : '.' . $info['extension'];
	$name = basename( $filename, $ext );
	$finalFileName = sanitize_title( $name );
	// File name will be the same as the image file name, but sanitized.
	return $finalFileName . $ext;
}
add_filter( 'sanitize_file_name', 'my_custom_file_name', 100 );

// SEARCH ONLY 'POSTS'
function SearchFilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','SearchFilter');

// ONLY NUMS
function onlyNums($num){
	preg_match_all('!\d+!', get_option('mvl_whatsapp'), $num);
}

// Customizer
function mytheme_setup() {
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'mytheme_setup');

// Remove admin top bar
show_admin_bar(false);

// set_default_admin_color
function set_default_admin_color($user_id) {
    $args = array(
        'ID' => $user_id,
        'admin_color' => 'mvl'
    );
    wp_update_user( $args );
}
add_action('user_register', 'set_default_admin_color');