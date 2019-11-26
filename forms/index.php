<?php
/**
 * file name: index.php;
 * autor: anna.karutina;
 * date: 26.11.2019;
 */
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>06 - PHP - Vormid</title>
</head>
<body>
<h1>Andmed</h1>
<form action="arvutused.php" method="get">
  <h3>Kera</h3>
  Raadius <input type="text" name="kera-raadius"><br>
  <h3>Koonus</h3>
  Raadius <input type="text" name="koonus-raadius"><br>
  Kõrgus <input type="text" name="koonus-korgus"><br>
  <h3>Silinder</h3>
  Raadius <input type="text" name="silinder-raadius"><br>
  Kõrgus <input type="text" name="silinder-korgus"><br>
  <input type="submit" value="Arvuta ruumala">
</form>
</body>
</html>
