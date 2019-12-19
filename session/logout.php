<?php
/**
 * file name: logout.php;
 * autor: anna.karutina;
 * date: 19.12.2019;
 */
session_start(); // sessiooni jatkamine
session_unset(); // puhastame sessiooni muutujad
session_destroy(); // sessiooni lõpetamine
header('Location: login.php');
