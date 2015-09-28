<?php 

/**
 * Projects Overview
 *
 */

include("./head.inc");
?>


		<?php
		if ($page->children) {
		foreach($page->children() as $post) {
	    $image = $post->image;
	    $thumb = $post->project_thumb; 
	    if(!$thumb) $thumb = $image;
	    echo "
		    <div class='container twelve columns ruler'>
			    <div class='info four columns'>
					<h1 class='title'><a href='{$post->url}'>{$post->title}</a></h1>
				</div>
				
				<div class='blurb seven offset-by-one columns'>
					<img data-original='{$thumb->url}' alt='{$post->title}' class='fits lazy'/>
					<p>{$post->intro}</p>
					<p class='small'><a href='{$post->url}' class='red'>Read more</a></p>
				</div>

			</div>";}}
		?>

	</div>
<?php
include("./foot.inc"); 



