<?php 

/*
 * Theme Name: Myers Personal Portfolio
 * Theme URI: N/A
 * Version: 1.0
 * Description: A personal portfolio site for www.alyssanmyers.com
 * Author: Alyssa Myers
 * Author URI: http://alyssanmyers.com/
*/

get_header();

$thiscat = $wp_query->get_queried_object();

$args = array (
			'category_name' => $thiscat->slug,
			'post_type' => 'port_pieces'
		);

		$the_query = new WP_Query( $args );
?>

	<main>
		
		<ul id="port-cats" class="body-text" style="margin-bottom:0px;">
			<?php wp_list_categories( array(
        'orderby'    => 'name',
		'hide_title_if_empty' => true,
		'title_li'            => __( '' ),
		'exclude'             => 1,
		'show_option_none'=> ''
    ) ); ?>
		</ul>
        
        <div style="width:100%;text-align:center;margin:10px 0px 40px 0px;"><a href="<?php echo get_site_url(); ?>/portfolio" style="text-transform:uppercase;letter-spacing:2px;" class="plain">View All</a></div>

        
        <?php
        /* if the chosen category is animation, show the demo reel */
        if ( $thiscat->slug == 'animation' ) 
        {
            echo '<div style="padding:56.25% 0 0 0;position:relative;"><iframe src="//player.vimeo.com/video/383148532?title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe></div><script src="https://player.vimeo.com/api/player.js"></script>';
            echo '<br><br><hr><br><br>';
        }
        ?>

        <?php if ( $the_query->have_posts() ) : ?>
		<ul id="portfolio">
			
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
			<?php
			echo '<li>';
				echo '<a href="' . get_the_permalink() . '">';
					echo '<div class="text">';
						echo '<div class="header-display">';
							echo get_the_title()
								. '<br />'
								. '<div class="body-text">&mdash;view&mdash;</div>';
						echo '</div>';
					echo '</div>';
					echo '<img src="' . get_the_post_thumbnail_url() . '" alt="" />';
				echo '</a>';
			echo '</li>';
			?>
			<?php endwhile; ?>
				
			</ul>
		<?php endif; ?>
	
	</main>
		
	</div> <!-- end container -->
</div> <!-- end wrapper -->
			
<?php

get_footer();

?>