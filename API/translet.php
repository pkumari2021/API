<!DOCTYPE html>
<html>
<head>
	<title>Google Translate</title>
	<link rel="stylesheet" href="css/bootstrap.css" >
	<link rel="stylesheet" href="js/bootstrap.js">

</head>
<body>
    <div class="translate" style=" background-color:#153449; color: white; text-align: center; width:100%; height: 180px; margin-top: 0px; padding: 10px;">
        <h2>Translate this web page:</h2>
      		<div id="google_translate_element"></div>

	    	<script type="text/javascript">
				function googleTranslateElementInit(){
				new google.translate.TranslateElement({ pageLanguage: 'en',multilanguagePage:true}, 'google_translate_element');}	
	    	</script>
	   
			  <script type="text/javascript" src="//translate.google.com/translate_a/	element.js?cb=googleTranslateElementInit">
				
			  </script>

           <p><i>You can translate the content of this page by selecting a language in the select box.</p></i>

        <div class="navigation" style="text-align: left; margin: 10px; padding-bottom:5px;">
         &nbsp;&nbsp;&nbsp;&nbsp;<a href="index.php">Google News</a>
         &nbsp;&nbsp;<a href="weather.php"> |&nbsp;&nbsp;&nbsp;Weather</a>
         &nbsp;&nbsp;<a href="mapbox.php">|&nbsp;&nbsp;&nbsp;Google Map</a>
       </div>

    </div>

			<?php
      $url='http://newsapi.org/v2/top-headlines?sources=google-news-fr&apiKey=7304724bfe214486afe70cdb4f69f439';
      $response = file_get_contents($url);
      $NewsData = json_decode($response);
    ?>

    <div class="container-fluid" style="width: 90%;">
         
    		 <?php
    	  		 foreach ($NewsData->articles as $News)
    	    	{
    	 	?>

    		<div class="row NewsGrid" style="margin: 10px;border: 2px solid lightgray;padding: 10px;">
    			<div class="col-md-3">
    				<img src="<?php echo $News->urlToImage ?>" alt="News thumbnail" class="rounded" style="width:calc(100% - 20px) ;height: 250px;margin: 10px;">
    			</div>

    			<div class="col-md-9">
    				<h2 style="color: black;"><strong>Title: <?php echo $News->title ?></strong></h2>
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