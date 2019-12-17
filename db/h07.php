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
echo '<h1>Harjutus 07</h1>';
// küsime kõik andmed
$sql = 'SELECT * FROM kliendid';
$result = getData($sql, $ikt);
// kui andmed on käes - joonistame tabeli
$tabeliPealkiri = array('Eesnimi', 'Perenimi', 'Kontakt', '');
tabelKustutaMuuda($result, $tabeliPealkiri);

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

// klikkides muuda lingi peal muudame kasutaja andmed
if(!empty($_GET['muudaID'])){
  $id = $_GET['muudaID'];
  // nüüd kui id käes, siis küsime vajalikud andmed andmebaasist
  $sql = 'SELECT * FROM kliendid WHERE id="'.$id.'"';
  $result = getData($sql, $ikt);
  // kui andmed olemas - lisame need vormi
  if($result !== false){
    muudaAndmedVorm($result[0]);
  }
}

// kui vajutasime Muuda nuppule - andmed on lingis
if(!empty($_GET['muudanyyd']) and $_GET['muudanyyd'] == 'Muuda'){
  $id = $_GET['id'];
  $enimi = $_GET['enimi'];
  $pnimi = $_GET['pnimi'];
  $kontakt = $_GET['kontakt'];
  // koostame uuendus lause
  $sql = 'UPDATE kliendid SET '.
    'enimi="'.$enimi.'", '.
    'pnimi="'.$pnimi.'", '.
    'kontakt="'.$kontakt.'" WHERE '.
    'id="'.$id.'"';
  $result = query($sql, $ikt);
  if ($result !== false) {
    // taaskäivitame antud lehekülg
    header('Location: '.$_SERVER['PHP_SELF']);
  }
}