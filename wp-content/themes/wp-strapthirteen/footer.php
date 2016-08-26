<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Strap_Thirteen
 * @since Strap Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<?php get_sidebar( 'main' ); ?>

			<div class="site-info">
				<?php do_action( 'strapthirteen_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'strapthirteen' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'strapthirteen' ); ?>"><?php printf( __( 'Proudly powered by %s', 'strapthirteen' ), 'WordPress' ); ?></a>
				<span class="sep"> | </span>
		        <?php printf( __( 'Child Theme: %1$s by %2$s.', 'strapthirteen' ), 'StrapThirteen', '<a href="http://www.wpstrapcode.com/" rel="designer">WP Strap Code</a>' ); ?></p>
	    	</div><!-- .site-info -->
		</footer><!-- #colophon -->
		<a href="#" class="backToTop"></a>
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>