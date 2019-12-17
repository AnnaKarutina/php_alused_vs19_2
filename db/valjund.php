<?php
/**
 * file name: valjund.php;
 * autor: anna.karutina;
 * date: 17.12.2019;
 */
// tabel pealkirjaga
function tabel($andmed, $pealkirjad){
  echo '<table>';
    echo '<thead>';
      echo '<tr>';
      foreach ($pealkirjad as $pealkiri){
        echo '<th>'.$pealkiri.'</th>';
      }
      echo '</tr>';
    echo '</thead>';
    echo '<tbody>';
    foreach ($andmed as $tabeliRida){
      echo '<tr>';
      foreach ($tabeliRida as $vaartus){
        echo '<td>'.$vaartus.'</td>';
      }
      echo '</tr>';
    }
    echo '</tbody>';
  echo '</table>';
}

// otsingu vorm
function otsinguVorm(){
  echo '
  <form action="" method="get">
		<input type="text" name="otsi">
		<input type="submit" value="Otsi"> 
	</form>';
}

// andmete lisamise vorm
function lisaAndmedVorm(){
  echo
  '<form action="" method="get">
      Eesnimi <input type="text" name="enimi">
      Perenimi <input type="text" name="pnimi">
      Kontakt <input type="text" name="kontakt">
      <input type="submit" value="Salvesta">
    </form>
  ';
}

function tabelKustuta($andmed, $pealkirjad){
  echo '<table>';
  echo '<thead>';
  echo '<tr>';
  foreach ($pealkirjad as $pealkiri){
    echo '<th>'.$pealkiri.'</th>';
  }
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  foreach ($andmed as $tabeliRida){
    echo '<tr>';
      echo '<td>'.$tabeliRida['enimi'].'</td>';
      echo '<td>'.$tabeliRida['pnimi'].'</td>';
      echo '<td>'.$tabeliRida['kontakt'].'</td>';
      echo '<td><a href="?kustutaID='.$tabeliRida['id'].'">kustuta</a></td>';
    echo '</tr>';
  }
  echo '</tbody>';
  echo '</table>';
}

function tabelKustutaMuuda($andmed, $pealkirjad){
  echo '<table>';
  echo '<thead>';
  echo '<tr>';
  foreach ($pealkirjad as $pealkiri){
    echo '<th>'.$pealkiri.'</th>';
  }
  echo '</tr>';
  echo '</thead>';
  echo '<tbody>';
  foreach ($andmed as $tabeliRida){
    echo '<tr>';
    echo '<td>'.$tabeliRida['enimi'].'</td>';
    echo '<td>'.$tabeliRida['pnimi'].'</td>';
    echo '<td>'.$tabeliRida['kontakt'].'</td>';
    echo '<td><a href="?kustutaID='.$tabeliRida['id'].'">kustuta</a></td>';
    echo '<td><a href="?muudaID='.$tabeliRida['id'].'">muuda</a></td>';
    echo '</tr>';
  }
  echo '</tbody>';
  echo '</table>';
}

function muudaAndmedVorm($andmed){
  echo
  '<form action="" method="get">
        <input type="text" name="id" value="'.$andmed['id'].'" hidden><br>
        Eesnimi <input type="text" name="enimi" value="'.$andmed['enimi'].'"><br>
        Perenimi <input type="text" name="pnimi" value="'.$andmed['pnimi'].'"><br>
        Kontakt <input type="text" name="kontakt" value="'.$andmed['kontakt'].'"><br>
        <input type="submit" value="Muuda" name="muudanyyd">
    </form>';
}