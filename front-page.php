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
        <h1>Hello.</h1>
        <h1>I'm Breckon.</h1>
        <h2>I create websites.</h2>
      </div>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		<section id="project" class="project-grid-container">
    	<h2 class="project-header">My Projects</h2>
    	<div class="latest-adventures-content">

				<div class="inhabitent">
					<h3 class="men">Inhabtent</h3>
					<button>more details</button>
				</div>

				<div class="lovesea"> 
					<h3 class="men">Lovesea</h3>
					<button>more details</button>
				</div>

				<div class="aloha"> 
					<h3 class="men">Aloha</h3>
					<button>more details</button>
				</div>

				<div class="perfect-paddles">
					<h3 class="men">Perfect Paddles</h3>
					<button>more details</button>
				</div>
				
			</div>
    </section>
  

		</section>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


