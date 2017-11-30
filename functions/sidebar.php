<?php
// SIDEBAR
// register_sidebar( array(
//     'id'          => 'sidebar-blog',
//     'name'        => __( 'Barra Lateral do Blog', 'cbizz' ),
//     'before_widget' => '<div id="%1$s" class="widget %2$s">',
// 	'after_widget'  => '</div>',
// 	'before_title'  => '<h2 class="widgettitle">',
// 	'after_title'   => '</h2>'

// ) );

//WIDGET DASHBOARD

///////////// Feed Facebook
// class widget_feed_facebook extends WP_Widget {
//   function __construct() {
//     // Instantiate the parent object
//     parent::__construct( false, 'Vai Pro Mundo - Feed Facebook' );
//   }
//   function widget( $args, $instance ) {
//     // Widget output
//     get_template_part('functions/widgets/facebook_feed');
//   }
//   function update( $new_instance, $old_instance ) {
//     // Save widget options
//   }
//   function form( $instance ) {
//     // Output admin widget options form
//     echo '<p>Exibe o feed do facebook para a url: '.get_option('mvl_facebook').' (<a href="admin.php?page=opcoes-gerais-redessociais" target="_blank">alterar</a>)</p>';
//   }
// }
// function widget_feed_facebook() {
//   register_widget( 'widget_feed_facebook' );
// }
// add_action( 'widgets_init', 'widget_feed_facebook' );