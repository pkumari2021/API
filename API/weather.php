<!DOCTYPE html>
<html>
<head>
	<title>Open Weather Forcasting</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"
	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
	crossorigin="anonymous"></script>

	<link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="js/bootstrap.js">
	<link rel="stylesheet" href="css/index.css">

</head>

<body style="background-image: url(img/weather-rebound.gif); background-repeat: no-repeat; background-size:cover;">

	 <div class="jumbotron">
    	<h1>Weather Forcasting </h1>
    	   &nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Google News</a>
    	   &nbsp;&nbsp;<a href="translet.php">|&nbsp;&nbsp;&nbsp;Google Translate</a>
    	   &nbsp;&nbsp;<a href="mapbox.php">|&nbsp;&nbsp;&nbsp;Google Map</a>
    </div>
<center>
	<strong> <h4>
	<div class="weatherbacground" style=" background-color:#9999ff; padding:10px; margin:10px; padding-top: 25px;
	 text-align: center; width: 650px; height: 400px; border: blue 1px solid;  opacity: 0.9;">

		<input id="city"></input>
		<button id="getWeatherForcast">Get Weather</button>
		<div id="showWeatherForcast"></div>
    </div>

</center>
</strong></h4>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#getWeatherForcast").click(function(){
				var city = $("#city").val();
				var key = 'b57e94419cab2ba90069cd5eb9227f8f';
				
				$.ajax({
					url:'http://api.openweathermap.org/data/2.5/weather',
					dataType:'json',
					type:'GET',
					data: {q: city, appid: key, units :'metric'},

					success: function(data){
						var wf='';
						$.each(data.weather, function(index, val) {
							wf += '<p><b>' + data.name + "</b><img src=img/"+ val.icon +".png></p>"+
							data.main.temp + '&deg;C' + ' | ' + val.main + "," + 
							val.description
						});
						$("#showWeatherForcast").html(wf);
					}
				});
			});
		});
	</script>

</body>
</html>