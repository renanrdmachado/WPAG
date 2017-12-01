<!doctype html>
<html class="no-js" lang="pt-br">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('title') ?></title>
    <link rel="stylesheet" href="<?php theAddAssets() ?>/foundation/css/foundation.min.css" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/main.css" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="<?php theAddAssets() ?>/fontawesome/css/font-awesome.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> 
    <?php wp_head() ?>

  </head>
  <body <?php body_class();?>>
  	<div id="link-home"></div>
  	<?php get_template_part('template/top','head');?>
