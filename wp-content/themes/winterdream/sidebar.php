<?php
/**
 * The sidebar template file.
 * @package WinterDream
 * @since WinterDream 1.0.0
*/
?>
<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
<aside id="sidebar">
<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside> <!-- end of sidebar -->
<?php } ?>