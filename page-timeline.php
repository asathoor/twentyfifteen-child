<?php
/**
 * file: page-timeline.php
 * Based on: @url https://codyhouse.co/gem/vertical-timeline/
 * Package: @TwentyFifteenChild
 * By: Per Thykjaer Jensen
 **/
get_header();

// create timeline markup 
function petj_lineDance( $image, $h2, $p, $url, $dato ) {
	?>
		<div class="cd-timeline-block">
			<div class="cd-timeline-img cd-picture">
				<img src="<?php echo $image; ?>" alt="Picture">
			</div> <!-- cd-timeline-img -->

			<div class="cd-timeline-content">
				<h2><?php echo $h2; ?></h2>
				<p><?php echo $p; ?></p>
				<a href="<?php echo $url; ?>" class="cd-read-more">Read more</a>
				<span class="cd-date"><?php echo $dato; ?></span>
			</div> <!-- cd-timeline-content -->
		</div> <!-- cd-timeline-block -->
	<?php 
}

// images
$movie =  get_theme_file_uri() . '/img/cd-icon-movie.svg';

// urls often used
$multimusen = 'http://multimusen.dk';
	
?>

<!-- file: page-header.php -->
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<header>
		<h1>WordPress Research Project Timeline</h1>
	</header>


<!-- timeline stuff -->
	<section id="cd-timeline" class="cd-container">
		<?php // timeline
		
		petj_lineDance( $movie, 'Seminar', 'Et spændende happening om ...', $multimusen, '1.2. 2016' );
		petj_lineDance( $movie, 'Masterclass', 'Et interessant arrangement om ...', $multimusen, '1.3. 2016' );
		petj_lineDance( $movie, 'Foredrag', 'Et spændende foredrag om ...', $multimusen, '1.12. 2016' );
			
		?>
	
	</section> <!-- cd-timeline -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>