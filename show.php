<html>
  <head>
    <title>STEP HW7</title>
  </head>
  <body>
    <ul>
      <?php
	function showMessage($url, $message){
      	  $html = file_get_contents($url . "convert?message=" . $message);
          echo "<li>" . $html . "</li>";
        }
        $url = "http://step15-krispop.appspot.com/convert?message=";
      	$message = $_GET['message'];
      	$urls = array(
      	  "http://step15-krispop.appspot.com/",
	  "http://tsumu-2015.appspot.com/",
	  "http://regal-sun-100211.appspot.com/",
	  "http://step-1003.appspot.com/",
	  "http://jukunyannyan.appspot.com/",
	  "http://natsuko-step2015.appspot.com/",
	  "http://kei-step2015.appspot.com/",
	  "http://step2015-minoue1204.appspot.com/",
	  "http://step-mami.appspot.com/"
      	);
      	for($i = 0; $i < count($urls); $i++){
          showMessage($urls[$i], $message);
      	}
      ?>
    </ul>
  </body>
</html>