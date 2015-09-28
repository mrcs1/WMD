<?php 

/**
 * Projects Overview
 *
 */

include("./head.inc");
?>

	<div class="container twelve columns">
		
		<div class="info four columns"><h1 class="title"><?php echo $page->title; ?></h1></div>

		<div class="blurb seven offset-by-one columns">
			<h3><?php echo $page->info; ?></h3>
			<br/>
			<h3 class="light"><a href="http://<?php echo $page->link; ?>" target="_blank"><?php echo $page->link; ?></a></h3>
		</div>
	</div>

	<div class="container twelve columns">

		<?php
		if ($page->children) {
		foreach($page->children() as $project) {
	    $image = $project->img;
	    $thumb = $project->project_thumb; 
	    if(!$thumb) $thumb = $image;
	    // $thumb = $thumb->size(950, 596);
	    echo "<div class='container six columns'>
			<a href='{$project->url}'>
			<div class='thumbs'>
				<img data-original='{$thumb->url}' alt='' class='lazy'/>
			</div>
			<div class='thumb_title'>
					<h3>{$project->title}</h3>
					<h3 class='light'>{$project->desc}</h3>
				</div>
			</a>
			</div>";}}
			?>

	</div>
<?php
include("./foot.inc"); 


