<?php
/**
 * ruggedrobotics functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ruggedrobotics
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ruggedrobotics_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on ruggedrobotics, use a find and replace
		* to change 'ruggedrobotics' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ruggedrobotics', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ruggedrobotics' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ruggedrobotics_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ruggedrobotics_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ruggedrobotics_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ruggedrobotics_content_width', 640 );
}
add_action( 'after_setup_theme', 'ruggedrobotics_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ruggedrobotics_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ruggedrobotics' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ruggedrobotics' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ruggedrobotics_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ruggedrobotics_scripts() {
	wp_enqueue_style( 'ruggedrobotics-style', get_stylesheet_uri(), array(), (string) time() );
	wp_style_add_data( 'ruggedrobotics-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ruggedrobotics-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_style( 'wpb-google-fonts-fira', 'https://fonts.google.com/specimen/Fira+Mono?query=fira+mono', false );
	
	wp_enqueue_style( 'wpb-google-fonts-pathways', 'https://fonts.google.com/specimen/Pathway+Extreme?query=pathway+ext', false );
	
    
	wp_enqueue_style('owl-carousel-min', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '12102023', 'all' );
    wp_enqueue_style('customcss', get_template_directory_uri() . '/css/custom.css', array(), (string) time(), 'all' );
	wp_enqueue_style('custom2css', get_template_directory_uri() . '/css/custom2.css', array(), (string) time(), 'all' );
	wp_enqueue_style('custom3css', get_template_directory_uri() . '/css/custom3.css', array(), (string) time(), 'all' );
	wp_enqueue_style('custom4css', get_template_directory_uri() . '/css/custom4.css', array(), (string) time(), 'all' );
	wp_enqueue_style('homecss', get_template_directory_uri() . '/css/home.css', array(), (string) time(), 'all' );
	wp_enqueue_style('howitworkcss', get_template_directory_uri() . '/css/how-it-work.css', array(), (string) time(), 'all' );
	wp_enqueue_style('missioncss', get_template_directory_uri() . '/css/mission.css', array(), (string) time(), 'all' );
	wp_enqueue_style('commoncss', get_template_directory_uri() . '/css/common.css', array(), (string) time(), 'all' );

	

	wp_enqueue_style('custom_work_with_us_css', get_template_directory_uri() . '/css/custom_work_with_us.css', array(), (string) time(), 'all' );
	wp_enqueue_style('about_css', get_template_directory_uri() . '/css/about_css.css', array(), (string) time(), 'all' );

	wp_enqueue_script('owl-carousel-min-js', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), '12102023', 'true' );
	wp_enqueue_script('commonjs', get_template_directory_uri() . '/js/common.js', array(), (string) time(), 'true' );
	wp_enqueue_script('customjs', get_template_directory_uri() . '/js/custom.js', array(), (string) time(), 'true' );
	
	wp_enqueue_script('customdevjs', get_template_directory_uri() . '/js/customdev.js', array(), (string) time(), 'true' );
	wp_localize_script( 'customdevjs', 'rr_ajax_object', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );

	wp_enqueue_style('googleFonts-Fira-Mono', '//fonts.googleapis.com/css2?family=Fira+Mono:wght@400;500;700&display=swap');
	wp_enqueue_style('googleFonts-Pathway-Extreme', '//fonts.googleapis.com/css2?family=Pathway+Extreme:opsz,wght@8..144,100;8..144,200;8..144,300;8..144,400;8..144,500;8..144,600;8..144,700;8..144,800;8..144,900&display=swap');

}
add_action( 'wp_enqueue_scripts', 'ruggedrobotics_scripts' );

require get_template_directory() . '/inc/post-types.php';
require get_template_directory() . '/inc/shortcodes.php';
require get_template_directory() . '/inc/ajax-functions.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

// ** Allow SVG **
add_filter( 'wp_check_filetype_and_ext', function($data, $file, $filename, $mimes) {

	//   global $wp_version;
	//   if ( $wp_version !== '4.7.1' ) {
	//      return $data;
	//   }
	
	  $filetype = wp_check_filetype( $filename, $mimes );
	
	  return [
		  'ext'             => $filetype['ext'],
		  'type'            => $filetype['type'],
		  'proper_filename' => $data['proper_filename']
	  ];
	
	}, 10, 4 );
	
	function cc_mime_types( $mimes ){
	  $mimes['svg'] = 'image/svg+xml';
	  return $mimes;
	}
	add_filter( 'upload_mimes', 'cc_mime_types' );
	
	function fix_svg() {
	  echo '<style type="text/css">
			.attachment-266x266, .thumbnail img {
				 width: 100% !important;
				 height: auto !important;
			}
			</style>';
	}
	add_action( 'admin_head', 'fix_svg' );
	
	// ** End Allow SVG **
add_filter( 'use_widgets_block_editor', '__return_false' );
/****/
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
            'page_title'    => __('Theme General Settings'),
            'menu_title'    => __('Theme Settings'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
}
/****/