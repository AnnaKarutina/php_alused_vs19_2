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
// tabeli ümbernimetamine
$sql = 'RENAME TABLE `anna_db`.`TABLE 1` TO `anna_db`.`koolid2015`';
$result = query($sql, $ikt);