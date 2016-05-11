<?php
/**
 * Children's Museum of Illinois functions and definitions
 *
 * @package Children's Museum of Illinois
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'cmofil_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cmofil_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on _s, use a find and replace
	 * to change 'cmofil' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'cmofil', get_template_directory() . '/languages' );

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
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'cmofil' ),
		'headertop' => __( 'Header Top', 'cmofil' ),
		'socials' => __( 'Social Links', 'cmofil' ),
		'sidebar' => __( 'Sidebar', 'cmofil' )
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	/*add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );*/

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'cmofil_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

} // cmofil_setup()
endif; // cmofil_setup
add_action( 'after_setup_theme', 'cmofil_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function cmofil_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Sidebar', 'cmofil' ),
		'id'            => 'sidebar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer', 'cmofil' ),
		'id'            => 'footer',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Homepage Calendar', 'cmofil' ),
		'id'            => 'homepage-calendar',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

	register_sidebar( array(
		'name'          => __( 'Homepage News', 'cmofil' ),
		'id'            => 'homepage-news',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );

} // cmofil_widgets_init()
add_action( 'widgets_init', 'cmofil_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cmofil_scripts() {

	wp_enqueue_style( 'cmofil-style', get_stylesheet_uri(), array( 'dashicons' ) );

	wp_enqueue_script( 'cmofil-navigation', get_template_directory_uri() . '/js/navigation.min.js', array(), '20120206', true );

	wp_enqueue_script( 'cmofil-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

} // cmofil_scripts()
add_action( 'wp_enqueue_scripts', 'cmofil_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

/**
 * Load Slushman Themekit file.
 */
require get_template_directory() . '/inc/themekit.php';


function cmofil_get_hours() {

	$hours['closed'] 	= 'Closed';
	$hours['monday'] 	= 'Closed';
	$hours['tuesday'] 	= '9:30 AM - 4:30 PM';
	$hours['wednesday'] = '9:30 AM - 4:30 PM';
	$hours['thursday'] 	= '9:30 AM - 4:30 PM';
	$hours['friday'] 	= '9:30 AM - 4:30 PM';
	$hours['saturday'] 	= '10:00 AM - 5:00 PM';
	$hours['sunday'] 	= '1:00 PM - 5:00 PM';
	$hours['desc'] 		= 'Closed on Mondays and major holidays.';

	if ( '' == get_theme_mod( 'winter_hours' ) ) {

		$hours['monday'] 	= '9:30 AM - 4:30 PM';
		$hours['desc'] 		= 'Closed on major holidays.';

	}

	return $hours;

}

function cmofil_show_hours() {

	date_default_timezone_set( 'America/Chicago' );

	$hours 	= cmofil_get_hours();
	$day 	= strtolower( current_time( 'l' ) );
	$desc 	= $hours['desc'];

	if ( '' == get_theme_mod( 'display_closed' ) ) {

		$times 	= $hours[$day];

	} else {

		$times 	= $hours['closed'];

	}

	return array( $times, $desc );

}

/**
 * Adds Theme Options page, using ACF
 */
if( function_exists('acf_add_options_page') ) {
	$args['page_title'] 	= 'Theme Options';
	$args['menu_title'] 	= 'Theme Options';
	$args['parent_slug'] 	= 'themes.php';
	$args['capabilities'] 	= 'edit_posts';
	acf_add_options_sub_page( $args );
}

