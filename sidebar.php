<?php
/**
 * The sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
***/

/** 
TEMPLATE TAGS
=============

See WPB: 528 pp. - many samples.
*/

// the search form
// get_search_form();

/**
THE SIDEBAR
===========
**/
if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) || is_active_sidebar( 'sidebar-1' )  ) : ?>

	<div id="secondary" class="secondary">

		<?php if ( has_nav_menu( 'primary' ) ) : ?>
			<nav id="site-navigation" class="main-navigation" role="navigation">
				<?php
					// Primary navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'nav-menu',
						'theme_location' => 'primary',
					) );
				?>
			</nav><!-- .main-navigation -->
		<?php endif; ?>

		<?php if ( has_nav_menu( 'social' ) ) : ?>
			<nav id="social-navigation" class="social-navigation" role="navigation">
				<?php
					// Social links navigation menu.
					wp_nav_menu( array(
						'theme_location' => 'social',
						'depth'          => 1,
						'link_before'    => '<span class="screen-reader-text">',
						'link_after'     => '</span>',
					) );
				?>
			</nav><!-- .social-navigation -->
		<?php endif; ?>

		<?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
			<div id="widget-area" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
			</div><!-- .widget-area -->
		<?php endif; ?>

	</div><!-- .secondary -->

<?php endif; ?>

<!-- 
FILTER: Display Pages 
=====================

The filter below will give you a list of 
pages.

Note that the API is formatted as a GET string.

More info uri: http://codex.wordpress.org/Function_Reference/wp_list_pages

NB: this code overrules the code above ;-)
-->

<!-- ul id='listOfPages' class='listpages'>
	<?php // wp_list_pages('title_li=&sort_order=DESC&exclude=188'); ?>
</ul -->

<!-- ends filter sample -->

<!-- 
HOOKS: bloginfo()
=================

Gives all kinds of info about your blog.
-->
<!--ul>
<li><a href="<?php bloginfo('rss2_url'); ?>">RSS feed</a></li>
<li>WordPress: <?php bloginfo('version'); ?></p></li>
<li>Language: <?php bloginfo('language'); ?></p></li>
</ul-->
