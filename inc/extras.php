<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package btportfolio
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function btportfolio_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'btportfolio_body_classes' );

function lovesea_login_logo() {
	echo '<style type="text/css">                                                                   
			#login h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/red-panda.jpg) !important; 
			background-size: 265px 250px;
			height: 250px;
			width: 265px;
		}                            
	</style>';
}
add_action('login_head', 'lovesea_login_logo');

//Front Page Hero Image

function front_page_hero_css() {
	if (! is_front_page('front-page.php' ) ) {
		return;
	}
	
$image = CFS()->get('front_header_image');

if ( ! $image ) {
	return;
}

$front_hero_css = ".hero {
	background-image: url({$image});
	background-repeat: no-repeat;
	background-size: cover;
	min-height: 90vh;
}";

wp_add_inline_style( 'btportfolio', $front_hero_css);
}
add_action( 'wp_enqueue_scripts', 'front_page_hero_css' );