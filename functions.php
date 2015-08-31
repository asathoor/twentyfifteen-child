<?php
/** 
Add stylesheets
===============

Here we add stylesheets and scripts from various sources.
*/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );

function theme_enqueue_styles() {
    wp_enqueue_style( 'Mother Stylesheet', get_template_directory_uri() . '/style.css' ); 
	// if you need more add them here ...
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
?>
