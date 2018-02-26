<?php

/** Template Name: projects */ 


get_header(); ?>

<div class="project-content">

	<div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title' );	?></h2>
    <p class= "project-description"><?php echo CFS()->get( 'project_description' );	?></p>
    <img class= "project-image" src= '<?php echo CFS()->get( 'project_image' );	?>'>
    <a class="project-buton" href="https://github.com/redacademy/lovesea-fall-2017/tree/master/themes/lovesea">Explore Site!</a></p>
  </div>
          
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title2' );	?></h2>
    <p class= "project-description"><?php echo CFS()->get( 'project_description2' );	?></p>
    <img class= "project-image" src= '<?php echo CFS()->get( 'project_image2' );	?>'>
    <a class="project-buton" href="https://github.com/btrischuk/inhabitent">Explore Site!</a></p>
  </div>
          
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title3' );	?></h2>
    <p class= "project-description"><?php echo CFS()->get( 'project_description3' );	?></p>
    <img class= "project-image" src= '<?php echo CFS()->get( 'project_image3' );	?>'>
    <a class="project-buton" href="https://github.com/btrischuk/Quotes-on-Dev">Explore Site!</a></p>
  </div>
  
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title4' );	?></h2>
    <p class= "project-description"><?php echo CFS()->get( 'project_description4' );	?></p>
    <img class= "project-image" src= '<?php echo CFS()->get( 'project_image4' );	?>'>
    <a class="project-buton" href="https://btrischuk.github.io/pong/">Play Pong!</a></p>
  </div>
  
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title5' );	?></h2>
    <p class= "project-description"><?php echo CFS()->get( 'project_description5' );	?></p>
    <img class= "project-image" src= '<?php echo CFS()->get( 'project_image5' );	?>'>
    <a class="project-buton" href="https://btrischuk.github.io/instanews/">Explore Site!</a></p>
	</div>
				

</div>
<?php get_footer(); ?>


