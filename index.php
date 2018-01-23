<?php
  session_start();
  $title = 'Välkommen';
  include "includes/header.php";
 ?>
<?php if ($_SESSION) : ?>
    <a class="knapp" href="bookings.php">Boka en kryssning!</a>
    <a class="knapp" href="mybookings.php">Dina bokningar!</a>
    <br>
    <a href="logout.php">Logga ut <?php echo $_SESSION['username']; ?></a>
  <?php else : ?>
    <h1>Du har inte behörighet till denna sida!</h1>
<?php endif; ?>
  </body>
</html>