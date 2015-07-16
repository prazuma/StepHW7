<html>
  <head>
    <title>STEP HW7</title>
  </head>
  <body>
    <?php
      $words = array(
        "verb" => "bite",
	"noun" => "orange",
	"adjective" => "cute",
	"adverb" => "Wednesday",
	"animal" => "rabbit",
	"name" => "iori",
	"exclaimation" => "wow"
      );
      $pos = $_GET['pos'];
      if (array_key_exists($pos, $words)) {
        echo $words[$pos];
      } else {
      	$n = rand(0, 6);
        echo current(array_slice($words, $n, 1, true));
      }
    ?>
  </body>
<html>