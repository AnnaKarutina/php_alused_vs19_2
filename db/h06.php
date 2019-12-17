<?php
/**
 * file name: h06.php;
 * autor: anna.karutina;
 * date: 17.12.2019;
 */
// lisame andmebaasitöötlus funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'config.php';
// lisan väljundi kasutamise faili
require_once 'valjund.php';
// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);
// lehe väljund
echo '<h1>Harjutus 06</h1>';
// küsime kõik andmed
$sql = 'SELECT * FROM kliendid';
$result = getData($sql, $ikt);
// kui andmed on käes - joonistame tabeli
$tabeliPealkiri = array('Eesnimi', 'Perenimi', 'Kontakt', '');
tabelKustuta($result, array());
// klikkides kustuta linki peal kustutame kasutaja
if(!empty($_GET['kustutaID'])) {
  $id = $_GET['kustutaID'];
  // kustutamispäring
  $sql = 'DELETE FROM kliendid WHERE id="' . $id . '"';
  $result = query($sql, $ikt);
  if ($result !== false) {
    // taaskäivitame antud lehekülg
    header('Location: '.$_SERVER['PHP_SELF']);
  }
}