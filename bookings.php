<?php
  session_start();
  $title = 'Boka här!';
  include "includes/header.php";
 ?>
<?php if ($_SESSION) : ?>
  <form class="destination" action="mybookings.php" method="post">
    <h1>Boka din kryssning!</h1>
  <h2>Med vilken båt vill du resa?</h2>
    <select class="boat" name="boat">
      <option value="Silja Line">Silja Line</option>
      <option value="Viking Line">Viking Line</option>
      <option value="Stena Line">Stena Line</option>
      <option value="Wasa Line">Wasa Line</option>
      <option value="Ekerö Linjen">Ekerö Linjen</option>
    </select>
  <h2>Antal resenärer</h2>
    <select class="persons" name="persons">
      <option value="1">1</option>
      <option value="1">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      <option value="6">6</option>
    </select>
  <h2>Varifrån?</h2>
    <select class="city" name="city">
      <option value="Helsingfors">Helsingfors</option>
      <option value="Åbo">Åbo</option>
      <option value="Vasa">Vasa</option>
      <option value="Stockholm">Stockholm</option>
      <option value="Tallin">Tallin</option>
      <option value="Öland">Öland</option>
      <option value="Umeå">Umeå</option>
      <option value="Mariehamn">Mariehamn</option>
    </select>
    <h2>Start datum</h2>
    <input type="date" name="sdate">
    <br>
    <input class="knapp" type="submit" name="Skicka" value="Boka!">
    </select>
  </form>

    <a class="knapp" href="index.php">Tillbaka</a>

    <a href="logout.php">Logga ut <?php echo $_SESSION['username']; ?></a>
  <?php else : ?>
    <h1>Du har inte behörighet till denna sida!</h1>
<?php endif; ?>



</body>
</html>