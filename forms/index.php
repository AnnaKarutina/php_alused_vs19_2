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
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
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
<?php
// valemid
function keraRuumala($raadius){
  $ruumala = 4 * pi() * pow($raadius, 2);
  return round($ruumala, 2);
}

function koonuseRuumala($raadius, $korgus){
  $ruumala = (1 / 3) * pi() * pow($raadius, 2) * $korgus;
  return round($ruumala, 2);
}

function silindriRuumala($raadius, $korgus){
  $ruumala =  pi() * pow($raadius, 2) * $korgus;
  return round($ruumala, 2);
}

// vormi andmed
$keraRaadius = $_GET['kera-raadius'];
$koonuseRaadius = $_GET['koonus-raadius'];
$koonuseKorgus = $_GET['koonus-korgus'];
$silindriRaadius = $_GET['silinder-raadius'];
$silindriKorgus = $_GET['silinder-korgus'];

// arvutused ja väljund
echo 'Kera raadius = '.$keraRaadius.' ja ruumala = '.keraRuumala($keraRaadius).'<br>';
echo 'Koonuse raadius = '.$koonuseRaadius.' ja korgus = '.$koonuseKorgus.' ja ruumala = '.koonuseRuumala($koonuseRaadius, $koonuseKorgus).'<br>';
echo 'Silindri raadius = '.$silindriRaadius.' ja korgus = '.$silindriKorgus.' ja ruumala = '.silindriRuumala($silindriRaadius, $silindriKorgus).'<br>';
?>
</body>
</html>

