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

// suvalise päringu saatmine andmebaasi
function query($sql, $link){
  $result = mysqli_query($link, $sql);
  if($result === false){
    echo 'Probleem päringuga <b>'.$sql.'</b><br>';
  }
  return $result;
}

// SELECT, SHOW, DESCRIBE or EXPLAIN sql jaoks
function getData($sql, $link){
  $result = query($sql, $link); // saadame päring meie funktsiooni abil
  $data = array(); // siin salvestame päringu andmed
  // nii kaua, kui andmed on, loeme need
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $data[] = $row; // ja salvestame meie massiivi
  }
  // kui massiiv on tühi - andmete lugemise probleem
  if(count($data) == 0){
    return false;
  }
  // muidu tagastame loetud andmed
  return $data;
}