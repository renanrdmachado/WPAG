<?php get_header() ?>
<?php wp_redirect( home_url(), 302 ) ?>
<?php get_template_part('template','content');?>
<?php get_footer() ?>