<?php

/** Template Name: projects */ 


get_header(); ?>

<div class="project-content">

  <p class="mobile-project-info">Click on the project's image for breif description!</p>
  <p class="tablet-project-info">Hover on the project's image for breif description!</p>

	<div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title' );	?></h2>
    <div class= "project-image">
      <img class= "project-image" src= '<?php echo CFS()->get( 'project_image' );	?>'>
      <p class= "project-description"><?php echo CFS()->get( 'project_description' );	?></p>
    </div>
    <a class="project-button" href="https://github.com/redacademy/lovesea-fall-2017/tree/master/themes/lovesea">Explore Site!</a></p>
  </div>
          
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title2' );	?></h2>
    <div class= "project-image">
      <img class= "project-image" src= '<?php echo CFS()->get( 'project_image2' );	?>'>
      <p class= "project-description"><?php echo CFS()->get( 'project_description2' );	?></p>
    </div>
    <a class="project-button" href="https://github.com/btrischuk/inhabitent">Explore Site!</a></p>
  </div>
          
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title3' );	?></h2>
    <div class= "project-image">
      <img class= "project-image" src= '<?php echo CFS()->get( 'project_image3' );	?>'>
      <p class= "project-description"><?php echo CFS()->get( 'project_description3' );	?></p>
    </div>
    <a class="project-button" href="https://github.com/btrischuk/Quotes-on-Dev">Explore Site!</a></p>
  </div>
  
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title4' );	?></h2>
    <div class= "project-image">
      <img class= "project-image" src= '<?php echo CFS()->get( 'project_image4' );	?>'>
      <p class= "project-description"><?php echo CFS()->get( 'project_description4' );	?></p>
    </div>
    <a class="project-button" href="https://btrischuk.github.io/pong/">Play Pong!</a></p>
  </div>
  
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title5' );	?></h2>
    <div class= "project-image">
      <img class= "project-image" src= '<?php echo CFS()->get( 'project_image5' );	?>'>
      <p class= "project-description"><?php echo CFS()->get( 'project_description5' );	?></p>
    </div>
    <a class="project-button" href="https://btrischuk.github.io/instanews/">Explore Site!</a></p>
  </div>
  
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title6' );	?></h2>
    <div class= "project-image">
      <img class= "project-image" src= '<?php echo CFS()->get( 'project_image6' );	?>'>
      <p class= "project-description"><?php echo CFS()->get( 'project_description6' );	?></p>
    </div>
    <a class="project-button" href="https://btrischuk.github.io/perfect-paddles/">Explore Site!</a></p>
	</div>
				

</div>
<?php get_footer(); ?>


