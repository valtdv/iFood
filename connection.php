<?php
  //$db_host = 'landingpage_db_1';

  $db_host = 'db4free.net';
  $db_username = 'usu_01_ifood';
  $db_password = 'ifoodpass';
  $db_schema = 'ifood_01';

  date_default_timezone_set("America/Bogota");

  $connection = mysqli_connect($db_host,$db_username,$db_password,$db_schema);
  if (!$connection) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
  exit;
  }
  
?>