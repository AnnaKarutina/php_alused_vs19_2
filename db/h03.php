<?php
/**
 * file name: h03.php;
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
// näitame otsingu vorm
otsinguVorm();
// kasutamine vormi kaudu tulnud andmed
if(isset($_GET['otsi'])){
  $otsi = $_GET['otsi']; // salvestame otsingu andmed
  // kui andmed on reaalsed - mida on sisestatud vormi input välja sisse
  if(strlen($otsi) > 0){
    // koostame antud andmete otsingu päring
    $sql = 'SELECT 2015,Kool FROM koolid2015 WHERE Kool LIKE "%'.$otsi.'%"';
    // saadame päring andmebaasi
    $result = getData($sql, $ikt);
    // kui andmed on olemas
    if($result !== false){
      // väljastame need
      $pealkirjad = array('2015', 'Kool');
      tabel($result, $pealkirjad);
    }
  } else {
    echo 'Tuleb täpsustada otsing <br>';
  }

}

