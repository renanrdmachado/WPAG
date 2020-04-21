<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('title') ?></title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

    <?php wp_head() ?>

  </head>
  <body <?php body_class();?>>
  	<div id="link-home"></div>
  	<?php get_template_part('template/top','head');?>

    <div id="main-content" class="main-content">