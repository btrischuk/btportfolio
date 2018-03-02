<?php
/**
 * btportfolio functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package btportfolio
 */

if ( ! function_exists( 'btportfolio' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function btportfolio() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // btportfolio
add_action( 'after_setup_theme', 'btportfolio' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function btportfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'btportfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'btportfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function btportfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Sidebar' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'btportfolio_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function btportfolio_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'btportfolio_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function btportfolio_scripts() {
	
	wp_enqueue_style( 'btportfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'btportfolio-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	wp_enqueue_script( 'jquery');

	wp_enqueue_script( 'smooth-state');

	wp_enqueue_script( 'smooth-state-functions');

	wp_enqueue_script( 'scripts', get_template_directory_uri() . '/build/js/scripts.min.js', array('jquery'), false, true);	

	wp_enqueue_script( 'menu-toggle', get_template_directory_uri() . '/build/js/nav-bar.min.js', array('jquery'), false, true);



	//if font awesome is a .js cdn link
	wp_enqueue_script( 'font-awesome-cdn', 'https://use.fontawesome.com/releases/v5.0.6/js/all.js', array(), 4.7, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'btportfolio_scripts' );

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';
