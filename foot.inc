	<!-- Add Footer -->
		<div class="container twelve columns">
		<footer>
			<div class="four columns contact">
				<h5 class="dark">Wemakedesign</h5>
				<h5 class="light">Studio 7<br>
				Liffey Trust Centre<br>
				117-126 Upper Sheriff St<br>
				IFSC<br>
				Dublin, Ireland</h5>
			</div>

			<div class="three offset-by-two columns contact">
				<h5 class="dark"><a href="mailto:hello@wemakedesign.com">hello@wemakedesign.com</a></h5>
				<h5 class="light">+353 1 807 1528</h5>
			</div>

			<div class="one columns offset-by-one contact">
				<h5 class="light"><a href="https://twitter.com/wemakedesign" target="_blank">twitter</a></h5>
				<h5 class="light"><a href="https://www.facebook.com/wemakedesignstudio" target="_blank">facebook</a></h5>
				<h5 class="light"><a href="https://www.behance.net/wemakedesign" target="_blank">behance</a></h5>
			</div>

			<div class="eleven columns offset-by-one final">
				<small class="light right">© 2014 Wemakedesign</small>			
			</div>

		</footer>
	</div>


	<!-- Include Modernizer & JQuery -->
	<script src="<?php echo $config->urls->templates?>js/modernizer.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

	<!-- Include JS Lazyload -->
	<script src="<?php echo $config->urls->templates?>js/lazyload.js"></script>
	<script type="text/javascript" charset="utf-8">
			$("img.lazy").show().lazyload();
			$("img.lazy").lazyload({
    			effect : "fadeIn",
    			effectspeed: '800' 
			});
    </script>


	<?php 

	// If the page is editable, then output a link that takes us straight to the page edit screen:
	if($page->editable()) {
		echo "<a class='nav' id='editpage' href='{$config->urls->admin}page/edit/?id={$page->id}'>Edit</a>"; 
	}

	?>

</body>
</html>