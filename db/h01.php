<?php
/**
 * file name: h01.php;
 * autor: anna.karutina;
 * date: 10.12.2019;
 */

// lisame andmebaasitöötlus funktsioonid
require_once 'db_fnk.php';
// lisame kasutusele andmebaasi serveri konfiguratsiooni
require_once 'config.php';

// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

echo '<pre>';
print_r($ikt);