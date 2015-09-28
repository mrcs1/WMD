	<!-- Include Map -->
	<!-- 
            You need to include this script on any page that has a Google Map.
            When using Google Maps on your own site you MUST signup for your own API key at:
                https://developers.google.com/maps/documentation/javascript/tutorial#api_key
            After your sign up replace the key in the URL below or paste in the new script tag that Google provides.
        -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
        
        <script type="text/javascript">
            // When the window has finished loading create our google map below
            google.maps.event.addDomListener(window, 'load', init);
        
            function init() {
                // Basic options for a simple Google Map
                // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
                var myLatlng = new google.maps.LatLng(53.349627, -6.230277); // Liffey Trust Studios

                var image = '<?php echo $config->urls->templates?>img/wmd_marker.png';

                var mapOptions = {
                    // How zoomed in you want the map to start at (always required)
                    zoom: 16,

                    // The latitude and longitude to center the map (always required)
                    center: new google.maps.LatLng(53.349627, -6.230277), // Liffey Trust Studios

                    // How you would like to style the map. 
                    // This is where you would paste any style found on Snazzy Maps.
                    styles: [{"featureType":"landscape","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"off"}]},{"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"stylers":[{"hue":"#00aaff"},{"saturation":-100},{"gamma":2.15},{"lightness":12}]},{"featureType":"road","elementType":"labels.text.fill","stylers":[{"visibility":"on"},{"lightness":24}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":57}]}]
                };

                // Get the HTML DOM element that will contain your map 
                // We are using a div with id="map" seen below in the <body>
                var mapElement = document.getElementById('map');

                // Create the Google Map using out element and options defined above
                var map = new google.maps.Map(mapElement, mapOptions);

                // To add the marker to the map, use the 'map' property
				var marker = new google.maps.Marker({
				    position: myLatlng,
				    map: map,
				    title:"Wemakedesign\u000AStudio 7, Liffey Trust Centre\u000A117-126 Upper Sheriff St\u000AIFSC\u000ADublin\u000AIreland",
				    icon: image
				});
				            }
        </script>