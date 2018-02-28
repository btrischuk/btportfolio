<?php
/**
 * The header for our theme.
 *
 * @package btportfolio
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>

			<header id="masthead" class="site-header" role="banner">
				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<div class="logo-container">
						<a href="<?php echo get_home_url(); ?>"><div class="logo"><p>Breckon Trischuk.</p></div></a>
						</div>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation" role="navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
			

					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
				</nav><!-- #site-navigation -->
				
				<div class="mobile-menu">
						<li class="page_item page-item-2"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'about me' ) ) ); ?>">About me</a></li>
						<li class="page_item page-item-27"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'my Projects' ) ) ); ?>">My Projects</a></li>
						<li class="page_item page-item-31"><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'contact me' ) ) ); ?>">Contact Me</a></li>
					</div>

			</header><!-- #masthead -->

			<div id="content" class="site-content">
