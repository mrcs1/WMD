<?php 

/**
 * Contact template
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
		<?php include("./map.inc"); ?>
		<div id="map" class="container twelve columns"></div>
	</div>

	<!-- container for Our Team -->
	<div class="container">
		<div class="info two columns">
			<h1><?php echo $page->blurb_title; ?></h1>
		</div>
		
		<div class="ten columns spacer">
			<h3><?php echo $page->blurb; ?></h3>
		</div>


	<!-- Bios -->
	<div class="ten columns offset-by-two">
		<?php
			if ($page->children) {
			foreach($page->children() as $bio) {
		    $image = $bio->image;
		    $thumb = $bio->project_thumb; 
		    if(!$thumb) $thumb = $image;
		    echo "<div class='bio column'>
					<img class='lazy' data-original='{$thumb->url}'>
				</div>
				<div class='eight columns bio_wrapper'>
					<h5>{$bio->title}</h5>
					<h5><a class='mail red' href='mailto:{$bio->link}' target='_blank'>{$bio->link}</a></h5>
					<br>
					<p>{$bio->info}</p>
				</div>";}}
		?>
	</div>
</div>


<?php
include("./foot.inc"); 
