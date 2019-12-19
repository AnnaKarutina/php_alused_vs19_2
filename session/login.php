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

// kontrollime vormi poolt andmed
if(!empty($_POST['nimi']) and !empty($_POST['parool'])){
  $nimi = $_POST['nimi'];
  $parool = $_POST['parool'];

  // pärime antud nimega kasutaja andmed andmebaasist
  $sql = 'SELECT * FROM kasutajad WHERE nimi="'.$nimi.'" AND parool="'.md5($parool).'"';
  $result = getData($sql, $ikt);
  // loome sessiooni antud kasutaja jaoks
  session_start();
  $_SESSION['kasutaja'] = $result[0]['nimi']; // salvestame kasutajanimi
}

// kui sessioon antud kasutajale on loodud
// ütleme tere tulemast
if(!empty($_SESSION['kasutaja'])){
  echo 'Tere tulemast, '.$_SESSION['kasutaja'].'!<br>';
  echo '<a href="page1.php">leht 1</a>';
  echo '<a href="logout.php">Logi välja</a>';
} else {
  // näita sisse logimis vorm
  loginVorm();
}