<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * 
 *   * Template Name: error404
 *
 * @package btportfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Uh-Oh! Wires must be crossed!' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?' ); ?></p>

					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

					<?php if ( btportfolio_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widget-title"><?php echo esc_html( 'Most Used Categories' ); ?></h2>
						<ul>
				
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
