<html>
  <head>
    <title>STEP HW7</title>
  </head>
  <body>
    <?php
      $message = $_GET['message'];
      echo base64_encode($message);
    ?>
  </body>
</html>