<?php
/**
 * file name: ${FILE_NAME};
 * autor: anna.karutina;
 * date: 26.11.2019;
 */

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
