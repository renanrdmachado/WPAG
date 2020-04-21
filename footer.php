	</div> <!-- <div id="main-content"> -->
	
	<footer class="main-footer">
    	<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="widget-footer-1">
						<?php dynamic_sidebar('footer-1') ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="widget-footer-2">
						<?php dynamic_sidebar('footer-2') ?>
					</div>
				</div>
				<div class="col-md-4">
					<div class="widget-footer-3">
						<?php dynamic_sidebar('footer-3') ?>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<div id="menu-mobile" class="menu-mobile">
		<button class="close">&times;</button>
		<div class="menu-mobile-content">
			<div class="searchbar">
				
			</div>
			<nav class="navbar">
				<?php wp_nav_menu( array( 'theme_location' => 'rodape' ) ) ?>
			</nav>
		</div>
	</div>

	<?php wp_footer() ?>

  </body>
</html>