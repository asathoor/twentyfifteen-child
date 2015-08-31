<?php /* Template Name: FrontPage */ ?>
<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<!-- Jquery: try Accordion -->
<div id="accordion">
  <h3>Does JQ Work here?</h3>
  <div>
    <p>
    Yeah!
    </p>
  </div>
  <h3>A Loop</h3>
  <div>
    <p>
<!-- the loop -->

 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

 	<!-- Test if the current post is in category 3. -->
 	<!-- If it is, the div box is given the CSS class "post-cat-three". -->
 	<!-- Otherwise, the div box is given the CSS class "post". -->

 	<?php if ( in_category( '3' ) ) : ?>
 		<div class="post-cat-three">
 	<?php else : ?>
 		<div class="post">
 	<?php endif; ?>


 	<!-- Display the Title as a link to the Post's permalink. -->

 	<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>


 	<!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author. -->

 	<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>


 	<!-- Display the Post's content in a div box. -->

 	<div class="entry">
 		<?php the_content(); ?>
		<?php echo get_avatar( get_the_author_email(), '80' ); ?>
 	</div>


 	<!-- Display a comma separated list of the Post's Categories. -->

 	
 	</div> <!-- closes the first div box -->


 	<!-- Stop The Loop (but note the "else:" - see next line). -->

 <?php endwhile; else : ?>


 	<!-- The very first "if" tested to see if there were any Posts to -->
 	<!-- display.  This "else" part tells what do if there weren't any. -->
 	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>


 	<!-- REALLY stop The Loop. -->
 <?php endif; ?>


    </p>
  </div>
  <h3>Search</h3>
  <div>
	<?php get_search_form(); ?>
  </div>
  <h3><?php bloginfo('name'); ?></h3>
  <div>
	<p>
		<h2>List of authors:</h2>
<ul>
<?php wp_list_authors(); ?>
</ul>
	</p>
  </div>
</div>

  <script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>

<!-- ends accordion -->




		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
