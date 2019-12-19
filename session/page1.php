<?php
/**
 * file name: page1.php;
 * autor: anna.karutina;
 * date: 19.12.2019;
 */
session_start(); // jätkame sessiooni
echo 'Tere tulemast, '.$_SESSION['kasutaja'].'!<br>';
echo 'See on leht1';
echo '<a href="logout.php">Logi välja</a>';