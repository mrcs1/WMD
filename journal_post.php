<?php 

/**
 * Journal post page *
 */

include("./head.inc");
?>

	<!-- container for title & info -->
	<div class="container twelve columns ruler">
		
		<div class="info four columns">
			<h1 class="title"><?php echo $page->title; ?></h1>
		</div>
	<!-- container for post content -->
	<div class="blurb seven offset-by-one columns">
		<img data-original="<?php echo $page->project_thumb->url; ?>" class="fits lazy">
		<h5><?php echo $page->intro; ?></h5>
		<br>
		<?php echo $page->body; ?>
		<p><a href="http://<?php echo $page->link; ?>" target="_blank"><?php echo $page->link; ?></a></p>

	</div>

	</div>



	<!-- share options -->
	

	<!-- Other Projects -->
	<div class="container twelve columns">
		<div class="twelve columns otherProjects">
		<h3>Other posts</h3>
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
