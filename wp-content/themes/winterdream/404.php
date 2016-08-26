<?php
/**
 * The 404 page (Not Found) template file.
 * @package WinterDream
 * @since WinterDream 1.0.0
*/
get_header(); ?>
<div id="wrapper-content">
  <div class="container">
  <div id="main-content">
    <div id="content"> 
      <div class="content-headline">
        <h1 class="entry-headline"><?php _e( 'Nothing Found', 'winterdream' ); ?></h1>
<?php winterdream_get_breadcrumb(); ?>
      </div>
      <div class="entry-content">
        <p><?php _e( 'Apologies, but no results were found for your request. Perhaps searching will help you to find a related content.', 'winterdream' ); ?></p><?php get_search_form(); ?>
      </div>
    </div> <!-- end of content -->
  </div>
<?php if (get_theme_mod('winterdream_display_sidebar', $winterdream_defaults['winterdream_display_sidebar']) != 'Hide') { ?>
<?php get_sidebar(); ?>
<?php } ?>
  </div>
</div>     <!-- end of wrapper-content -->
<?php get_footer(); ?>