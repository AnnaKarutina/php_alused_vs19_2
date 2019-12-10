<?php
/**
 * file name: db_fnk.php;
 * autor: anna.karutina;
 * date: 10.12.2019;
 */

// ühenduse loomine
function connect($host, $user, $pass, $dbname){
  // ühendus andmebaasiga
  $link = mysqli_connect($host, $user, $pass, $dbname);
  // kui ühendust ei tekkinud
  if($link === false){
    echo 'Probleem andmebaasi ühendusega<br>';
    exit;
  }
  // olemasolev ühendus tagastame põhiprogrammile
  return $link;
}
