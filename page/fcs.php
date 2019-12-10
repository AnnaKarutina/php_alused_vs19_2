<?php
/**
 * file name: fcs.php;
 * autor: anna.karutina;
 * date: 09.12.2019;
 */
function pageMenu($menuData){
  // menüü asub massiivis kujul Nimetus => failinimi
  foreach ($menuData as $menuName => $fileName){
    // link hakkab index.php-st
    $link = 'index.php';
    if($fileName != 'avaleht'){
      // v.a. avalehele loome dünaamiline link
      // link on kujul index.php?leht=failinimi
      $link .= '?leht='.$fileName;
    }
    // väljastame loodud lingiga menüü element
    echo '<a href="'.$link.'">'.$menuName.'</a>&nbsp;&nbsp;';
  }
}

function control($pageName, $menuData){
  // kontrollime, et linki leht=failinimi kaudu failinimi on edastatud
  // ja see on menüü massiivi sees olemas
  if(strlen($pageName) > 0 and array_search($pageName, $menuData)){
    // tegelikult pageName on failinimi
    // lisame sellele veel laiend faili olemasolu ja muude kontrollimiseks
    $fileName = $pageName.'.php';
    if(is_file($fileName) and is_readable($fileName) and file_exists($fileName)){
      return true;
    }
  }
  return false; // vastasel juhul on false - ei ole leitud või ei ole lisatud
}

function pageContent($pageName, $menuData) {
  // kui failinimi on edastatud ja olemas massiivis
  if(control($pageName, $menuData)) {
    // ühendame failisisu külge
    include($pageName.'.php');
  } else {
    // muidu anname probleemist teade
    echo '<h2>Pöördusid vale lehe poole!</h2>';
  }
}