<?php
/**
 * The main template file.
 *
 * @package portfolio
 */
/* Template Name: front-page */ 


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					<div class="entry-header custom-hero">
      			<img src= '<?php echo CFS()->get( 'front_header_image' );	?>'>
					</div>
				</header>
      <?php endif; ?>
      
      <div id="hero" class="hero" class="hidden">
        <!-- <h1>Hello.</h1> -->
				<h1 class="title">Breckon Trischuk</h1>
        <h2 class="title">Front-End Web Developer</h2>
      </div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>



			<?php get_template_part( 'template-parts/content', 'none' ); ?>



	
  

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


