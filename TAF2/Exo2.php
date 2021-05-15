<?php
/*Exercice : Générer trois nombres entiers puis les afficher dans l'ordre
croissant et dans l’ordre décroissant*/

//Données
define("MIN",-20);
define("MAX",20);
$nbre1=rand(MIN,MAX);
$nbre2=rand(MIN,MAX);
$nbre3=rand(MIN,MAX);

//Condition
if($nbre1>$nbre2){
    $min=$nbre2;
    $max=$nbre1;
}else{
  $min=$nbre1;
  $max=$nbre2;
}
if($nbre3<$min){
    $moy=$min;
    $min=$nbre3;
}else{
    if($nbre3<$max){
      $moy=$nbre3;
    }else{
      $moy=$max;
      $max=$nbre3;
    }

}
//Affichage
echo "L'ordre croissant donne {$min} < {$moy} < {$max} <br>";
echo "L'ordre décroissant donne {$max}> {$moy} > {$min}";  
?>