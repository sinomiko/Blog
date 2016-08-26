<?php 
/**
 * Library of Theme options functions.
 * @package WinterDream
 * @since WinterDream 1.0.0
*/

// Display Breadcrumb navigation
function winterdream_get_breadcrumb() { 
global $winterdream_defaults;
		if (get_theme_mod('winterdream_display_breadcrumb', $winterdream_defaults['winterdream_display_breadcrumb']) != 'Hide') { ?>
		<?php if (function_exists( 'bcn_display' ) && !is_front_page()) { echo '<p class="breadcrumb-navigation">'; ?><?php bcn_display(); ?><?php echo '</p>'; } ?>
<?php } 
} 

// Display featured images on single posts
function winterdream_get_display_image_post() { 
global $winterdream_defaults;
		if (get_theme_mod('winterdream_display_image_post', $winterdream_defaults['winterdream_display_image_post']) == '' || get_theme_mod('winterdream_display_image_post', $winterdream_defaults['winterdream_display_image_post']) == 'Display') { ?>
		<?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail(); ?>
    <?php endif; ?>
<?php } 
}

// Display featured images on pages
function winterdream_get_display_image_page() { 
global $winterdream_defaults;
		if (get_theme_mod('winterdream_display_image_page', $winterdream_defaults['winterdream_display_image_page']) == '' || get_theme_mod('winterdream_display_image_page', $winterdream_defaults['winterdream_display_image_page']) == 'Display') { ?>
		<?php if ( has_post_thumbnail() ) : ?>
      <?php the_post_thumbnail(); ?>
    <?php endif; ?>
<?php } 
} ?>