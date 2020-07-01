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
	wp_enqueue_style(
		'slickCss',
		getAddAssets().'/slick/slick.css',
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

	//// Slick
	wp_enqueue_script(
		'slickJs',
		getAddAssets().'/slick/slick.min.js',
		array('jquery')
	);

	//// Venobox
	// wp_enqueue_script(
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

//admin_bar_menu
function mvl_wp_admin_bar_menu( $wp_admin_bar ) {
    // Remove customize, background and header from the menu bar.   
    $wp_admin_bar->remove_node( 'about' );   
    $wp_admin_bar->remove_node( 'wporg' );  
    $wp_admin_bar->remove_node( 'documentation' );  
    $wp_admin_bar->remove_node( 'support-forums' );  
    $wp_admin_bar->remove_node( 'feedback' );  

	$wp_admin_bar->add_node( array(
		'parent' => 'wp-logo',
		'id'     => 'ag-site',
		'title'  => 'Site',
		'href'   => esc_url( AG_SITE ),
		'meta'   => array("target"=>"_blank")
	)); 

	$wp_admin_bar->add_node( array(
		'parent' => 'wp-logo',
		'id'     => 'ag-email',
		'title'  => 'E-mail',
		'href'   => esc_url( "mailto:".AG_EMAIL ),
		'meta'   => array("target"=>"_blank")
	)); 

	$wp_admin_bar->add_node( array(
		'parent' => 'wp-logo',
		'id'     => 'ag-contato',
		'title'  => 'Contato',
		'href'   => esc_url( AG_CONTATO ),
		'meta'   => array("target"=>"_blank")
	)); 
	
}
add_action( 'admin_bar_menu', 'mvl_wp_admin_bar_menu', 999 );