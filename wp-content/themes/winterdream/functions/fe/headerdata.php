<?php
/**
 * Headerdata of Theme options.
 * @package WinterDream
 * @since WinterDream 1.0.0
*/  

// Additional CSS
if(	!is_admin()){
function winterdream_fonts_include () {
global $winterdream_defaults;
// Google Fonts
$bodyfont = get_theme_mod('winterdream_body_google_fonts', $winterdream_defaults['winterdream_body_google_fonts']);
$headingfont = get_theme_mod('winterdream_headings_google_fonts', $winterdream_defaults['winterdream_headings_google_fonts']);
$headlinefont = get_theme_mod('winterdream_headline_google_fonts', $winterdream_defaults['winterdream_headline_google_fonts']);
$postentryfont = get_theme_mod('winterdream_postentry_google_fonts', $winterdream_defaults['winterdream_postentry_google_fonts']);
$sidebarfont = get_theme_mod('winterdream_sidebar_google_fonts', $winterdream_defaults['winterdream_sidebar_google_fonts']);
$menufont = get_theme_mod('winterdream_menu_google_fonts', $winterdream_defaults['winterdream_menu_google_fonts']);

$fonturl = "//fonts.googleapis.com/css?family=";
$character_set = "&amp;subset=" . get_theme_mod('winterdream_character_set', 'latin');

$bodyfonturl = $fonturl.$bodyfont.$character_set;
$headingfonturl = $fonturl.$headingfont.$character_set;
$headlinefonturl = $fonturl.$headlinefont.$character_set;
$postentryfonturl = $fonturl.$postentryfont.$character_set;
$sidebarfonturl = $fonturl.$sidebarfont.$character_set;
$menufonturl = $fonturl.$menufont.$character_set;
	// Google Fonts
     if ($bodyfont != 'default' && $bodyfont != ''){
      wp_enqueue_style('winterdream-google-font1', $bodyfonturl); 
		 }
     if ($headingfont != 'default' && $headingfont != ''){
      wp_enqueue_style('winterdream-google-font2', $headingfonturl);
		 }
     if ($headlinefont != 'default' && $headlinefont != ''){
      wp_enqueue_style('winterdream-google-font4', $headlinefonturl); 
		 }
     if ($postentryfont != 'default' && $postentryfont != ''){
      wp_enqueue_style('winterdream-google-font5', $postentryfonturl); 
		 }
     if ($sidebarfont != 'default' && $sidebarfont != ''){
      wp_enqueue_style('winterdream-google-font6', $sidebarfonturl);
		 }
     if ($menufont != 'default' && $menufont != ''){
      wp_enqueue_style('winterdream-google-font8', $menufonturl);
		 }
}
add_action( 'wp_enqueue_scripts', 'winterdream_fonts_include' );
}

// Additional CSS
function winterdream_css_include () {
global $winterdream_defaults;
    if (get_theme_mod('winterdream_layout_width', $winterdream_defaults['winterdream_layout_width']) != 'Wide' ){
			wp_enqueue_style('winterdream-boxed-layout', get_template_directory_uri().'/css/boxed-layout.css');
		}
    
    if (get_theme_mod('winterdream_css', $winterdream_defaults['winterdream_css']) == 'Purple' ){
			wp_enqueue_style('winterdream-style-purple', get_template_directory_uri().'/css/colors/purple.css');
		}

		if (get_theme_mod('winterdream_css', $winterdream_defaults['winterdream_css']) == 'Red' ){
			wp_enqueue_style('winterdream-style-red', get_template_directory_uri().'/css/colors/red.css');
		}
}
add_action( 'wp_enqueue_scripts', 'winterdream_css_include' );

// Background Pattern Opacity
function winterdream_get_background_pattern_opacity() {
global $winterdream_defaults;
    $background_pattern_opacity = get_theme_mod('winterdream_background_pattern_opacity', $winterdream_defaults['winterdream_background_pattern_opacity']); 
		if ($background_pattern_opacity != '' && $background_pattern_opacity != '100' && $background_pattern_opacity != 'Default') { ?>
		<?php echo '#wrapper .pattern { opacity: 0.'; ?><?php echo $background_pattern_opacity ?><?php echo '; filter: alpha(opacity='; ?><?php echo $background_pattern_opacity ?><?php echo '); }'; ?>
<?php } 
    elseif ($background_pattern_opacity == '100') { ?>
    <?php echo '#wrapper .pattern { opacity: 1; filter: alpha(opacity=100); }';
}  
} 

// Display Sidebar on Posts/Pages
function winterdream_display_sidebar() {
global $winterdream_defaults;
    $display_sidebar = get_theme_mod('winterdream_display_sidebar', $winterdream_defaults['winterdream_display_sidebar']); 
		if ($display_sidebar == 'Hide') { ?>
		<?php _e('.single .container #main-content, .page .container #main-content, .error404 .container #main-content { width: 100%; }', 'winterdream'); ?>
<?php } 
}

// Display Sidebar on Archives
function winterdream_display_sidebar_archives() {
global $winterdream_defaults;
    $display_sidebar_archives = get_theme_mod('winterdream_display_sidebar_archives', $winterdream_defaults['winterdream_display_sidebar_archives']); 
		if ($display_sidebar_archives == 'Hide') { ?>
		<?php _e('.blog .container #main-content, .archive .container #main-content, .search .container #main-content { width: 100%; } .archive #sidebar { display: none; }', 'winterdream'); ?>
<?php } 
}

// Header Layout - Wide
function winterdream_get_header_layout() {
global $winterdream_defaults;
    $header_layout = get_theme_mod('winterdream_header_layout', $winterdream_defaults['winterdream_header_layout']); 
		if ($header_layout == 'Wide') { ?>
		<?php _e('#wrapper-header .site-title { text-align: left; } #wrapper-header .header-logo { margin-left: 0; } .rtl #wrapper-header .site-title { text-align: right; } @media screen and (max-width: 990px) { html #wrapper #wrapper-header .header-content .site-title, html #wrapper #wrapper-header .header-content .header-logo { margin-bottom: 0 !important; } }', 'winterdream'); ?>
<?php } 
}

// Title Box width
function winterdream_get_page_title_width() {
global $winterdream_defaults;
    $page_title_width = get_theme_mod('winterdream_page_title_width', $winterdream_defaults['winterdream_page_title_width']); 
    $header_layout = get_theme_mod('winterdream_header_layout', $winterdream_defaults['winterdream_header_layout']);
		if ($page_title_width != '' && $header_layout == 'Wide') { ?>
		<?php _e('#wrapper #wrapper-header .title-box { width: ', 'winterdream'); ?><?php echo $page_title_width ?><?php _e(';}', 'winterdream'); ?>
<?php } 
}

// Menu Box width
function winterdream_get_header_menu_width() {
global $winterdream_defaults;
    $header_menu_width = get_theme_mod('winterdream_header_menu_width', $winterdream_defaults['winterdream_header_menu_width']); 
    $header_layout = get_theme_mod('winterdream_header_layout', $winterdream_defaults['winterdream_header_layout']);
		if ($header_menu_width != '' && $header_layout == 'Wide') { ?>
		<?php _e('#wrapper #wrapper-header .menu-box { width: ', 'winterdream'); ?><?php echo $header_menu_width ?><?php _e(';}', 'winterdream'); ?>
<?php } 
}

// Featured Images Size
function winterdream_featured_image_size() {
global $winterdream_defaults;
    $featured_image_size = get_theme_mod('winterdream_featured_image_size', $winterdream_defaults['winterdream_featured_image_size']); 
		if ($featured_image_size == 'Large') { ?>
		<?php _e('.post-entry .attachment-post-thumbnail { margin: 0 0 10px; max-width: 100%; clear: both; float: none; }', 'winterdream'); ?>
<?php } 
}

// Display Meta Box - post entries styling
function winterdream_display_meta_post_entry() {
global $winterdream_defaults;
    $display_meta_post_entry = get_theme_mod('winterdream_display_meta_post_entry', $winterdream_defaults['winterdream_display_meta_post_entry']); 
		if ($display_meta_post_entry == 'Hide') { ?>
		<?php _e('body #main-content .post-entry .post-entry-headline { margin-bottom: 10px; }', 'winterdream'); ?>
<?php } 
}

// FONTS
// Body font
function winterdream_get_body_font() {
global $winterdream_defaults;
    $bodyfont = get_theme_mod('winterdream_body_google_fonts', $winterdream_defaults['winterdream_body_google_fonts']);
    if ($bodyfont != 'default' && $bodyfont != '') { ?>
    <?php _e('html body, #wrapper blockquote, #wrapper q, #wrapper .container #comments .comment, #wrapper .container #comments .comment time, #wrapper .container #commentform .form-allowed-tags, #wrapper .container #commentform p, #wrapper input, #wrapper button, #wrapper textarea, #wrapper select, #wrapper #main-content .post-meta { font-family: "', 'winterdream'); ?><?php echo $bodyfont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'winterdream'); ?>
<?php } 
}

// Site title font
function winterdream_get_headings_google_fonts() {
global $winterdream_defaults;
    $headingfont = get_theme_mod('winterdream_headings_google_fonts', $winterdream_defaults['winterdream_headings_google_fonts']); 
		if ($headingfont != 'default' && $headingfont != '') { ?>
		<?php _e('#wrapper #wrapper-header .site-title { font-family: "', 'winterdream'); ?><?php echo $headingfont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'winterdream'); ?>
<?php } 
}

// Page/post headlines font
function winterdream_get_headlines_font() {
global $winterdream_defaults;
    $headlinefont = get_theme_mod('winterdream_headline_google_fonts', $winterdream_defaults['winterdream_headline_google_fonts']);
    if ($headlinefont != 'default' && $headlinefont != '') { ?>
		<?php _e('#wrapper h1, #wrapper h2, #wrapper h3, #wrapper h4, #wrapper h5, #wrapper h6, #wrapper .container .navigation .section-heading, #wrapper #comments .entry-headline, #wrapper .header-image .header-image-text .header-image-headline { font-family: "', 'winterdream'); ?><?php echo $headlinefont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'winterdream'); ?>
<?php } 
}

// Post entry font
function winterdream_get_postentry_font() {
global $winterdream_defaults;
    $postentryfont = get_theme_mod('winterdream_postentry_google_fonts', $winterdream_defaults['winterdream_postentry_google_fonts']); 
		if ($postentryfont != 'default' && $postentryfont != '') { ?>
		<?php _e('#wrapper #main-content .post-entry .post-entry-headline, #wrapper #main-content .grid-entry .grid-entry-headline { font-family: "', 'winterdream'); ?><?php echo $postentryfont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'winterdream'); ?>
<?php } 
}

// Sidebar and Footer widget headlines font
function winterdream_get_sidebar_widget_font() {
global $winterdream_defaults;
    $sidebarfont = get_theme_mod('winterdream_sidebar_google_fonts', $winterdream_defaults['winterdream_sidebar_google_fonts']);
    if ($sidebarfont != 'default' && $sidebarfont != '') { ?>
		<?php _e('#wrapper .container #sidebar .sidebar-widget .sidebar-headline, #wrapper #wrapper-footer #footer .footer-widget .footer-headline { font-family: "', 'winterdream'); ?><?php echo $sidebarfont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'winterdream'); ?>
<?php } 
}

// Main Header menu font
function winterdream_get_menu_font() {
global $winterdream_defaults;
    $menufont = get_theme_mod('winterdream_menu_google_fonts', $winterdream_defaults['winterdream_menu_google_fonts']); 
		if ($menufont != 'default' && $menufont != '') { ?>
		<?php _e('#wrapper #wrapper-header .menu-box ul li a, #wrapper #wrapper-header .menu-panel ul li a { font-family: "', 'winterdream'); ?><?php echo $menufont ?><?php _e('", Arial, Helvetica, sans-serif; }', 'winterdream'); ?>
<?php } 
}

// User defined CSS.
function winterdream_get_own_css() {
global $winterdream_defaults;
    $own_css = get_theme_mod('winterdream_own_css', $winterdream_defaults['winterdream_own_css']); 
		if ($own_css != '') { ?>
		<?php echo esc_attr($own_css); ?>
<?php } 
}

// Display custom CSS.
function winterdream_custom_styles() { ?>
<?php echo ("<style type='text/css'>"); ?>
<?php winterdream_get_own_css(); ?>
<?php winterdream_get_background_pattern_opacity(); ?>
<?php winterdream_display_sidebar(); ?>
<?php winterdream_display_sidebar_archives(); ?>
<?php winterdream_get_header_layout(); ?>
<?php winterdream_get_page_title_width(); ?>
<?php winterdream_get_header_menu_width(); ?>
<?php winterdream_featured_image_size(); ?>
<?php winterdream_display_meta_post_entry(); ?>
<?php winterdream_get_body_font(); ?>
<?php winterdream_get_headings_google_fonts(); ?>
<?php winterdream_get_headlines_font(); ?>
<?php winterdream_get_postentry_font(); ?>
<?php winterdream_get_sidebar_widget_font(); ?>
<?php winterdream_get_menu_font(); ?>
<?php echo ("</style>"); ?>
<?php
} 
add_action('wp_enqueue_scripts', 'winterdream_custom_styles'); ?>