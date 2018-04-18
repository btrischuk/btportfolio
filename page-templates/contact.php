<?php

/** Template Name: contact */ 


get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
    <div class="connect-hero">
      <img class= "coffee" src= '<?php echo CFS()->get( 'contact_hero_image' );	?>'>
      <h1 class="coffee-date">Let's Grab a Coffee!</h1>
      <p class="contact-info">Having issues with your current site? Feeling out of date and craving an upgrade? Wanting to bring your company's presence to the internet with a brand new page? I can help! Send me an email at<a href="mailto:me@breckontrischuk.com?Subject=Initial inquiry"> me@breckontrischuk.com</a> and we can get started! </p>
    </div>

			<?php while ( have_posts() ) : the_post(); ?>
			


      <?php get_template_part( 'template-parts/content', 'page' ); ?>
      <div class="g-recaptcha" data-sitekey="6LdhvkkUAAAAAATV-npAF8bbMHK2aiIJPSNvuvyX"></div>


			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
  </div><!-- #primary -->



<?php get_footer(); ?>


