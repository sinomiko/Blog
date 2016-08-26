<?php
/**
 * WinterDream Theme Customizer.
 * @package WinterDream
 * @since WinterDream 2.0.0
*/

/**
 * Default values - backwards compatibility for older WinterDream versions.
 *  
*/ 
$winterdream_theme_options = get_option('winterdream_options');

if ($winterdream_theme_options != false) {
$winterdream_defaults = array(
			'winterdream_css' => $winterdream_theme_options['winterdream_css'],
			'winterdream_layout_width' => $winterdream_theme_options['winterdream_layout_width'],
			'winterdream_display_breadcrumb' => $winterdream_theme_options['winterdream_display_breadcrumb'],
			'winterdream_display_background_pattern' => $winterdream_theme_options['winterdream_display_background_pattern'],
			'winterdream_background_pattern_opacity' => $winterdream_theme_options['winterdream_background_pattern_opacity'],
			'winterdream_display_sidebar' => $winterdream_theme_options['winterdream_display_sidebar'],
			'winterdream_display_sidebar_archives' => $winterdream_theme_options['winterdream_display_sidebar_archives'],
			'winterdream_header_layout' => $winterdream_theme_options['winterdream_header_layout'],
			'winterdream_display_header_image' => $winterdream_theme_options['winterdream_display_header_image'],
			'winterdream_page_title_width' => $winterdream_theme_options['winterdream_page_title_width'] . '%',
			'winterdream_header_menu_width' => $winterdream_theme_options['winterdream_header_menu_width'] . '%',
			'winterdream_logo_url' => $winterdream_theme_options['winterdream_logo_url'],
			'winterdream_header_address' => $winterdream_theme_options['winterdream_header_address'],
			'winterdream_header_email' => $winterdream_theme_options['winterdream_header_email'],
			'winterdream_header_phone' => $winterdream_theme_options['winterdream_header_phone'],
			'winterdream_header_skype' => $winterdream_theme_options['winterdream_header_skype'],
			'winterdream_header_image_headline' => $winterdream_theme_options['winterdream_header_image_headline'],
			'winterdream_header_image_link_url' => $winterdream_theme_options['winterdream_header_image_link_url'],
			'winterdream_header_image_link_text' => $winterdream_theme_options['winterdream_header_image_link_text'],
			'winterdream_display_image_post' => $winterdream_theme_options['winterdream_display_image_post'],
			'winterdream_display_meta_post' => $winterdream_theme_options['winterdream_display_meta_post'],
			'winterdream_next_preview_post' => $winterdream_theme_options['winterdream_next_preview_post'],
			'winterdream_display_image_page' => $winterdream_theme_options['winterdream_display_image_page'],
			'winterdream_post_entry_format' => $winterdream_theme_options['winterdream_post_entry_format'],
			'winterdream_display_meta_post_entry' => $winterdream_theme_options['winterdream_display_meta_post_entry'],
			'winterdream_featured_image_size' => $winterdream_theme_options['winterdream_featured_image_size'],
			'winterdream_content_archives' => $winterdream_theme_options['winterdream_content_archives'],
			'winterdream_display_site_description' => $winterdream_theme_options['winterdream_display_site_description'],
			'winterdream_body_google_fonts' => $winterdream_theme_options['winterdream_body_google_fonts'],
			'winterdream_headings_google_fonts' => $winterdream_theme_options['winterdream_headings_google_fonts'],
			'winterdream_headline_google_fonts' => $winterdream_theme_options['winterdream_headline_google_fonts'],
			'winterdream_postentry_google_fonts' => $winterdream_theme_options['winterdream_postentry_google_fonts'],
			'winterdream_sidebar_google_fonts' => $winterdream_theme_options['winterdream_sidebar_google_fonts'],
			'winterdream_menu_google_fonts' => $winterdream_theme_options['winterdream_menu_google_fonts'],
			'winterdream_own_css' => $winterdream_theme_options['winterdream_own_css'] );
} else {
$winterdream_defaults = array(
			'winterdream_css' => 'Blue (default)',
			'winterdream_layout_width' => 'Boxed',
			'winterdream_display_breadcrumb' => 'Display',
			'winterdream_display_background_pattern' => 'Display',
			'winterdream_background_pattern_opacity' => 'Default',
			'winterdream_display_sidebar' => 'Display',
			'winterdream_display_sidebar_archives' => 'Display',
			'winterdream_header_layout' => 'Centered',
			'winterdream_display_header_image' => 'Everywhere',
			'winterdream_page_title_width' => '50%',
			'winterdream_header_menu_width' => '50%',
			'winterdream_logo_url' => '',
			'winterdream_header_address' => '',
			'winterdream_header_email' => '',
			'winterdream_header_phone' => '',
			'winterdream_header_skype' => '',
			'winterdream_header_image_headline' => '',
			'winterdream_header_image_link_url' => '',
			'winterdream_header_image_link_text' => '',
			'winterdream_display_image_post' => 'Display',
			'winterdream_display_meta_post' => 'Display',
			'winterdream_next_preview_post' => 'Display',
			'winterdream_display_image_page' => 'Display',
			'winterdream_post_entry_format' => 'One Column',
			'winterdream_display_meta_post_entry' => 'Display',
			'winterdream_featured_image_size' => 'Small',
			'winterdream_content_archives' => 'Excerpt',
			'winterdream_display_site_description' => 'Display',
			'winterdream_body_google_fonts' => 'default',
			'winterdream_headings_google_fonts' => 'default',
			'winterdream_headline_google_fonts' => 'default',
			'winterdream_postentry_google_fonts' => 'default',
			'winterdream_sidebar_google_fonts' => 'default',
			'winterdream_menu_google_fonts' => 'default',
			'winterdream_own_css' => '' );
}

function winterdream_customize_register($wp_customize){

global $winterdream_defaults;

$winterdream_fonts = array(
			'default' => 'default',	
			'Abel' => 'Abel',			
			'Aclonica' => 'Aclonica',
			'Actor' => 'Actor',
			'Adamina' => 'Adamina',
			'Aldrich' => 'Aldrich',
			'Alegreya Sans' => 'Alegreya Sans',
			'Alice' => 'Alice',
			'Alike' => 'Alike',
			'Allan' => 'Allan',
			'Allerta' => 'Allerta',
      'Amarante' => 'Amarante',
			'Amaranth' => 'Amaranth',
      'Andika' => 'Andika',
			'Antic' => 'Antic',
			'Anton' => 'Anton',
			'Arimo' => 'Arimo',	
			'Artifika' => 'Artifika',
			'Arvo' => 'Arvo',
			'Bitter' => 'Bitter',
			'Brawler' => 'Brawler',
			'Buda' => 'Buda',	
      'Butcherman' => 'Butcherman',	
      'Cabin' => 'Cabin',
			'Candal' => 'Candal',
			'Cantarell' => 'Cantarell',	
      'Cherry Swash' => 'Cherry Swash',				
			'Chivo' => 'Chivo',			
			'Coda' => 'Coda',	
      'Concert One' => 'Concert One',		
			'Copse' => 'Copse',
			'Corben' => 'Corben',
			'Cousine' => 'Cousine',			
			'Coustard' => 'Coustard',
			'Covered By Your Grace' => 'Covered By Your Grace',
			'Crafty Girls' => 'Crafty Girls',
			'Crimson Text' => 'Crimson Text',
			'Crushed' => 'Crushed',
			'Cuprum' => 'Cuprum',
			'Damion' => 'Damion',
			'Dancing Script' => 'Dancing Script',
			'Dawning of a New Day' => 'Dawning of a New Day',
			'Days One' => 'Days One',
			'Delius' => 'Delius',
			'Delius Swash Caps' => 'Delius Swash Caps',
			'Delius Unicase' => 'Delius Unicase',
			'Didact Gothic' => 'Didact Gothic',
			'Dorsa' => 'Dorsa',
			'Dosis' => 'Dosis',
			'Droid Sans' => 'Droid Sans',
			'Droid Sans Mono' => 'Droid Sans Mono',
      'Droid Serif' => 'Droid Serif',
			'EB Garamond' => 'EB Garamond',
			'Expletus Sans' => 'Expletus Sans',
			'Fanwood Text' => 'Fanwood Text',
			'Federo' => 'Federo',
			'Fontdiner Swanky' => 'Fontdiner Swanky',
			'Forum' => 'Forum',
			'Francois One' => 'Francois One',
			'Gentium Basic' => 'Gentium Basic',
			'Gentium Book Basic' => 'Gentium Book Basic',
			'Geo' => 'Geo',
			'Geostar' => 'Geostar',
			'Geostar Fill' => 'Geostar Fill',
      'Gilda Display' => 'Gilda Display',
			'Give You Glory' => 'Give You Glory',
			'Gloria Hallelujah' => 'Gloria Hallelujah',
			'Goblin One' => 'Goblin One',
			'Goudy Bookletter 1911' => 'Goudy Bookletter 1911',
			'Gravitas One' => 'Gravitas One',
			'Gruppo' => 'Gruppo',
			'Hammersmith One' => 'Hammersmith One',
			'Hind' => 'Hind',
			'Holtwood One SC' => 'Holtwood One SC',
			'Homemade Apple' => 'Homemade Apple',
			'Inconsolata' => 'Inconsolata',
			'Indie Flower' => 'Indie Flower',
      'IM Fell English' => 'IM Fell English',
			'Irish Grover' => 'Irish Grover',
			'Irish Growler' => 'Irish Growler',
			'Istok Web' => 'Istok Web',
			'Judson' => 'Judson',
			'Julee' => 'Julee',
			'Just Another Hand' => 'Just Another Hand',
			'Just Me Again Down Here' => 'Just Me Again Down Here',
			'Kameron' => 'Kameron',
			'Kelly Slab' => 'Kelly Slab',
			'Kenia' => 'Kenia',
			'Kranky' => 'Kranky',
			'Kreon' => 'Kreon',
			'Kristi' => 'Kristi',
			'La Belle Aurore' => 'La Belle Aurore',
      'Lato' => 'Lato',
			'League Script' => 'League Script',
			'Leckerli One' => 'Leckerli One',
			'Lekton' => 'Lekton',
      'Lily Script One' => 'Lily Script One',
			'Limelight' => 'Limelight',
			'Lobster' => 'Lobster',
			'Lobster Two' => 'Lobster Two',
			'Lora' => 'Lora',
			'Love Ya Like A Sister' => 'Love Ya Like A Sister',
			'Loved by the King' => 'Loved by the King',
      'Lovers Quarrel' => 'Lovers Quarrel',
			'Luckiest Guy' => 'Luckiest Guy',
			'Maiden Orange' => 'Maiden Orange',
			'Mako' => 'Mako',
			'Marvel' => 'Marvel',
			'Maven Pro' => 'Maven Pro',
			'Meddon' => 'Meddon',
			'MedievalSharp' => 'MedievalSharp',
      'Medula One' => 'Medula One',
			'Megrim' => 'Megrim',
			'Merienda One' => 'Merienda One',
			'Merriweather' => 'Merriweather',
			'Metrophobic' => 'Metrophobic',
			'Michroma' => 'Michroma',
			'Miltonian Tattoo' => 'Miltonian Tattoo',
			'Miltonian' => 'Miltonian',
			'Modern Antiqua' => 'Modern Antiqua',
			'Molengo' => 'Molengo',
      'Monofett' => 'Monofett',
			'Monoton' => 'Monoton',
      'Montaga' => 'Montaga',
			'Montez' => 'Montez',
      'Montserrat' => 'Montserrat',
			'Mountains of Christmas' => 'Mountains of Christmas',
			'Muli' => 'Muli',
			'Neucha' => 'Neucha',
			'Neuton' => 'Neuton',
			'News Cycle' => 'News Cycle',
			'Nixie One' => 'Nixie One',
			'Nobile' => 'Nobile',
			'Noto Sans' => 'Noto Sans',
			'Nova Cut' => 'Nova Cut',
			'Nova Flat' => 'Nova Flat',
			'Nova Mono' => 'Nova Mono',
			'Nova Oval' => 'Nova Oval',
			'Nova Round' => 'Nova Round',
			'Nova Script' => 'Nova Script',
			'Nova Slim' => 'Nova Slim',
			'Nova Square' => 'Nova Square',
			'Numans' => 'Numans',
			'Nunito' => 'Nunito',
      'Open Sans' => 'Open Sans',
			'Oswald' => 'Oswald',
			'Over the Rainbow' => 'Over the Rainbow',
			'Ovo' => 'Ovo',
			'Oxygen' => 'Oxygen',
			'Pacifico' => 'Pacifico',
			'Passero One' => 'Passero One',
			'Passion One' => 'Passion One',
			'Patrick Hand' => 'Patrick Hand',
			'Paytone One' => 'Paytone One',
			'Permanent Marker' => 'Permanent Marker',
			'Philosopher' => 'Philosopher',
			'Play' => 'Play',
			'Playfair Display' => 'Playfair Display',
			'Podkova' => 'Podkova',
			'Poller One' => 'Poller One',
			'Pompiere' => 'Pompiere',
			'Prata' => 'Prata',
			'Prociono' => 'Prociono',
			'PT Sans' => 'PT Sans',
			'PT Sans Caption' => 'PT Sans Caption',
			'PT Sans Narrow' => 'PT Sans Narrow',
			'PT Serif' => 'PT Serif',
			'PT Serif Caption' => 'PT Serif Caption',
			'Puritan' => 'Puritan',
			'Quattrocento' => 'Quattrocento',
			'Quattrocento Sans' => 'Quattrocento Sans',
			'Questrial' => 'Questrial',
			'Radley' => 'Radley',
			'Raleway' => 'Raleway', 
      'Rationale' => 'Rationale',
			'Redressed' => 'Redressed',
      'Reenie Beanie' => 'Reenie Beanie', 
      'Roboto' => 'Roboto',
      'Roboto Condensed' => 'Roboto Condensed',
			'Rock Salt' => 'Rock Salt',
			'Rochester' => 'Rochester',
			'Rokkitt' => 'Rokkitt',
			'Rosario' => 'Rosario',
			'Ruslan Display' => 'Ruslan Display',
      'Sancreek' => 'Sancreek',
			'Sansita One' => 'Sansita One',
			'Schoolbell' => 'Schoolbell',
			'Shadows Into Light' => 'Shadows Into Light',
			'Shanti' => 'Shanti',
			'Short Stack' => 'Short Stack',
			'Sigmar One' => 'Sigmar One',
			'Six Caps' => 'Six Caps',
			'Slackey' => 'Slackey',
			'Smokum' => 'Smokum',
			'Smythe' => 'Smythe',
			'Sniglet' => 'Sniglet',
			'Snippet' => 'Snippet',
			'Sorts Mill Goudy' => 'Sorts Mill Goudy',
			'Special Elite' => 'Special Elite',
			'Spinnaker' => 'Spinnaker',
			'Stardos Stencil' => 'Stardos Stencil',
			'Sue Ellen Francisco' => 'Sue Ellen Francisco',
			'Sunshiney' => 'Sunshiney',
			'Swanky and Moo Moo' => 'Swanky and Moo Moo',
			'Syncopate' => 'Syncopate',
			'Tangerine' => 'Tangerine',
			'Tenor Sans' => 'Tenor Sans',
			'Terminal Dosis Light' => 'Terminal Dosis Light',
			'Tinos' => 'Tinos',
			'Titillium Web' => 'Titillium Web',
			'Tulpen One' => 'Tulpen One',
			'Ubuntu' => 'Ubuntu',
			'Ultra' => 'Ultra',
      'UnifrakturCook' => 'UnifrakturCook',
			'UnifrakturMaguntia' => 'UnifrakturMaguntia',
      'Unkempt' => 'Unkempt',
			'Unna' => 'Unna',
			'Varela' => 'Varela',
			'Varela Round' => 'Varela Round',
			'Vibur' => 'Vibur',
			'Vidaloka' => 'Vidaloka',
			'Volkhov' => 'Volkhov',
			'Vollkorn' => 'Vollkorn',
			'Voltaire' => 'Voltaire',
			'VT323' => 'VT323',
			'Waiting for the Sunrise' => 'Waiting for the Sunrise',
			'Wallpoet' => 'Wallpoet',
			'Walter Turncoat' => 'Walter Turncoat',
			'Wire One' => 'Wire One',
			'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
			'Yellowtail' => 'Yellowtail',
			'Yeseva One' => 'Yeseva One',
			'Zeyada' => 'Zeyada');
      
/**
 * Textarea custom control.
 *  
*/ 
class winterdream_customize_textarea_control extends WP_Customize_Control {
    public $type = 'textarea'; 
    public function render_content() { ?>
        <label>
        <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
        <textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
        </label>
<?php }}

/**
 * Sections and Options.
 *  
*/     
    $wp_customize->add_section('winterdream_general_settings', array(
        'title'    => __('WinterDream General Settings', 'winterdream'),
        'description' => '',
        'priority' => 120,
    ));
    $wp_customize->add_section('winterdream_header_settings', array(
        'title'    => __('WinterDream Header Settings', 'winterdream'),
        'description' => '',
        'priority' => 130,
    ));
    $wp_customize->add_section('winterdream_posts_settings', array(
        'title'    => __('WinterDream Posts/Pages Settings', 'winterdream'),
        'description' => '',
        'priority' => 140,
    ));
    $wp_customize->add_section('winterdream_post_entries_settings', array(
        'title'    => __('WinterDream Post Entries Settings', 'winterdream'),
        'description' => '',
        'priority' => 150,
    ));
    $wp_customize->add_section('winterdream_font_settings', array(
        'title'    => __('WinterDream Font Settings', 'winterdream'),
        'description' => '',
        'priority' => 160,
    ));
 
    //  =============================
    //  = Color Scheme              =
    //  =============================
    $wp_customize->add_setting('winterdream_css', array(
        'default'        => $winterdream_defaults['winterdream_css'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_css_control', array(
        'label'      => __('Color Scheme', 'winterdream'),
        'section'    => 'winterdream_general_settings',
        'settings'   => 'winterdream_css',
        'type'       => 'radio',
        'choices'    => array(
            'Blue (default)' => __( 'Blue (default)' , 'winterdream' ),
            'Purple' => __( 'Purple' , 'winterdream' ),
            'Red' => __( 'Red' , 'winterdream' ),
        ),
    ));
    
    //  =============================
    //  = Layout Style              =
    //  =============================
    $wp_customize->add_setting('winterdream_layout_width', array(
        'default'        => $winterdream_defaults['winterdream_layout_width'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_layout_width_control', array(
        'label'      => __('Layout Style', 'winterdream'),
        'section'    => 'winterdream_general_settings',
        'settings'   => 'winterdream_layout_width',
        'type'       => 'radio',
        'choices'    => array(
            'Boxed' => __( 'Boxed' , 'winterdream' ),
            'Wide' => __( 'Wide' , 'winterdream' ),
        ),
    ));
    
    //  =================================
    //  = Display Breadcrumb Navigation =
    //  =================================
    $wp_customize->add_setting('winterdream_display_breadcrumb', array(
        'default'        => $winterdream_defaults['winterdream_display_breadcrumb'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_display_breadcrumb_control', array(
        'label'      => __('Display Breadcrumb Navigation', 'winterdream'),
        'section'    => 'winterdream_general_settings',
        'settings'   => 'winterdream_display_breadcrumb',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'winterdream' ),
            'Hide' => __( 'Hide' , 'winterdream' ),
        ),
    ));
    
    //  =================================
    //  = Background Pattern            =
    //  =================================
    $wp_customize->add_setting('winterdream_display_background_pattern', array(
        'default'        => $winterdream_defaults['winterdream_display_background_pattern'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_display_background_pattern_control', array(
        'label'      => __('Background Pattern', 'winterdream'),
        'section'    => 'winterdream_general_settings',
        'settings'   => 'winterdream_display_background_pattern',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'winterdream' ),
            'Hide' => __( 'Hide' , 'winterdream' ),
        ),
    ));
    
    //  =================================
    //  = Background Pattern Opacity    =
    //  =================================
    $wp_customize->add_setting('winterdream_background_pattern_opacity', array(
        'default'        => $winterdream_defaults['winterdream_background_pattern_opacity'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_background_pattern_opacity_control', array(
        'label'      => __('Background Pattern Opacity', 'winterdream'),
        'section'    => 'winterdream_general_settings',
        'settings'   => 'winterdream_background_pattern_opacity',
        'type'       => 'radio',
        'choices'    => array(
            'Default' => __( 'Default' , 'winterdream' ),
            '100' => '100',
            '90' => '90',
            '80' => '80',
            '70' => '70',
            '60' => '60',
            '50' => '50',
            '40' => '40',
            '30' => '30',
            '20' => '20',
            '10' => '10',
        ),
    ));
    
    //  ==================================
    //  = Display Sidebar on Posts/Pages =
    //  ==================================
    $wp_customize->add_setting('winterdream_display_sidebar', array(
        'default'        => $winterdream_defaults['winterdream_display_sidebar'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_display_sidebar_control', array(
        'label'      => __('Display Sidebar on Posts/Pages', 'winterdream'),
        'section'    => 'winterdream_general_settings',
        'settings'   => 'winterdream_display_sidebar',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'winterdream' ),
            'Hide' => __( 'Hide' , 'winterdream' ),
        ),
    ));
    
    //  ==================================
    //  = Display Sidebar on Archives    =
    //  ==================================
    $wp_customize->add_setting('winterdream_display_sidebar_archives', array(
        'default'        => $winterdream_defaults['winterdream_display_sidebar_archives'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_display_sidebar_archives_control', array(
        'label'      => __('Display Sidebar on Archives', 'winterdream'),
        'section'    => 'winterdream_general_settings',
        'settings'   => 'winterdream_display_sidebar_archives',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'winterdream' ),
            'Hide' => __( 'Hide' , 'winterdream' ),
        ),
    ));
    
    //  ==================================
    //  = Header Layout                  =
    //  ==================================
    $wp_customize->add_setting('winterdream_header_layout', array(
        'default'        => $winterdream_defaults['winterdream_header_layout'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_header_layout_control', array(
        'label'      => __('Header Layout', 'winterdream'),
        'section'    => 'winterdream_header_settings',
        'settings'   => 'winterdream_header_layout',
        'type'       => 'radio',
        'choices'    => array(
            'Centered' => __( 'Centered' , 'winterdream' ),
            'Wide' => __( 'Wide' , 'winterdream' ),
        ),
    ));
    
    //  ==================================
    //  = Display Header Image           =
    //  ==================================
    $wp_customize->add_setting('winterdream_display_header_image', array(
        'default'        => $winterdream_defaults['winterdream_display_header_image'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_display_header_image_control', array(
        'label'      => __('Display Header Image', 'winterdream'),
        'section'    => 'winterdream_header_settings',
        'settings'   => 'winterdream_display_header_image',
        'type'       => 'radio',
        'choices'    => array(
            'Everywhere' => __( 'Everywhere' , 'winterdream' ),
            'Only on Homepage' => __( 'Only on Homepage' , 'winterdream' ),
            'Everywhere except Homepage' => __( 'Everywhere except Homepage' , 'winterdream' ),
        ),
    ));
    
    //  =================================
    //  = Title Box/Logo width          =
    //  =================================
    $wp_customize->add_setting('winterdream_page_title_width', array(
        'default'        => $winterdream_defaults['winterdream_page_title_width'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_page_title_width_control', array(
        'label'      => __('Title Box/Logo width (in Wide Header Layout)', 'winterdream'),
        'section'    => 'winterdream_header_settings',
        'settings'   => 'winterdream_page_title_width',
        'type'       => 'radio',
        'choices'    => array(
            '100%' => '100%',
            '90%' => '90%',
            '80%' => '80%',
            '70%' => '70%',
            '60%' => '60%',
            '50%' => '50%',
            '40%' => '40%',
            '30%' => '30%',
            '20%' => '20%',
            '10%' => '10%',
            '0%' => '0%',
        ),
    ));
    
    //  =================================
    //  = Menu Box width                =
    //  =================================
    $wp_customize->add_setting('winterdream_header_menu_width', array(
        'default'        => $winterdream_defaults['winterdream_header_menu_width'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_header_menu_width_control', array(
        'label'      => __('Menu Box width (in Wide Header Layout)', 'winterdream'),
        'section'    => 'winterdream_header_settings',
        'settings'   => 'winterdream_header_menu_width',
        'type'       => 'radio',
        'choices'    => array(
            '100%' => '100%',
            '90%' => '90%',
            '80%' => '80%',
            '70%' => '70%',
            '60%' => '60%',
            '50%' => '50%',
            '40%' => '40%',
            '30%' => '30%',
            '20%' => '20%',
            '10%' => '10%',
            '0%' => '0%',
        ),
    ));
    
    //  =============================
    //  = Header Logo               =
    //  =============================
    $wp_customize->add_setting('winterdream_logo_url', array(
        'default'        => $winterdream_defaults['winterdream_logo_url'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_uri',
    ));
 
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'winterdream_logo_url_control', array(
        'label'    => __('Header Logo', 'winterdream'),
        'section'  => 'winterdream_header_settings',
        'settings' => 'winterdream_logo_url',
    )));
    
    //  =============================
    //  = Postal Address            =
    //  =============================
    $wp_customize->add_setting('winterdream_header_address', array(
        'default'        => $winterdream_defaults['winterdream_header_address'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_header_address_control', array(
        'label'      => __('Postal Address', 'winterdream'),
        'section'    => 'winterdream_header_settings',
        'settings'   => 'winterdream_header_address',
    ));
    
    //  =============================
    //  = Email Address             =
    //  =============================
    $wp_customize->add_setting('winterdream_header_email', array(
        'default'        => $winterdream_defaults['winterdream_header_email'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_header_email_control', array(
        'label'      => __('Email Address', 'winterdream'),
        'section'    => 'winterdream_header_settings',
        'settings'   => 'winterdream_header_email',
    ));
    
    //  =============================
    //  = Phone Number              =
    //  =============================
    $wp_customize->add_setting('winterdream_header_phone', array(
        'default'        => $winterdream_defaults['winterdream_header_phone'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_header_phone_control', array(
        'label'      => __('Phone Number', 'winterdream'),
        'section'    => 'winterdream_header_settings',
        'settings'   => 'winterdream_header_phone',
    ));
    
    //  =============================
    //  = Skype Name                =
    //  =============================
    $wp_customize->add_setting('winterdream_header_skype', array(
        'default'        => $winterdream_defaults['winterdream_header_skype'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_header_skype_control', array(
        'label'      => __('Skype Name', 'winterdream'),
        'section'    => 'winterdream_header_settings',
        'settings'   => 'winterdream_header_skype',
    ));
    
    //  =============================
    //  = Header Image Headline     =
    //  =============================
    $wp_customize->add_setting('winterdream_header_image_headline', array(
        'default'        => $winterdream_defaults['winterdream_header_image_headline'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_header_image_headline_control', array(
        'label'      => __('Homepage Header Image Headline', 'winterdream'),
        'section'    => 'winterdream_header_settings',
        'settings'   => 'winterdream_header_image_headline',
    ));
    
    //  =============================
    //  = Header Image Link URL     =
    //  =============================
    $wp_customize->add_setting('winterdream_header_image_link_url', array(
        'default'        => $winterdream_defaults['winterdream_header_image_link_url'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_uri',
    ));
 
    $wp_customize->add_control('winterdream_header_image_link_url_control', array(
        'label'      => __('Homepage Header Image Link URL', 'winterdream'),
        'section'    => 'winterdream_header_settings',
        'settings'   => 'winterdream_header_image_link_url',
    ));
    
    //  =============================
    //  = Header Image Link Text    =
    //  =============================
    $wp_customize->add_setting('winterdream_header_image_link_text', array(
        'default'        => $winterdream_defaults['winterdream_header_image_link_text'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_header_image_link_text_control', array(
        'label'      => __('Homepage Header Image Link Text', 'winterdream'),
        'section'    => 'winterdream_header_settings',
        'settings'   => 'winterdream_header_image_link_text',
    ));
    
    //  ==========================================
    //  = Display Featured Image on single posts =
    //  ==========================================
    $wp_customize->add_setting('winterdream_display_image_post', array(
        'default'        => $winterdream_defaults['winterdream_display_image_post'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_display_image_post_control', array(
        'label'      => __('Display Featured Image on single posts', 'winterdream'),
        'section'    => 'winterdream_posts_settings',
        'settings'   => 'winterdream_display_image_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'winterdream' ),
            'Hide' => __( 'Hide' , 'winterdream' ),
        ),
    ));
    
    //  ====================================
    //  = Display Meta Box on single posts =
    //  ====================================
    $wp_customize->add_setting('winterdream_display_meta_post', array(
        'default'        => $winterdream_defaults['winterdream_display_meta_post'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_display_meta_post_control', array(
        'label'      => __('Display Meta Box on single posts', 'winterdream'),
        'section'    => 'winterdream_posts_settings',
        'settings'   => 'winterdream_display_meta_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'winterdream' ),
            'Hide' => __( 'Hide' , 'winterdream' ),
        ),
    ));
    
    //  =================================
    //  = Next/Previous Post Navigation =
    //  =================================
    $wp_customize->add_setting('winterdream_next_preview_post', array(
        'default'        => $winterdream_defaults['winterdream_next_preview_post'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_next_preview_post_control', array(
        'label'      => __('Display Next/Previous Post Navigation on single posts', 'winterdream'),
        'section'    => 'winterdream_posts_settings',
        'settings'   => 'winterdream_next_preview_post',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'winterdream' ),
            'Hide' => __( 'Hide' , 'winterdream' ),
        ),
    ));
    
    //  ==========================================
    //  = Display Featured Image on pages        =
    //  ==========================================
    $wp_customize->add_setting('winterdream_display_image_page', array(
        'default'        => $winterdream_defaults['winterdream_display_image_page'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_display_image_page_control', array(
        'label'      => __('Display Featured Image on pages', 'winterdream'),
        'section'    => 'winterdream_posts_settings',
        'settings'   => 'winterdream_display_image_page',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'winterdream' ),
            'Hide' => __( 'Hide' , 'winterdream' ),
        ),
    ));
    
    //  ==================================
    //  = Post Entries Format            =
    //  ==================================
    $wp_customize->add_setting('winterdream_post_entry_format', array(
        'default'        => $winterdream_defaults['winterdream_post_entry_format'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_post_entry_format_control', array(
        'label'      => __('Post Entries Format', 'winterdream'),
        'section'    => 'winterdream_post_entries_settings',
        'settings'   => 'winterdream_post_entry_format',
        'type'       => 'radio',
        'choices'    => array(
            'One Column' => __( 'One Column' , 'winterdream' ),
            'Grid - Masonry' => __( 'Grid - Masonry' , 'winterdream' ),
        ),
    ));
    
    //  ====================================
    //  = Display Meta Box on Post Entries =
    //  ====================================
    $wp_customize->add_setting('winterdream_display_meta_post_entry', array(
        'default'        => $winterdream_defaults['winterdream_display_meta_post_entry'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_display_meta_post_entry_control', array(
        'label'      => __('Display Meta Box on Post Entries', 'winterdream'),
        'section'    => 'winterdream_post_entries_settings',
        'settings'   => 'winterdream_display_meta_post_entry',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'winterdream' ),
            'Hide' => __( 'Hide' , 'winterdream' ),
        ),
    ));
    
    //  ===============================
    //  = Featured Images Size        =
    //  ===============================
    $wp_customize->add_setting('winterdream_featured_image_size', array(
        'default'        => $winterdream_defaults['winterdream_featured_image_size'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_featured_image_size_control', array(
        'label'      => __('Featured Images Size', 'winterdream'),
        'section'    => 'winterdream_post_entries_settings',
        'settings'   => 'winterdream_featured_image_size',
        'type'       => 'radio',
        'choices'    => array(
            'Small' => __( 'Small' , 'winterdream' ),
            'Large' => __( 'Large' , 'winterdream' ),
        ),
    ));
    
    //  ===============================
    //  = Content/Excerpt Displaying  =
    //  ===============================
    $wp_customize->add_setting('winterdream_content_archives', array(
        'default'        => $winterdream_defaults['winterdream_content_archives'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_content_archives_control', array(
        'label'      => __('Content/Excerpt Displaying', 'winterdream'),
        'section'    => 'winterdream_post_entries_settings',
        'settings'   => 'winterdream_content_archives',
        'type'       => 'radio',
        'choices'    => array(
            'Excerpt' => __( 'Excerpt' , 'winterdream' ),
            'Content' => __( 'Content' , 'winterdream' ),
        ),
    ));
    
    //  ====================================
    //  = Display Site Description         =
    //  ====================================
    $wp_customize->add_setting('winterdream_display_site_description', array(
        'default'        => $winterdream_defaults['winterdream_display_site_description'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_display_site_description_control', array(
        'label'      => __('Display Site Description on Latest Posts (Blog) page', 'winterdream'),
        'section'    => 'winterdream_post_entries_settings',
        'settings'   => 'winterdream_display_site_description',
        'type'       => 'radio',
        'choices'    => array(
            'Display' => __( 'Display' , 'winterdream' ),
            'Hide' => __( 'Hide' , 'winterdream' ),
        ),
    ));
    
    //  ==============================
    //  = Character Set              =
    //  ==============================
    $wp_customize->add_setting('winterdream_character_set', array(
        'default'        => 'latin',
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control('winterdream_character_set_control', array(
        'label'      => __('Character Set', 'winterdream'),
        'section'    => 'winterdream_font_settings',
        'settings'   => 'winterdream_character_set',
        'type'       => 'radio',
        'choices'    => array(
            'latin' => __( 'Latin' , 'winterdream' ),
            'latin-ext' => __( 'Latin Extended' , 'winterdream' ),
            'cyrillic' => __( 'Cyrillic' , 'winterdream' ),
            'cyrillic-ext' => __( 'Cyrillic Extended' , 'winterdream' ),
            'greek' => __( 'Greek' , 'winterdream' ),
            'greek-ext' => __( 'Greek Extended' , 'winterdream' ),
            'vietnamese' => __( 'Vietnamese' , 'winterdream' ),
        ),
    ));
    
    //  =============================
    //  = Body font                 =
    //  =============================
     $wp_customize->add_setting('winterdream_body_google_fonts', array(
        'default'        => $winterdream_defaults['winterdream_body_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
 
    ));
    $wp_customize->add_control( 'winterdream_body_google_fonts_control', array(
        'settings' => 'winterdream_body_google_fonts',
        'label'   => __('Body font', 'winterdream'),
        'section' => 'winterdream_font_settings',
        'type'    => 'select',
        'choices'    => $winterdream_fonts,
    ));
    
    //  =============================
    //  = Site Title font           =
    //  =============================
     $wp_customize->add_setting('winterdream_headings_google_fonts', array(
        'default'        => $winterdream_defaults['winterdream_headings_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
 
    ));
    $wp_customize->add_control( 'winterdream_headings_google_fonts_control', array(
        'settings' => 'winterdream_headings_google_fonts',
        'label'   => __('Site Title font', 'winterdream'),
        'section' => 'winterdream_font_settings',
        'type'    => 'select',
        'choices'    => $winterdream_fonts,
    ));
    
    //  =============================
    //  = Page/Post Headlines font  =
    //  =============================
     $wp_customize->add_setting('winterdream_headline_google_fonts', array(
        'default'        => $winterdream_defaults['winterdream_headline_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
 
    ));
    $wp_customize->add_control( 'winterdream_headline_google_fonts_control', array(
        'settings' => 'winterdream_headline_google_fonts',
        'label'   => __('Page/Post Headlines font', 'winterdream'),
        'section' => 'winterdream_font_settings',
        'type'    => 'select',
        'choices'    => $winterdream_fonts,
    ));
    
    //  =============================
    //  = Post Entry Headline font  =
    //  =============================
     $wp_customize->add_setting('winterdream_postentry_google_fonts', array(
        'default'        => $winterdream_defaults['winterdream_postentry_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
 
    ));
    $wp_customize->add_control( 'winterdream_postentry_google_fonts_control', array(
        'settings' => 'winterdream_postentry_google_fonts',
        'label'   => __('Post Entry Headline font', 'winterdream'),
        'section' => 'winterdream_font_settings',
        'type'    => 'select',
        'choices'    => $winterdream_fonts,
    ));
    
    //  ========================================
    //  = Sidebar/Footer Widget Headlines font =
    //  ========================================
     $wp_customize->add_setting('winterdream_sidebar_google_fonts', array(
        'default'        => $winterdream_defaults['winterdream_sidebar_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
 
    ));
    $wp_customize->add_control( 'winterdream_sidebar_google_fonts_control', array(
        'settings' => 'winterdream_sidebar_google_fonts',
        'label'   => __('Sidebar/Footer Widget Headlines font', 'winterdream'),
        'section' => 'winterdream_font_settings',
        'type'    => 'select',
        'choices'    => $winterdream_fonts,
    ));
    
    //  =============================
    //  = Main Header Menu font     =
    //  =============================
     $wp_customize->add_setting('winterdream_menu_google_fonts', array(
        'default'        => $winterdream_defaults['winterdream_menu_google_fonts'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
 
    ));
    $wp_customize->add_control( 'winterdream_menu_google_fonts_control', array(
        'settings' => 'winterdream_menu_google_fonts',
        'label'   => __('Main Header Menu font', 'winterdream'),
        'section' => 'winterdream_font_settings',
        'type'    => 'select',
        'choices'    => $winterdream_fonts,
    ));
    
    //  =============================
    //  = Custom CSS                =
    //  =============================
    $wp_customize->add_setting('winterdream_own_css', array(
        'default'        => $winterdream_defaults['winterdream_own_css'],
        'capability'     => 'edit_theme_options',
        'type'           => 'theme_mod',
        'sanitize_callback' => 'winterdream_sanitize_text',
    ));
 
    $wp_customize->add_control( new winterdream_customize_textarea_control($wp_customize, 'winterdream_own_css_control', array(
        'label'    => __('Custom CSS', 'winterdream'),
        'section'  => 'winterdream_general_settings',
        'settings' => 'winterdream_own_css',
    )));
}

add_action('customize_register', 'winterdream_customize_register');

/**
 * Sanitize URIs
*/
function winterdream_sanitize_uri($uri) {
	if('' === $uri){
		return '';
	}
	return esc_url_raw($uri);
}

/**
 * Sanitize Texts
*/
function winterdream_sanitize_text($str) {
	if('' === $str){
		return '';
	}
	return sanitize_text_field( $str);
} ?>