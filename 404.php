<?php 

/*
 * Theme Name: A Whole New Theme
 * Theme URI: https://github.com/alyssanmyers/Ingelix_WordPress
 * Version: 1.2
 * Description: A dazzling theme you never knew.
 * Author: Alyssa Myers
 * Author URI: http://alyssanmyers.com/
*/

get_header();
?>
	
		
	<div id="error" style="
		
	">
	<main>
		<div id="bg">
			<div id="bg-container">
				<h1 class="header-display">Error 404</h1>
				<hr>
				<h4 class="body-text">Oops, something went wrong.</h4>
			</div>

		</div>
	
	</div>
	</div>

	</main>
<?php get_footer(); ?>
	
	<style>
		
		html
		{
			background-color: #fff;
		}
		
		header
		{
			position: fixed;
		}
		
		hr
		{
			margin: 0.10em 75% 0.5em 0;
			border: none;
			border-top: 1px solid #e7ae4d;
		}
		
		main h1
		{
			color: #4eafaa; 
			font-size: 24px;
			text-transform: lowercase;
		}
		
		h4
		{
			color: #000; 
			font-size: 30px;
		}
		
		#bg
		{
			display: table;
			width: 20%;
			margin: 0 auto;
		}
		
		#bg-container
		{
			display: table-cell;
			position: relative;
			vertical-align: middle;
			width: 25%;
			z-index: 1;
		}
		
		#bg-container::before
		{
			content: "";
			//background: url(<?php bloginfo('template_directory'); ?>/images/AM-Logo.png) center/75% no-repeat;
			opacity: 0.35;
			top: 0; left: 0; bottom: 0; right: 0;
			position: absolute;
			z-index: -1;
		}
	</style>

