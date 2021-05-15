<?php
/*Exercice : Générer deux nombres entiers puis les afficher dans l'ordre
croissant et dans l’ordre décroissant*/

//Données
define("MIN",-20);
define("MAX",20);
$nbre1=rand(MIN,MAX);
$nbre2=rand(MIN,MAX);

//Condition
$min=null;
$max=null;
  if($nbre1<$nbre2){
    $min=$nbre1;
    $max=$nbre2;
  }

  if($nbre2<=$nbre1){
    $min=$nbre2;
    $max=$nbre1;
  }

//Affichage
  echo "L'ordre croissant donne {$min}, {$max} <br>";
  echo "L'ordre décroissant donne {$max}, {$min}";  
?>