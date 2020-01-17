<?php
/**
 * Created by Projet
 * Auteur : Arthur.BOURGUE
 * Date : 25 11 2019
  */



$TblJour = array('lun','mar','mer','jeu','ven','sam','dim');
$TblNbJours = array();


echo "<div class='month'>
  <ul>
    <li class='prev'>&#10094;</a></li>
    <li class='next'>&#10095;</a></li>";

    $MoisDynamique = date("n");
    $YearsDynamique = date("Y");
    $nbjours = date("t", mktime(0,0,0,$MoisDynamique + 1,0,$YearsDynamique ));
    $Mois = date('F', mktime(0,0,0,$MoisDynamique + 1,0,$YearsDynamique ));
    $Annees = date('Y', mktime(0,0,0,$MoisDynamique + 1,0,$YearsDynamique ));


    echo '<li>' . $Mois . '<br>';
    echo '<span style = "font-size:18px">'. $Annees . '</span>';
    echo '</li >';
    echo '</ul>';
    echo '</div >';



echo '<ul class="weekdays">';
for($i = 0;$i < 7;$i++){
    echo '<li>';
    echo $TblJour[$i];
    echo '</li>';

}
echo '</ul>';
$currentsdays = date('d');

echo '<ul class="days">';
for ($t = 0; $t < date('N',mktime(0,0,0,$MoisDynamique,0,$YearsDynamique)); $t++){
    echo '<li></li>';
}
for($j = 1;$j < $nbjours + 1;$j++){

    if($j == date('j')){
        $TblNbJours[$j] = $j;
        echo '<li>'.'<span class="active">'.$TblNbJours[$j].'</span>'.'</li>';
    }else{
        $TblNbJours[$j] = $j;
        echo '<li>'.$TblNbJours[$j].'</li>';
    }
      }
?>
<link rel="stylesheet" href="view/content/calendar/Exo4_CSS.css">
