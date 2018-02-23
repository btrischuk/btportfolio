<?php

/** Template Name: contact */ 


get_header(); ?>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <div class="connect-hero">
        <img class= "coffee" src= '<?php echo CFS()->get( 'contact_hero_image' );	?>'>
        <h1 class="coffee-date">Let's Grab a Coffee!</h1>
      </div>

			<?php while ( have_posts() ) : the_post(); ?>
			


			<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
  </div><!-- #primary -->



<?php get_footer(); ?>


