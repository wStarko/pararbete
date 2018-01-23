<?php
include 'includes/db.php';
session_start();

if (isset($_POST['registrera'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $username = mysqli_real_escape_string($connection, $username);
  $password = mysqli_real_escape_string($connection, $password);

  $hashFormat = "$2y$10$";
  $salt = "W3HSfK4YS6DpGq5TxKDx4b";
  $hash_and_salt = $hashFormat . $salt;
  $password = crypt($password, $hash_and_salt);




      if (!$connection) {
        die('Databas connection failded!');
      }
      $query = "INSERT INTO pair(username, password) ";
      $query .= "VALUES('$username', '$password')";

      $results = mysqli_query($connection, $query);

      if (!$results) {
        die("Registration failed! Information: " . mysqli_error($connection));
      }

      header("Location: login.php");
    }
  $title = 'Registrera';
  include "includes/header.php";

?>

<form class="login" action="register.php" method="post">
    <h3>Registrera dig!</h3>
    <input type="text" name="username" placeholder="Användarnamn">
    <input type="password" name="password" placeholder="Lösenord">
    <input type="submit" name="registrera" value="Registrera dig!">
  </form>


  </body>
</html>