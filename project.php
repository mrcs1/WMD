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
			<h3 class="light"><a href="http://<?php echo $page->link; ?>" target="_blank"><?php echo $page->link; ?></a></h3>
		</div>
	</div>

	<!-- container for gallery images -->
	<div class="container twelve columns">
		<div class="gallery">
		<?php
		    foreach($page->gallery as $img) {; 
			echo "<img data-original='{$img->url}' alt='{$img->description}' class='lazy'/>
			<noscript><img src='{$img->url}' alt='{$img->description}'></noscript>";
		}?>
		</div>
	</div>

	<!-- share options -->
		<?php include("./share.inc"); ?>

	<!-- Other Projects -->
	<div class="container twelve columns">
		<div class="twelve columns otherProjects">
		<h3>Other projects</h3>
		</div>
		
		<!-- include Prev Project -->
		<div class='container six columns'>	
				<?php
		  if($page->prev instanceof NullPage) {
		    echo "<div class='thumbs'>
					<img data-original='{$page->prev->project_thumb->url}' class='lazy'>
				</div>";
			}	else {
				($page->prev); {
				echo "<a href='{$page->prev->url}'>
				<div class='thumbs'>
					<img data-original='{$page->prev->project_thumb->url}' class='lazy'>
				</div>
				<div class='thumb_title'>
					<h3>Previous</h3>
					<h3>{$page->prev->title}</h3>
					<h3 class='light'>{$page->prev->desc}</h3>
				</div>
			</a>";
			}}
			?>
		</div>

		<!-- include Next Project -->
		<div class='container six columns'>	
				<?php
		if($page->next instanceof NullPage) {
		    echo "<div class='thumbs'>
					<img data-original='{$page->next->project_thumb->url}' class='lazy'>
				</div>";
			} else {
				($page->next === false); {
				echo "<a href='{$page->next->url}'>
				<div class='thumbs'>
					<img data-original='{$page->next->project_thumb->url}' class='lazy'>
				</div>
				<div class='thumb_title'>
					<h3>Next</h3>
					<h3>{$page->next->title}</h3>
					<h3 class='light'>{$page->next->desc}</h3>
				</div>
			</a>";
			}}
			?>





		</div>
	</div>



<?php
include("./foot.inc"); 
