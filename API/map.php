<!DOCTYPE html>
<html>
<head>
	<title>Google Map with API key</title>
	
	<style>
		*{
			margin: 0;
			padding: 0;
		}
		#map{
			width: 50%;
			height: 50%;
		}
	</style>
	
</head>
<body>

<div id="map"></div>
<script>
	function initMap() {
		var location = {lat: 7.873054, lng: 80.771797};
		var map = new google.maps.Map(document.getElementById("map"), {
			zoom: 4,
			center: location
		});
		var marker = new google.maps.Marker({
			position: location,
			map: map
		});
	}
</script>
<script async defer src="https://maps.googleapis.com/maps/js?key=AIzaSyBYzXj5wF4L6mChyyc5xwfb2QT1QEZ9VN8&callback=initMap"></script>

</body>
</html>