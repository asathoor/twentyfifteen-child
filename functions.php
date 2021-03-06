<?php
/** 
 * File: functions.php
 * Purpose: add functionality to the theme
 * @package: WordPress
 * @sub-package: Twenty Fifteen Child
 **/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {

	// Mother stylesheet
	wp_enqueue_style( 'Mother-Stylesheet', get_template_directory_uri() . '/style.css' );    
     
	// Jquery UI
    wp_enqueue_script('Jquery','//code.jquery.com/jquery-1.10.2.js');
    wp_enqueue_script('Jquery-UI','//code.jquery.com/ui/1.11.4/jquery-ui.js');
	wp_enqueue_style('Jquery-UI-style','//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css');
	
	// scripts for page-timeline.php
	wp_enqueue_script( 'Page-Timeline-Js' , get_theme_file_uri() . '/js/timeline_main.js');
	wp_enqueue_script( 'Page-Timeline-Modernizr-Js', get_theme_file_uri() . '/js/modernizr.js');
	wp_enqueue_style( 'Page-Timeline-CSS', get_theme_file_uri() . '/css/timeline_style.css');
	
	// theme costum styles
	wp_enqueue_style( 'Twenty-Fifteen-Child-CSS', get_theme_file_uri() . 'style.css');
} 

/** 
FILTERS
=======

Here we filter, so that only posts in the category "news" 
will be displayed in the loop.

(use the mouse pointer over category in the 
Dashboard to get the category ID)  

*/

/*
function my_home_category( $query ) { 
	if ( $query->is_home() && $query->is_main_query() ) 
		{ $query->set( 'cat', '3'); } } 

add_action( 'pre_get_posts', 'my_home_category' );
*/

/**
A HOOK
======

This hook will add stuff to wp_head.
In the same way you can send stuff to all wp hooks.

*/

/*
add_action('wp_head','stuff_to_wp_head');

function stuff_to_wp_head(){
	echo "\n\n<!-- a hook will add stuff to whereever the hook is -->\n\n";
}
*/

add_action('petj_seo','add_my_metatags');

function add_my_metatags(){
	?>
print '
	<!-- SEO -->
	<meta name="application-name" content="Multimusen" />
	<meta name="author" content="Per Thykjaer Jensen" />
	<meta name="distributor" content="Multimusen.dk" />
	<meta name="robots" content="Index" />
	<meta name="description" content="Tips and tutorials for multimedia developers." />
	<meta name="keywords" content="WordPress, PHP, MySQL, Jquery JavaScript, Flash, ActionScript, LAMP, XAMPP" />
	<meta name="generator" content="Bluefish 2.2.9" />
	<meta name="rating" content="General" />
	<meta name="dcterms.title" content="Multimusen.dk " />
	<meta name="dcterms.contributor" content="Per Thykjaer Jensen" />
	<meta name="dcterms.creator" content="Per Thykjaer Jensen" />
	<meta name="dcterms.publisher" content="Multimusen" />
	<meta name="dcterms.description" content="Tips and tutorials for multimedia developers." />
	<meta name="dcterms.rights" content="GPLv3" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Multimusen.dk " />
	<meta property="og:description" content="Tips and tutorials for multimedia developers." />
	<meta property="twitter:title" content="Multimusen.dk " />
	<meta property="twitter:description" content="Tips and tutorials for multimedia developers." />
';

	<?php
}

/**
Make your own hooks
===================

Define a hook somewhere via do_action( 'action' )
Then use add_action and a function to fire off 
what you will.

*/
/*
add_action('add_accordion_script','the_accordion');

function the_accordion(){
	?>

  <script>
	  $(function() {
    	$( "#accordion" ).accordion();
  	  });
  </script>

	<?php
}
*/

?>
