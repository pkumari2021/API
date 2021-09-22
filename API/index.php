<!DOCTYPE html>
<html>
<head>
	<title> Implement Google AIP </title>
	<link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="js/bootstrap.js">
	<link rel="stylesheet" href="css/index.css">
</head>
<body>

   
    <div class="jumbotron">
    	<h1>Google NEWS </h1>
    	   
           &nbsp;&nbsp;&nbsp;&nbsp;<a href="translet.php">Google Translate</a>
           &nbsp;&nbsp;<a href="weather.php">|&nbsp;&nbsp;&nbsp;Weather</a>
           &nbsp;&nbsp;<a href="mapbox.php">|&nbsp;&nbsp;&nbsp;Google Map</a>
    </div>

     <?php
      $url='http://newsapi.org/v2/top-headlines?sources=google-news-fr&apiKey=7304724bfe214486afe70cdb4f69f439';
      $response = file_get_contents($url);
      $NewsData = json_decode($response);
    ?>

    <div class="container-fluid">
         
    		 <?php
    	  		 foreach ($NewsData->articles as $News)
    	    	{
    	 	?>

    		<div class="row NewsGrid">
    			<div class="col-md-3">
    				<img src="<?php echo $News->urlToImage ?>" alt="News thumbnail" class="rounded">
    			</div>

    			<div class="col-md-9">
    				<h2><strong>Title: <?php echo $News->title ?></strong></h2>
    				<h5>Description: <?php echo $News->description ?> </h5>
    				<p>Content: <?php echo $News->content ?> </p>
    				<h6>Auther: <?php echo $News->author ?> </h6>
    				<h6>Published: <?php echo $News->publishedAt ?> </h6>
    			
    			</div>
    		
    		</div>
    			<?php
    	   			}
    	   		?>

    </div>
</body>
</html>