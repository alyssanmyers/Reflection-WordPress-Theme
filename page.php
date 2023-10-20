<?php 

/*
 * Theme Name: Reflection Film
 * Theme URI: N/A
 * Version: 1.0
 * Description: A custom theme for the thesis film, Reflection
 * Author: Alyssa Myers
 * Author URI: https://amyers.art
*/

get_header();

if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

	<main>
        <?php echo the_content(); ?>
	</main>
	
		
	</div> <!-- end container -->
</div> <!-- end wrapper -->
			
<?php

get_footer();

endwhile; endif; 
?>