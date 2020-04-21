<header class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <?php
                if ( has_custom_logo() ) {
                    echo '<span class="site-brand">';
                        the_custom_logo();
                    echo '</span>';
                } else {
                    echo '<span class="site-brand">';
                        echo get_bloginfo('title');
                    echo '</span>';
                }
                ?>
            </div>
            <div class="col-md-9 col-6">
                <div class="d-none d-md-block">
                    <nav class="navbar">
                        <?php wp_nav_menu( array( 'theme_location' => 'principal' ) ) ?>
                    </nav>
                </div>
                <div class="menu-toggle d-block d-sm-none">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</header>