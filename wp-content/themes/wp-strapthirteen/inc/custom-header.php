<?php
/**
 * Implements a custom header for Twenty Thirteen.
 * See http://codex.wordpress.org/Custom_Headers
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

/**
 * Sets up the WordPress core custom header arguments and settings.
 *
 * @uses add_theme_support() to register support for 3.4 and up.
 * @uses strapthirteen_header_style() to style front-end.
 * @uses strapthirteen_admin_header_style() to style wp-admin form.
 * @uses strapthirteen_admin_header_image() to add custom markup to wp-admin form.
 * @uses register_default_headers() to set up the bundled header images.
 *
 * @since StrapThirteen 1.0
 */
function strapthirteen_custom_header_setup() {
	$args = array(
		// Text color and image (empty to use none).
		'default-text-color'     => 'b22f18',
		'default-image'          => '',

		// Set height and width, with a maximum value for the width.
		'height'                 => 400,
		'width'                  => 1600,

		// Callbacks for styling the header and the admin preview.
		'wp-head-callback'       => 'strapthirteen_header_style',
		'admin-head-callback'    => 'strapthirteen_admin_header_style',
		'admin-preview-callback' => 'strapthirteen_admin_header_image',
	);

	add_theme_support( 'custom-header', $args );

	/*
	 * Default custom headers packaged with the theme.
	 * %s is a placeholder for the theme template directory URI.
	 */
	register_default_headers( array(
		'circle' => array(
			'url'           => '%s/images/headers/circle.png',
			'thumbnail_url' => '%s/images/headers/circle-thumbnail.png',
			'description'   => _x( 'Circle', 'header image description', 'strapthirteen' )
		),
		'diamond' => array(
			'url'           => '%s/images/headers/diamond.png',
			'thumbnail_url' => '%s/images/headers/diamond-thumbnail.png',
			'description'   => _x( 'Diamond', 'header image description', 'strapthirteen' )
		),
		'star' => array(
			'url'           => '%s/images/headers/star.png',
			'thumbnail_url' => '%s/images/headers/star-thumbnail.png',
			'description'   => _x( 'Star', 'header image description', 'strapthirteen' )
		),
	) );
}
add_action( 'after_setup_theme', 'strapthirteen_custom_header_setup' );

/**
 * Loads our special font CSS files.
 *
 * @since Twenty Thirteen 1.0
 */
function strapthirteen_custom_header_fonts() {

	// Add Genericons font.
	wp_enqueue_style( 'genericons', get_stylesheet_directory_uri() . '/css/genericons.css', array(), '2.09' );
}
add_action( 'admin_print_styles-appearance_page_custom-header', 'strapthirteen_custom_header_fonts' );

/**
 * Styles the header text displayed on the blog.
 *
 * get_header_textcolor() options: Hide text (returns 'blank'), or any hex value.
 *
 * @since Twenty Thirteen 1.0
 */
function strapthirteen_header_style() {
	$header_image = get_header_image();
	$text_color   = get_header_textcolor();

	// If no custom options for text are set, let's bail.
	if ( empty( $header_image ) && $text_color == get_theme_support( 'custom-header', 'default-text-color' ) )
		return;

	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="strapthirteen-header-css">
	<?php
		if ( ! empty( $header_image ) ) :
	?>
		.site-header {
			background: url(<?php header_image(); ?>) no-repeat scroll top;
			background-size: 100% 100%;
		}
		@media (max-width: 1599px) {
		  .site-header {
		    background-size: 100% 95%;
		  }	
		}
		@media (max-width: 1069px) {
		  .site-header {
		    background-size: 100% 90%;
		  }	
		}
		@media (max-width: 999px) {
		  .site-header {
		    background-size: 100% 85%;
		  }	
		}
		@media (max-width: 767px) {
		  .site-header {
		    background-size: 100% 70%;
		  }	
		}
		@media (max-width: 643px) {
		  .site-header {
		    background-size: 100% 60%;
		  }
          .site-description {
            display: none;
		  }		  
		}
		@media (max-width: 359px) {
		  .site-header {
		    background-size: 100% 55%;
		  }	
		}
	<?php
		endif;

		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			position: absolute;
			clip: rect(1px 1px 1px 1px); /* IE7 */
			clip: rect(1px, 1px, 1px, 1px);
		}
	<?php
			if ( empty( $header_image ) ) :
	?>
		.site-header .home-link {
			min-height: 0;
		}
	<?php
			endif;

		// If the user has set a custom color for the text, use that.
		elseif ( $text_color != get_theme_support( 'custom-header', 'default-text-color' ) ) :
	?>
		.site-title,
		.site-description {
			color: #<?php echo esc_attr( $text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}

/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @since Twenty Thirteen 1.0
 */
function strapthirteen_admin_header_style() {
	$header_image = get_header_image();
?>
	<style type="text/css" id="strapthirteen-admin-header-css">
	.appearance_page_custom-header #headimg {
		border: none;
		-webkit-box-sizing: border-box;
		-moz-box-sizing:    border-box;
		box-sizing:         border-box;
		<?php
		if ( ! empty( $header_image ) ) {
			echo 'background: url(' . esc_url( $header_image ) . ') no-repeat scroll top; background-size: 1600px auto;';
		} ?>
		padding: 0 20px;
	}
	#headimg .home-link {
		-webkit-box-sizing: border-box;
		-moz-box-sizing:    border-box;
		box-sizing:         border-box;
		margin: 0 auto;
		max-width: 1040px;
		<?php
		if ( ! empty( $header_image ) || display_header_text() ) {
			echo 'min-height: 230px;';
		} ?>
		width: 100%;
	}
	<?php if ( ! display_header_text() ) : ?>
	#headimg h1,
	#headimg h2 {
		position: absolute !important;
		clip: rect(1px 1px 1px 1px); /* IE7 */
		clip: rect(1px, 1px, 1px, 1px);
	}
	<?php endif; ?>
	#headimg h1 {
		font: bold 60px/1 Bitter, Georgia, serif;
		margin: 0;
		padding: 58px 0 10px;
	}
	#headimg h1 a {
		text-decoration: none;
	}
	#headimg h1 a:hover {
		text-decoration: underline;
	}
	#headimg h2 {
		font: 200 italic 24px "Source Sans Pro", Helvetica, sans-serif;
		margin: 0;
		text-shadow: none;
	}
	.default-header img {
		max-width: 230px;
		width: auto;
	}
	</style>
<?php
}

/**
 * Outputs markup to be displayed on the Appearance > Header admin panel.
 * This callback overrides the default markup displayed there.
 *
 * @since Twenty Thirteen 1.0
 */
function strapthirteen_admin_header_image() {
	?>
	<div id="headimg" style="background: url(<?php header_image(); ?>) no-repeat scroll top; background-size: 1600px auto;">
		<?php $style = ' style="color:#' . get_header_textcolor() . ';"'; ?>
		<div class="home-link">
			<h1 class="displaying-header-text"><a id="name"<?php echo $style; ?> onclick="return false;" href="#"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 id="desc" class="displaying-header-text"<?php echo $style; ?>><?php bloginfo( 'description' ); ?></h2>
		</div>
	</div>
<?php }
