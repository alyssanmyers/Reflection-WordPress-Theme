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

?>


<div id="videowrapper">
    <div id="fullScreenDiv">
      
		<video id="video" role="presentation" preload="auto" playsinline="" crossorigin="anonymous" loop="" muted="" autoplay="" class="blur">
            <source src="<?php bloginfo('template_url'); ?>/images/refl_trailer.mp4" type="video/mp4">
        </video> 
        <div id="videoMessage" class="styling"> 
            <h1>Official Trailer</h1>
            <a href="https://vimeo.com/715847703" class="button">Watch Now</a>
			
			<ul class="laurels">
				<li><img src="<?php bloginfo('template_url'); ?>/images/laurels/drawtastic_festival.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/laurels/student_world_impact_2023.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/laurels/columbus_film_festival.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/laurels/centre_film_festival.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/laurels/first_time_filmmaker.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/laurels/interrobang_film_festival.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/laurels/seguin_film_arts_festival.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/laurels/short_filmz.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/laurels/student_world_impact.png"></li>
				<li><img src="<?php bloginfo('template_url'); ?>/images/laurels/yellowhammer_film_fest.png"></li>
			</ul>
			</div>
        </div> 
</div>

	<main>
		
	</main>
		
	</div> <!-- end container -->
</div> <!-- end wrapper -->
	
<style>

	
#videowrapper
{  
	position: absolute;
	top: -100px;
    overflow: hidden;
} 

#fullScreenDiv
{
    min-height: 100%; 
    height: 100vh;
    width: 100vw;
    padding:0;
    margin: 0;
    background-color: gray;
    position: relative;
}

#video
{    
    width: 100vw; 
    height: auto;
    margin: auto;
    display: block;
}
@media (min-aspect-ratio: 16/9)
{
	#video
	{
    	width: 100vw; 
		height: auto;
  	}	
}

@media (max-aspect-ratio: 16/9) 
{
	#video 
	{
    	height: 100vh; 
    	width: auto;
    	margin-left: 50vw;
    	transform: translate(-50%);
  	}
}

#videoMessage
{
    width: 100%; 
    height: 100%;
    position: absolute; 
    top: -2%; 
    left: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
	padding-top: 100px;
}
	
#videoMessage h1
{
	color: #ffffff;
	text-transform: uppercase;
	font-size: 3em;	
	margin: 0 0 15px 0;
	text-align: center;
}
</style>
<script>
$('#video').click(function(){
    window.location = 'https://vimeo.com/715847703';
});
</script>
<?php

get_footer();

?>