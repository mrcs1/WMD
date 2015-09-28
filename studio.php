<?php 

/**
 * Studio template
 *
 */

include("./head.inc");
?>
	<!-- container for title & info -->
	<div class="container twelve columns">
		
		<div class="info four columns"><h1 class="title"><?php echo $page->headline; ?></h1></div>

		<div class="blurb seven offset-by-one columns">
			<h3><?php echo $page->info; ?></h3>
			<br/>
			<h3 class="light"><a href="http://<?php echo $page->link; ?>" target="_blank"><?php echo $page->link; ?></a></h3>
		</div>
	</div>

	<!-- container for gallery images -->
	<div class="container twelve columns">
		<div class="gallery">
			<img data-original="<?php echo $page->banner->url; ?>" class="lazy">
		</div>
	</div>

	<!-- container for what we do -->
	<div class="container">
		<div class="info four columns">
			<h1><?php echo $page->blurb_title; ?></h1>
		</div>
		
		<div class="blurb seven columns offset-by-one spacer">
			<h2><?php echo $page->blurb; ?></h2>
		</div>
	</div>

	<!-- container for clients -->
	<div class="container spacer">
		<div class="info four columns">
			<h1>Select clients</h1>
		</div>
		<div class="three columns offset-by-one clients">
			<?php echo $page->clients_1; ?>
		</div>
		<div class="three columns offset-by-one clients">
			<?php echo $page->clients_2; ?>
		</div>
	</div>

		<!-- container for Testimonials -->
	<div class="container">
		<div class="info two columns">
			<h1>Testimonials</h1>
		</div>

		<div class="four columns offset-by-two spacer">
			<img data-original="<?php echo $page->testImage->url;?>" class="fits lazy">
			<?php echo $page->testimonial_1; ?>
		</div>

		<div class="four columns spacer">
			<img data-original="<?php echo $page->testImage_2->url;?>" class="fits lazy">
			<?php echo $page->testimonial_2; ?>
		</div>
	</div>


<?php
include("./foot.inc"); 
