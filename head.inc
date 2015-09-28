<!DOCTYPE html>
<!--[if lte IE 8]>
	<link rel="stylesheet" type="text/css" href="<http://localhost:8888/wemakedesign/site/templates/css/style_ie.css" />
<![endif]-->
<html lang="en-GB">
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<title>Wemakedesign: analyse, create, communicate</title>
	<meta name="Title" content="<?php echo $page->title; ?>" />
	<meta name="description" content="Wemakedesign is a brand, design & communications studio. We create, define and refresh brands." />
	<meta name="og:type" content="website">
	<meta name="og:title" content="Wemakdesign / <?php echo $page->title; ?>" />
	<meta name="og:description" content="Wemakedesign is a brand, design & communications studio. We create, define and refresh brands." />
	<meta name="og:url" content="http://wemakedesign.com">
	<meta name="og:site_name" content="Wemakedesign">
	<meta name="og:image" content="http://wemakedesign.com/site/templates/img/favicon-152.png" />
	
	<link href="http://wemakedesign.com/favicon.ico" rel="shortcut icon">
	<link rel="apple-touch-icon-precomposed" href="<?php echo $config->urls->templates?>img/favicon-152.png">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="<?php echo $config->urls->templates?>img/favicon-144.png">


	<!-- Include webfonts -->
	<script type="text/javascript">
	WebFontConfig = { fontdeck: { id: '60137' } };

	(function() {
	  var wf = document.createElement('script');
	  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
	  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
	  wf.type = 'text/javascript';
	  wf.async = 'true';
	  var s = document.getElementsByTagName('script')[0];
	  s.parentNode.insertBefore(wf, s);
	})();
	</script>
	
	<!-- Include Skeleton framework -->
	<link id="stylesheet" rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>css/skeleton.css" media="screen">
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>css/base.css" media="screen">
	
	<!-- Include WMD stylesheet -->
	<link rel="stylesheet" type="text/css" href="<?php echo $config->urls->templates?>css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

</head>

<body>
	<?php include_once("analyticstracking.php") ?>
	<header class="header container">
		<div class="logo">
			<a href='<?php echo $config->urls->root; ?>'>
				<img src="<?php echo $config->urls->templates?>img/wmd_logo@2x.svg" width=73 height=27>
			</a>
		</div>
		<nav>
			<ul>
			<?php
			
				$homepage = $pages->get("/"); 
				$children = $homepage->children;
				// $children->prepend($homepage); 
		
				foreach($children as $child) {
					$class = $child === $page->rootParent ;
					echo "<li><a href='{$child->url}'>{$child->title}</a></li>";
										if ($page->child->id)
				;}



			?>
		</ul>
		</nav>
	</header>
			
