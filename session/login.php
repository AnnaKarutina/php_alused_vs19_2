<?php
/**
 * file name: login.php;
 * autor: anna.karutina;
 * date: 19.12.2019;
 */

require_once 'config.php';
require_once 'db_fnk.php';
require_once 'output.php';
// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

// näita sisse logimis vorm
loginVorm();

// kontrollime vormi poolt andmed
if(!empty($_POST['nimi']) and !empty($_POST['parool'])){
  $nimi = $_POST['nimi'];
  $parool = $_POST['parool'];

  // pärime antud nimega kasutaja andmed andmebaasist
  $sql = 'SELECT * FROM kasutajad WHERE nimi="'.$nimi.'" AND parool="'.md5($parool).'"';
  $result = getData($sql, $ikt);
  echo '<pre>';
  print_r($result);
}