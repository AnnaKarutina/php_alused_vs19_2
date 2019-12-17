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
// lisan väljundi kasutamise faili
require_once 'valjund.php';

// ühendus ikt serveris oleva andmebaasiga
$ikt = connect(HOST, USER, PASS, DBNAME);

// katsetame sql
$sql = 'SELECT Kool,Kokku FROM koolid2015';
$result = getData($sql, $ikt);
$tabeliPealkirjad = array('Kool', '2012');
tabel($result, $tabeliPealkirjad);