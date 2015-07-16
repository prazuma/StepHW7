<html>
  <head>
    <title>STEP HW7</title>
  </head>
  <body>
    <?php
      function getWord($pos){
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
        $n = rand(0, count($urls) - 1);
        $word = file_get_contents($urls[$n] . "getword?pos=" . $pos);
        return $word;
       }
      $word1 = getWord("");
      $word2 = getWord("");
      $word3 = getWord("");
      $word4 = getWord("");
      echo $word1 . "! he said " . $word2 . " as he jumped into his convertible " . $word3 . " and drove off with his " . $word4 . " wife.";
    ?>
  </body>
<html>
