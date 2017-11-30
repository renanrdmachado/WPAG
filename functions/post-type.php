<?php
// POST TYPE
/**
 * Registers a new post type
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string  Post type key, must not exceed 20 characters
 * @param array|string  See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
// function prefix_register_name() {

// 	$labels = array(
// 		'name'               => __( 'Plural Name', 'mvl' ),
// 		'singular_name'      => __( 'Singular Name', 'mvl' ),
// 		'add_new'            => _x( 'Add New Singular Name', 'mvl', 'mvl' ),
// 		'add_new_item'       => __( 'Add New Singular Name', 'mvl' ),
// 		'edit_item'          => __( 'Edit Singular Name', 'mvl' ),
// 		'new_item'           => __( 'New Singular Name', 'mvl' ),
// 		'view_item'          => __( 'View Singular Name', 'mvl' ),
// 		'search_items'       => __( 'Search Plural Name', 'mvl' ),
// 		'not_found'          => __( 'No Plural Name found', 'mvl' ),
// 		'not_found_in_trash' => __( 'No Plural Name found in Trash', 'mvl' ),
// 		'parent_item_colon'  => __( 'Parent Singular Name:', 'mvl' ),
// 		'menu_name'          => __( 'Plural Name', 'mvl' ),
// 	);

// 	$args = array(
// 		'labels'              => $labels,
// 		'hierarchical'        => false,
// 		'description'         => 'description',
// 		'taxonomies'          => array(),
// 		'public'              => true,
// 		'show_ui'             => true,
// 		'show_in_menu'        => true,
// 		'show_in_admin_bar'   => true,
// 		'menu_position'       => null,
// 		'menu_icon'           => null,
// 		'show_in_nav_menus'   => true,
// 		'publicly_queryable'  => true,
// 		'exclude_from_search' => false,
// 		'has_archive'         => true,
// 		'query_var'           => true,
// 		'can_export'          => true,
// 		'rewrite'             => true,
// 		'capability_type'     => 'post',
// 		'supports'            => array(
// 			'title',
// 			'editor',
// 			'author',
// 			'thumbnail',
// 			'excerpt',
// 			'custom-fields',
// 			'trackbacks',
// 			'comments',
// 			'revisions',
// 			'page-attributes',
// 			'post-formats',
// 		),
// 	);

// 	register_post_type( 'slug', $args );
// }

// add_action( 'init', 'prefix_register_name' );
