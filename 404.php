<?php 

/**
 * Project page *
 */

include("./head.inc");
?>
	<!-- container for title & info -->
	<div class="container twelve columns">
		
		<div class="info four columns"><h1 class="title"><?php echo $page->title; ?></h1></div>

		<div class="blurb seven offset-by-one columns">
			<h3><?php echo $page->info; ?></h3>
			<br/>
			<img data-original="<?php echo $page->project_thumb->url; ?>" class="fits lazy">
		</div>
	</div>


<?php
include("./foot.inc"); 
