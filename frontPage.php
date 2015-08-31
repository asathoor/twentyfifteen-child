<?php /* Template Name: FrontPage */ ?>
<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


		<!-- accordion -->

<div id="accordion" style="width:80%;margins:auto;">
  <h3>Does JQ Work here?</h3>
  <div>
    <p>
    Yeah!
    </p>
  </div>
  <h3>Section 2</h3>
  <div>
    <p>
		Yeah, it's kinda horrible. But JQ accordion is up and running. 
		Styles are missing ...
    </p>
  </div>
  <h3>Search</h3>
  <div>
	<?php get_search_form(); ?>
  </div>
  <h3>Section 4</h3>
  <div>
    <p>
    Cras dictum. Pellentesque habitant morbi tristique senectus et netus
    et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
    faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
    mauris vel est.
    </p>
    <p>
    Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
    Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
    inceptos himenaeos.
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
