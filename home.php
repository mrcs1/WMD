<?php 

/**
 * Home template
 *
 */

include("./head.inc");
?>

<div class="container twelve columns">
	<!-- FIRST ROW -->
	<div class="container">

		<div class="seven columns home1 tile">
			<a href="<?php echo $page->rootParent('/projects/')->home1link ?>">
				<div class="image_one">
					<div class="image_two">
						<h3><?php echo $page->home1_title ?></h3>
						<h3 class="light"><?php echo $page->home1_desc ?></h3>
					</div>
					<img data-original="<?php echo $page->home1img->url ?>" class="fits lazy">
				</div>
			</a>
		</div>
		<div class="four columns home2 tile">
			<h1>Wemakedesign <span class="grey"> is a brand, design & communications studio. We create, define and refresh brands.</span></h1>

		</div>
	</div>
</div>

<!-- SECOND ROW  -->
	<div class="container">
		<div class="six columns home2 tile">
			<a href="<?php echo $page->rootParent('/projects/')->home2link ?>">
			<div class="image_one">
				<div class="image_two">
				<h3><?php echo $page->home2_title ?></h3>
				<h3 class="light"><?php echo $page->home2_desc ?></h3>
				</div>
			<img data-original="<?php echo $page->home2img->url ?>" alt="" class="lazy ">
			</div>
			</a>
		</div>

		<div class="six columns home3 tile">
			<a href="<?php echo $page->rootParent('/projects/')->home3link ?>">
			<div class="image_one">
				<div class="image_two">
				<h3><?php echo $page->home3_title ?></h3>
				<h3 class="light"><?php echo $page->home3_desc ?></h3>
				</div>
			<img data-original="<?php echo $page->home3img->url ?>" alt="" class="lazy ">
			</div>
			</a>
		</div>
	</div>

<!-- THIRD ROW -->
	<div class="container">
		<div class="four columns home5 tile">
			<a href="<?php echo $page->rootParent('/projects/')->home4link ?>">
			<div class="image_one">
				<div class="image_two">
				<h3><?php echo $page->home4_title ?></h3>
				<h3 class="light"><?php echo $page->home4_desc ?></h3>
				</div>
			<img data-original="<?php echo $page->home4img->url ?>" alt="" class="lazy ">
			</div>
			</a>
		</div>



		<div class="eight columns home6 tile">
			<a href="<?php echo $page->rootParent('/projects/')->home5link ?>">
			<div class="image_one">
				<div class="image_two">
				<h3><?php echo $page->home5_title ?></h3>
				<h3 class="light"><?php echo $page->home5_desc ?></h3>
				</div>
			<img data-original="<?php echo $page->home5img->url ?>" alt="" class="lazy ">
			</div>
			</a>
	</div>
</div>
		
	<!-- LAST ROW -->
	<div class="container">
		<div class="three columns home7 tile">
		<a href="<?php echo $page->rootParent('/projects/')->home6link ?>">
			<div class="image_one">
				<div class="image_two">
				<h3><?php echo $page->home6_title ?></h3>
				<h3 class="light"><?php echo $page->home6_desc ?></h3>
				</div>
			<img data-original="<?php echo $page->home6img->url ?>" alt="" class="lazy ">
			</div>
			</a>
	</div>

		<div class="three columns home8 tile">
		<a href="<?php echo $page->rootParent('/projects/')->home7link ?>">
			<div class="image_one">
				<div class="image_two">
				<h3><?php echo $page->home7_title ?></h3>
				<h3 class="light"><?php echo $page->home7_desc ?></h3>
				</div>
			<img data-original="<?php echo $page->home7img->url ?>" alt="" class="lazy ">
			</div>
			</a>
		</div>

		<div class="six columns home9 tile">
			<a href="<?php echo $page->rootParent('/projects/')->home8link ?>">
			<div class="image_one">
				<div class="image_two">
				<h3><?php echo $page->home8_title ?></h3>
				<h3 class="light"><?php echo $page->home8_desc ?></h3>
				</div>
			<img data-original="<?php echo $page->home8img->url ?>" alt="" class="lazy ">
			</div>
			</a>
		</div>
	</div> 



<?php
include("./foot.inc");

