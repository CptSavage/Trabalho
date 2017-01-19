<?php
  $host = "localhost";
  $user = "root";
  $password = "mysql";
  $database = "clientes";

  $link = mysqli_connect($host, $user, $password);
  mysqli_select_db($link, $database);
 ?>
