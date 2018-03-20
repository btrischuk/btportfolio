<?php
/**
 * The main template file.
 *
 * @package btportfolio
 */
/* Template Name: front-page */ 


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					<div class="entry-header custom-hero">
      			<img src= '<?php echo CFS()->get( 'front_header_image' );	?>'>
					</div>
				</header>
      <?php endif; ?>
      
      <div class="hero">
        <!-- <h1>Hello.</h1> -->
				<h1>Breckon Trischuk</h1>
        <h2>Front-End Web Developer</h2>
      </div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

	
  

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


