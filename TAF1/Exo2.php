<?php
/*Exercice III : Point: Générer deux points puis calculer et afficher la
distance entre les deux points.Un point est caractérisé par son abscisse et
son Ordonnée.*/

//Calcul de la distance
function carre($nbre){
      return $nbre*$nbre;
}
function distance(int $x1, int $y1, int $x2, int $y2):float{
    return sqrt(carre($y2 - $y1) + carre($x2 - $x1));

}
//Données
define("MIN",-20);
define("MAX",20);
$x1=rand(MIN,MAX);
$x2=rand(MIN,MAX);
$y1=rand(MIN,MAX);
$y2=rand(MIN,MAX);
//Affichage

echo "La distance entre le point A({$x1},{$y1}) et le point B({$x2},{$y2})
         est égale à: <br>".distance( $x1,  $y1,  $x2,  $y2);
?>