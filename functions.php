<?php
/** 
Add stylesheets
===============

Here we add stylesheets and scripts from various sources.
*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'Mother Stylesheet', get_template_directory_uri() . '/style.css' ); 
	// Jquery UI
    wp_enqueue_script('Jquery','//code.jquery.com/jquery-1.10.2.js');
    wp_enqueue_script('Jquery UI','//code.jquery.com/ui/1.11.4/jquery-ui.js');
	wp_enqueue_style('Jquery UI style','//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css');
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

add_action('wp_head','add_my_metatags');

function add_my_metatags(){
	?>

	<!-- SEO -->
	<meta name="description" content="Tutorials and resources for multimedia designers" />
	<meta name="keywords" content="multimedia, html, css, wordpress, linux, open source, photo, dslr, web design, mysql" />
	<meta name="author" content="Per Thykjær Jensen">
	<meta name="robots" content="index, follow" />
	<meta name="revisit-after" content="3 days" />

	<?php
}

/**
Make your own hooks
===================

Define a hook somewhere via do_action( 'action' )
Then use add_action and a function to fire off 
what you will.

*/

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
?>
