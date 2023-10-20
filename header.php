<?php

/*
 * Theme Name: Reflection Film
 * Theme URI: N/A
 * Version: 1.0
 * Description: A custom theme for the thesis film, Reflection
 * Author: Alyssa Myers
 * Author URI: https://amyers.art
*/

?>
<!DOCTYPE HTML>
<html>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="author" content="Alyssa Myers">
<meta name="description" content="<?php bloginfo( 'description' );?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>
	<?php bloginfo( 'name' );
        if ( !is_front_page() && is_category() ) :
            echo '&mdash;' . ucfirst(get_queried_object()->slug);
		elseif ( !is_front_page() ) : 
			echo '&mdash;' . get_the_title();
		elseif ( is_404() ) :
			echo '&mdash;' . 'Page Not Found!';
		endif; 
	?>
</title>

<?php
	wp_head();
?>

</head>

<body>
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
	$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );	
	?>
	<?php endwhile; endif; ?>
		
		<div class="burger-menu"><ul><li></li><li></li><li></li></ul>
			<img class="close-button" src="<?php bloginfo('template_url'); ?>/images/close.svg"/>
			</div>	
	
		<nav class="header-display">
			
			<a href="<?php echo get_site_url(); ?>">
			<img id ="logo" src="<?php bloginfo('template_url'); ?>/images/refl_logo.gif" alt="Reflection Logo" />
			</a>
					
			<ul>
				<?php 					 
						$args = array(
									'theme_location'  => 'nav-menu',
									'menu'            => '',
									'container'       => '',
									'container_class' => '',
									'container_id'    => '',
									'menu_class'      => '',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap' 	  => '%3$s',
									'depth'           => 0,
									'walker'          => ''
								);
						wp_nav_menu( $args );
		
					?>
			</ul>
		
		</nav>
	
		<div id="wrapper">
		<div id="container">