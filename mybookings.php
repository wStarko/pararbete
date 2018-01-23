<?php
session_start();
$title = 'Dina Bokningar';
include "includes/functions.php";
include "includes/db.php";
include "includes/header.php";


if (isset($_POST['Skicka'])) {
  $boat = $_POST['boat'];
  $persons = $_POST['persons'];
  $city = $_POST['city'];
  $sdate = $_POST['sdate'];
  $userID = $_SESSION['id'];


      if (!$connection) {
        die('Databas connection failded!');
      }
      $query = "INSERT INTO booking(boat, persons, city, sdate, user_id) ";
      $query .= "VALUES('$boat', '$persons', '$city', '$sdate', '$userID')";

      $results = mysqli_query($connection, $query);

      if (!$results) {
        die("Registration failed! Information: " . mysqli_error($connection));
      }
    }
?>

    <?php if ($_SESSION) : ?>

<table>
  <tr>
    <th>Din båt</th>
    <th>Personer</th>
    <th>Stad</th>
    <th>Rese datum</th>
  </tr>
  <?php getBooking(); ?>
</table>


    <a class="knapp" href="index.php">Tillbaka</a>
  <?php else : ?>
    <h1>Du har inte behörighet till denna sida!</h1>
<?php endif; ?>

  </body>
    </html>