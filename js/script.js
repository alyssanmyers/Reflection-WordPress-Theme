/*
 * Theme Name: Reflection Film
 * Theme URI: N/A
 * Version: 1.0
 * Description: A custom theme for the thesis film, Reflection
 * Author: Alyssa Myers
 * Author URI: https://amyers.art
*/

var width;
var prev_width;

// ran when the document is loaded.
$(document).ready(function()
{
	"use strict";
	
	// display the menu when the menu icon is clicked
	$( ".burger-menu" ).click(function() 
	{
		$( "nav ul" ).css('display') == 'none' ? $( "nav ul" ).css("display", "table") : $( "nav ul" ).css("display", "none");
		$( ".close-button" ).toggle();
		$( ".burger-menu ul" ).toggle();
	});
	
});


// so when the page goes back to normal size
$(window).resize(function()
{
	"use strict";
	
	// since on mobile, resize is called on scroll
	if ( width === $(window).innerWidth() ) 
	{
		return;
	}
	
	prev_width = width;
	width = $(window).innerWidth();
	
	checkPageSize();
});
		
function checkPageSize()
{
	"use strict";
	
	// if full view, show the nav normally, hide the sub-menu until hover,
	// set the toggle-arrows back to default value (collapsed),
	// remove nav-up from the header (just as a default, will fix if necessary on scroll),
	// reset to all default values for scroll actions.
	if ( !matchMedia('(max-width: 799px)').matches )
	{
		$( "nav ul" ).css("display", "table");
		$( ".burger-menu ul" ).show();

		prev_width = $(window).innerWidth();

	}
	// hide the nav
	else
	{
		$( "nav ul" ).css("display", "none");
		$( ".close-button" ).hide();
		$( ".burger-menu ul" ).show();
		
		prev_width = $(window).innerWidth();
	}

}