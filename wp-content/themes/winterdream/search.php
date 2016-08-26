<?php
/**
 * The search results template file.
 * @package WinterDream
 * @since WinterDream 1.0.0
*/
get_header(); ?>
<div id="wrapper-content">
<?php if ( have_posts() ) : ?>
  <div class="container">
  <div id="main-content">
    <div class="content-headline">
      <h1 class="entry-headline"><?php printf( __( 'Search Results for: %s', 'winterdream' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
<?php winterdream_get_breadcrumb(); ?>
    </div>
    <div id="content"> 
<p class="number-of-results"><?php _e( '<strong>Number of Results</strong>: ', 'winterdream' ); ?><?php echo $wp_query->found_posts; ?></p>
      <div<?php if (get_theme_mod('winterdream_post_entry_format', $winterdream_defaults['winterdream_post_entry_format']) == 'Grid - Masonry') { ?> class="js-masonry"<?php } ?>>
<?php while (have_posts()) : the_post(); ?>      
<?php if (get_theme_mod('winterdream_post_entry_format', $winterdream_defaults['winterdream_post_entry_format']) == 'Grid - Masonry') {
get_template_part( 'content', 'grid' ); } else {
get_template_part( 'content', 'archives' ); } ?>
<?php endwhile; ?>
      </div>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
		<div class="navigation" role="navigation">
			<h2 class="navigation-headline section-heading"><?php _e( 'Search results navigation', 'winterdream' ); ?></h2>
      <div class="nav-wrapper">
        <p class="navigation-links">
<?php $big = 999999999;
echo paginate_links( array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
	'current' => max( 1, get_query_var('paged') ),
  'prev_text' => __( '&larr; Previous', 'winterdream' ),
	'next_text' => __( 'Next &rarr;', 'winterdream' ),
	'total' => $wp_query->max_num_pages,
  'add_args' => false
) );
?>
        </p>
      </div>
		</div>
<?php endif; ?>

<?php else : ?>
  <div class="container">
  <div id="main-content">
    <div class="content-headline">
      <h1 class="entry-headline"><?php _e( 'Nothing Found', 'winterdream' ); ?></h1>
<?php winterdream_get_breadcrumb(); ?>
    </div>
    <div id="content">
    <p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'winterdream' ); ?></p><?php get_search_form(); ?>
<?php endif; ?>
    </div> <!-- end of content -->
  </div>
<?php if (get_theme_mod('winterdream_display_sidebar_archives', $winterdream_defaults['winterdream_display_sidebar_archives']) != 'Hide') { ?>
<?php get_sidebar(); ?>
<?php } ?>
  </div>
</div>     <!-- end of wrapper-content -->
<?php get_footer(); ?>