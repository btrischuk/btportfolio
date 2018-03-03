<?php

/** Template Name: about */ 


get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="hero">
				<img class= "about-home" src= '<?php echo CFS()->get( 'about_hero_image' );	?>'>

		<?php if ( have_posts() ) : ?>
			<div class="hero">

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			
			<div>
				<p class="about-paragraph">
					I am a Front End Developer with a strong focus on Wordpress, JavaScript, PHP, Html5, Css3, Sass, jQuery, and  Responsive Designed web pages.
				</p>

				<p class="about-paragraph">
					Often I am described as a rock climber which everyone I ever tell seems to have a completely different perspective of what that entails. Instead of directly clearing the misconception, I feed my very sarcastic humour with various comments. This gives me great joy.  This lifestyle requires a high level of creativity and psych when one finds himself in the prairies, home of one climbable rock within a 500km range. Needless to say I now find myself living amongst the mountains.
				</p>

				<p class="about-paragraph">
					I  am very grateful for this foundation as it has taught me a great deal regarding how to pursue a goal in the face of intimidation, and many hurdles. This mindset, allows me to transfer it in the world of programming.
				</p>

				<p class="about-paragraph">
					I am currently pouring a greater amount of my pie-chart-percentages into my recently discovered passion of Software Development.
				</p>
			</div>

			</div>	

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content' ); ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>


