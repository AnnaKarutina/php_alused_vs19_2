<?php
/**
 * file name: index.php;
 * autor: anna.karutina;
 * date: 09.12.2019;
 */
require 'fcs.php'; // võtan külge kõik menüü loomiseks, failinime kontrollimiseks

$menu = array(
  'Avaleht' => 'avaleht',
  'Portfoolio' => 'portfoolio',
  'Kaart' => 'kaart',
  'Kontakt' => 'kontakt',
  'Firmast' => 'about'
);
pageMenu($menu);
if($_SERVER['SCRIPT_NAME'] == $_SERVER['REQUEST_URI']){
  pageContent('avaleht', $menu);
  } else {
  pageContent($_GET['leht'], $menu);
}



