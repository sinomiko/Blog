    <header id="masthead" class="site-header" role="banner">
		<?php if ( is_front_page() ) : ?>
		<?php if ( get_theme_mod( 'strapthirteen_header_visibility' ) != 1 ) { ?>
			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>
        <?php } ?>
		<?php else : ?>
		    <a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</a>
		<?php endif; ?>
		<?php if ( get_theme_mod( 'strapthirteen_menubar_placement' ) != 0 ) : ?>
			<?php if ( get_theme_mod( 'strapthirteen_slider_visibility' ) != 0 ) { ?>
	          <?php if ( is_front_page() ) : ?>
		        <?php get_template_part( 'slider' ); ?>
	          <?php endif; ?>
	        <?php } ?>
            <div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'strapthirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'strapthirteen' ); ?>"><?php _e( 'Skip to content', 'strapthirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php if ( get_theme_mod( 'strapthirteen_menusearch_visibility' ) != 1 ) { ?>
					<?php get_search_form(); ?>
					<?php } ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
			
			<?php else : ?>
			<div id="navbar" class="navbar">
				<nav id="site-navigation" class="navigation main-navigation" role="navigation">
					<h3 class="menu-toggle"><?php _e( 'Menu', 'strapthirteen' ); ?></h3>
					<a class="screen-reader-text skip-link" href="#content" title="<?php esc_attr_e( 'Skip to content', 'strapthirteen' ); ?>"><?php _e( 'Skip to content', 'strapthirteen' ); ?></a>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
					<?php if ( get_theme_mod( 'strapthirteen_menusearch_visibility' ) != 1 ) { ?>
					<?php get_search_form(); ?>
					<?php } ?>
				</nav><!-- #site-navigation -->
			</div><!-- #navbar -->
			
			<?php if ( get_theme_mod( 'strapthirteen_slider_visibility' ) != 0 ) { ?>
	          <?php if ( is_front_page() ) : ?>
		        <?php get_template_part( 'slider' ); ?>
	          <?php endif; ?>
	        <?php } ?>
		<?php endif; ?>
		</header><!-- #masthead -->
        