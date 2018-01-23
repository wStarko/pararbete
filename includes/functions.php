<?php

  function getBooking() {
    global $connection;

    $userID = $_SESSION['id'];

    $query = "SELECT * FROM booking WHERE user_id = $userID";

    $result = mysqli_query($connection, $query);

    if (!$result) {
      echo mysqli_error($connection);
    }

    while ($row = mysqli_fetch_array($result)) {
      echo
      "<tr>
        <td>" . $row['boat'] . "</td>
        <td>" . $row['persons'] . "</td>
        <td>" . $row['city'] . "</td>
        <td>" . $row['sdate'] . "</td>
      </tr>
      ";
    }
  }
?>