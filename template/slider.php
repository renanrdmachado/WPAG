<?php
$args = array(
    'post_type'             => 'cpt-slider',
    'posts_per_page'        => -1
);

$_SLIDER = new WP_Query($args);
?>

<?php if( $_SLIDER->have_posts() ) : ?>
    <section class="main-slider slick-slider">
    <?php while( $_SLIDER->have_posts() ) : $_SLIDER->the_post(); ?>
        <?php global $post;?>
        <div class="slider-item">
            <?php if( $post->post_content != '' ) : ?>
                <div class="slider-content-text">
                    <?php the_content() ?>
                </div>
            <?php endif; ?>
            <?php if( has_post_thumbnail() ) : ?>
                <div class="slider-content-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            <?php endif; ?>
        </div>
    <?php endwhile; ?>
    </section>
<?php endif; ?>
<?php wp_reset_query(); ?>