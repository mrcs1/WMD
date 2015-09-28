<!DOCTYPE html>
<html lang="en-GB">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Wemakedesign</title>
	<meta name="description" content="Wemakedesign is a brand, design & communications studio. We create, define and refresh brands." />
	
	<!-- Include webfonts -->
<link href="http://fnt.webink.com/wfs/webink.css/?project=46FAF88F-F924-470A-ADB4-06FDA2303C82&fonts=BA766C3D-9F83-4950-AFCD-AD9F2BF5CEAB:f=Theinhardt-Regular,864889ED-8E73-7E19-00E2-BBE0F997E58C:f=Theinhardt-Thin,008579D7-00D8-1E34-1306-843EC6BC82EA:f=Theinhardt-Light,9773ABFB-EF93-0C1B-AE14-35A7DD420754:f=Theinhardt-UltraLight" rel="stylesheet" type="text/css"/>
	
	<!-- Include Skeleton framework -->
	<link id="stylesheet" rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>css/skeleton.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>css/base.css" media="screen">
	
	<!-- Include WMD stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>

<body>

	<p id='bgtitle'><?php 

		// print the section title as big faded text that appears near the top left of the page
		echo $page->rootParent->title; 

	?></p>	

	<div id="masthead" class="masthead">

		<div class="container">

			<a href='<?php echo $config->urls->root; ?>'><p id='logo'>ProcessWire</p></a>
		
			<ul id='topnav'><?php
			
				// Create the top navigation list by listing the children of the homepage. 
				// If the section we are in is the current (identified by $page->rootParent)
				// then note it with <a class='on'> so we can style it differently in our CSS. 
				// In this case we also want the homepage to be part of our top navigation, 
				// so we prepend it to the pages we cycle through:
				
				$homepage = $pages->get("/"); 
				$children = $homepage->children;
				$children->prepend($homepage); 
		
				foreach($children as $child) {
					$class = $child === $page->rootParent ? " class='on'" : '';
					echo "<li><a$class href='{$child->url}'>{$child->title}</a></li>";
				}

			?></ul>

			<ul id='breadcrumb'><?php

				// Create breadcrumb navigation by cycling through the current $page's
				// parents in order, linking to each:

				foreach($page->parents as $parent) {
					echo "<li><a href='{$parent->url}'>{$parent->title}</a> &gt; </li>";
				}

			?></ul>

			<h1 id='title'><?php 

				// The statement below asks for the page's headline or title. 
				// Separating multiple fields with a pipe "|" returns the first
				// one that has a value. So in this case, we print the headline
				// field if it's there, otherwise we print the title. 
				
				echo $page->get("headline|title"); 

			?></h1>

			<form id='search_form' action='<?php echo $config->urls->root?>search/' method='get'>
				<input type='text' name='q' id='search_query' value='<?php echo htmlentities($input->whitelist('q'), ENT_QUOTES, 'UTF-8'); ?>' />
				<button type='submit' id='search_submit'>Search</button>
			</form>

			<?php

			// Grab a random image from the homepage and display it.
			// Note that $homepage was loaded above where we generated the top navigation.

			if(count($homepage->images)) {
				$image = $homepage->images->getRandom(); 
				$thumb = $image->size(232, 176); 	
				echo "<a href='{$image->url}'><img id='photo' src='{$thumb->url}' alt='{$thumb->description}' width='{$thumb->width}' height='{$thumb->height}' /></a>";
			}

			?>

		</div>
	</div>

	<div id="content" class="content">

		<div class="container">

			<div id="sidebar">

				<?php

				// Output subnavigation
				// 
				// Below we check to see that we're not on the homepage, and that 
				// there are at least one or more pages in this section.
				// 
				// Note $page->rootParent is always the top level section the page is in, 
				// or to word differently: the first parent page that isn't the homepage.

				if($page->path != '/' && $page->rootParent->numChildren > 0) { 

					// We have determined that we're not on the homepage
					// and that this section has child pages, so make navigation: 

					echo "<ul id='subnav' class='nav'>";

					foreach($page->rootParent->children as $child) {
						$class = $page === $child ? " class='on'" : '';
						echo "<li><a$class href='{$child->url}'>{$child->title}</a></li>";	
					}

					echo "</ul>";
				}

				?>

				<div class='sidebar_item'>

					<?php

					// if the current page has a populated 'sidebar' field, then print it,
					// otherwise print the sidebar from the homepage
					
					if($page->sidebar) echo $page->sidebar; 
						else echo $homepage->sidebar; 
					?>


				</div>

			</div><!--/sidebar-->

			<div id="bodycopy">
			
