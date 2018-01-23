<?php
  $connection = mysqli_connect('localhost', 'root', 'root', 'logindb');

  if (!$connection) {
    die('Failed to connect to database' . mysqli_error($connection));
  }
?>