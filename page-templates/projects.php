<?php

/** Template Name: projects */ 


get_header(); ?>

<div class="project-content">

	<div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title' );	?></h2>
    <p class= "project-description"><?php echo CFS()->get( 'project_description' );	?></p>
    <img class= "project-image" src= '<?php echo CFS()->get( 'project_image' );	?>'>
    <button>More Info</button>
  </div>
          
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title2' );	?></h2>
    <p class= "project-description"><?php echo CFS()->get( 'project_description2' );	?></p>
    <img class= "project-image" src= '<?php echo CFS()->get( 'project_image2' );	?>'>
    <button>More Info</button> 
  </div>
          
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title3' );	?></h2>
    <p class= "project-description"><?php echo CFS()->get( 'project_description3' );	?></p>
    <img class= "project-image" src= '<?php echo CFS()->get( 'project_image3' );	?>'>
    <button>More Info</button>
  </div>
  
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title4' );	?></h2>
    <p class= "project-description"><?php echo CFS()->get( 'project_description4' );	?></p>
    <img class= "project-image" src= '<?php echo CFS()->get( 'project_image4' );	?>'>
    <button>More Info</button>
  </div>
  
  <div class="entry-header ">
    <h2 class= "project-title"><?php echo CFS()->get( 'project_title5' );	?></h2>
    <p class= "project-description"><?php echo CFS()->get( 'project_description5' );	?></p>
    <img class= "project-image" src= '<?php echo CFS()->get( 'project_image5' );	?>'>
    <button>More Info</button>
	</div>

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

</div>
<?php get_footer(); ?>


