<?php

if ( ! isset( $content_width ) )
	$content_width = 650;

/**
 * Adds support for a custom header image.
 */
require get_stylesheet_directory() . '/inc/custom-header.php';
	
function strapthirteen_theme_setup() {

  /*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style( array( 'css/editor-style.css', 'css/genericons.css', twentythirteen_fonts_url() ) );
  
  /*
	 * This theme supports custom background color and image, and here
	 * we also set up the default background color.
	 */
	add_theme_support( 'custom-background', array(
		'default-color' => '00A388',
	) );
	
    // Switches default core markup for search form, comment form, and comments
	// to output valid HTML5.
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list' ) );
  /*
| -------------------------------------------------------------------
| Adding Post Thumbnails and Image Sizes
| -------------------------------------------------------------------
| */

  add_image_size( 'strapthirteen-page-feature', 1230, 400, true ); //(cropped)
  add_image_size( 'strapthirteen-thumb-feature', 740, 270, true ); //(cropped)
  add_image_size( 'strapthirteen-page-static', 1230, 410, true ); //(cropped)
}
add_action( 'after_setup_theme', 'strapthirteen_theme_setup' );
/**
 * Enqueues scripts and styles for front end.
 *
 * @since Strap Thirteen 1.0
 *
 * @return void
 */
function strapthirteen_scripts_styles() {
	global $wp_styles;


	// Loads JavaScript file with functionality specific to Strap Thirteen.
	wp_enqueue_script( 'strapthirteen-bootstrap', get_stylesheet_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), '2.3.1', true );
	wp_enqueue_script( 'strapthirteen-carousel', get_stylesheet_directory_uri() . '/js/bootstrap-carousel2.3.1.js', array( 'jquery' ), '2.3.1', true );
	wp_enqueue_script('strapthirteen-extras', get_stylesheet_directory_uri() . '/js/strapthirteen-scripts.js', array('jquery'),'1.0', true );
	
	// Loads our main stylesheet.
	wp_enqueue_style( 'strapthirteen-bootstrap', get_stylesheet_directory_uri() . '/css/app.css', array( 'strapthirteen-style' ), '20130213' );
	wp_enqueue_style( 'strapthirteen-style', get_stylesheet_directory_uri() );
	    
	// Loads the Internet Explorer specific stylesheet.
	
	wp_enqueue_style( 'strapthirteen-carousel', get_stylesheet_directory_uri() . '/css/carousel.css', array( 'strapthirteen-style' ), '20130213' );
	wp_enqueue_style( 'strapthirteen-genericons', get_stylesheet_directory_uri() . '/css/genericons.css', array( 'strapthirteen-style' ), '20130213' );
}
add_action( 'wp_enqueue_scripts', 'strapthirteen_scripts_styles' );

// Lets build our customizer sections
function strapthirteen_customize_register($wp_customize) {
    // Setting group for selecting slider
   $wp_customize->add_section( 'strapthirteen_general_options' , array(
    'title'      => __('General Site Options','strapthirteen'),
    'priority'   => 30,
   ) );
   
   $wp_customize->add_section( 'strapthirteen_slider_options' , array(
    'title'      => __('Slider Options','strapthirteen'),
    'priority'   => 35,
   ) );

/**
 * Lets begin adding our own settings and controls for this theme
 * Plus organize it in sequence in each setting group with a priority level
 */
	
	$wp_customize->add_setting(
    'strapthirteen_site_format'
    );

    $wp_customize->add_control(
    'strapthirteen_site_format',
    array(
        'type' => 'checkbox',
        'label' => __('Switch to default layout?', 'strapthirteen'),
        'section' => 'strapthirteen_general_options',
		'priority' => '1',
        )
    );
	
	$wp_customize->add_setting(
    'strapthirteen_header_visibility'
    );

    $wp_customize->add_control(
    'strapthirteen_header_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('If Slider enabled hide header section? (Front Page Only)', 'strapthirteen'),
        'section' => 'strapthirteen_general_options',
		'priority' => '2',
        )
    );
	
	$wp_customize->add_setting(
    'strapthirteen_menubar_placement'
    );

    $wp_customize->add_control(
    'strapthirteen_menubar_placement',
    array(
        'type' => 'checkbox',
        'label' => __('Place Menubar Below Slider?', 'strapthirteen'),
        'section' => 'strapthirteen_general_options',
		'priority' => '3',
        )
    );
	
	$wp_customize->add_setting(
    'strapthirteen_menusearch_visibility'
    );

    $wp_customize->add_control(
    'strapthirteen_menusearch_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Hide menubar searchform?', 'strapthirteen'),
        'section' => 'strapthirteen_general_options',
		'priority' => '3',
        )
    );
	
	$wp_customize->add_setting(
    'strapthirteen_blogfeed_excerpts'
    );

    $wp_customize->add_control(
    'strapthirteen_blogfeed_excerpts',
    array(
        'type' => 'checkbox',
        'label' => __('Switch to full content on blog feed?', 'strapthirteen'),
        'section' => 'strapthirteen_general_options',
		'priority' => '4',
        )
    );
	
	$wp_customize->add_setting(
    'strapthirteen_excerpt_length'
    );

    $wp_customize->add_control(
    'strapthirteen_excerpt_length',
    array(
        'type' => 'text',
		'default' => '',
        'label' => __('Define the excerpt length (default is 80 chars)', 'strapthirteen'),
        'section' => 'strapthirteen_general_options',
		'priority' => '5',
        )
    );
	
	$wp_customize->add_setting(
    'strapthirteen_attachment_commentform_visibility'
    );

    $wp_customize->add_control(
    'strapthirteen_attachment_commentform_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Hide Comment Form on the Attachment page', 'strapthirteen'),
        'section' => 'strapthirteen_general_options',
		'priority' => '6',
        )
    );
	
	// Begin Slider Section
	$wp_customize->add_setting( 'strapthirteen_slider_transition', array(
		'default' => 'slide',
	) );

	
	$wp_customize->add_control( 'strapthirteen_slider_transition', array(
    'label'   => __( 'Slider Transition', 'strapthirteen' ),
    'section' => 'strapthirteen_slider_options',
	'priority' => '2',
    'type'    => 'radio',
        'choices' => array(
            'slide' => __( 'Slide', 'strapthirteen' ),
            'slide carousel-fade' => __( 'Fade', 'strapthirteen' ),
        ),
    ));
	
    //  = Category Dropdown =

    $categories = get_categories();
	$cats = array();
	$i = 0;
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cats[$category->slug] = $category->name;
	}
 
	$wp_customize->add_setting('strapthirteen_slide_cat', array(
		'default'        => $default
	));
	$wp_customize->add_control( 'strapthirteen_slide_cat', array(
		'settings' => 'strapthirteen_slide_cat',
		'label'   => __('Select Slider Category:', 'strapthirteen'),
		'section'  => 'strapthirteen_slider_options',
		'priority' => '3',
		'type'    => 'select',
		'choices' => $cats,
	));
	
	$wp_customize->add_setting(
    'strapthirteen_slide_number'
    );

    $wp_customize->add_control(
    'strapthirteen_slide_number',
    array(
        'type' => 'text',
		'default' => 5,
        'label' => __('Number Of Slides To Show - i.e 10 (default is 5)', 'strapthirteen'),
        'section' => 'strapthirteen_slider_options',
		'priority' => '4',
        )
    );
	
	$wp_customize->add_setting(
    'strapthirteen_slider_visibility'
    );

    $wp_customize->add_control(
    'strapthirteen_slider_visibility',
    array(
        'type' => 'checkbox',
        'label' => __('Show Home Slider', 'strapthirteen'),
        'section' => 'strapthirteen_slider_options',
		'priority' => '1',
        )
    );
}

add_action( 'customize_register', 'strapthirteen_customize_register' );


/**
 * Sets the post excerpt length to 80 words.
 */
function strapthirteen_excerpt_length($length) { 
    if ( get_theme_mod('strapthirteen_excerpt_length') ) : 
       return ( get_theme_mod('strapthirteen_excerpt_length') ); 
    else : 
       return 80;
    endif;	   
}
add_filter('excerpt_length', 'strapthirteen_excerpt_length');

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and wpstrapblogger_read_more_link().
 */
function strapthirteen_auto_excerpt_more($more) {
    return '<span class="ellipsis">&hellip;<a href="' . get_permalink() . '">' . __(' Continue Reading &#8250;&#8250;', 'strapthirteen') . '</a></span>';
}

add_filter('excerpt_more', 'strapthirteen_auto_excerpt_more');

function strapthirteen_body_class( $classes ) {
	$background_color = get_background_color();

	if ( empty( $background_color ) )
		$classes[] = 'custom-background-empty';
	elseif ( in_array( $background_color, array( 'fff', 'ffffff' ) ) )
		$classes[] = 'custom-background-white';

	return $classes;
}
add_filter( 'body_class', 'strapthirteen_body_class' );
