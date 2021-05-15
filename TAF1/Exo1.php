<?php
/*Exercice II: Générer deux nombres puis faire leur permutation.On
affichera les deux nombres avant et après permutations.*/


//Données
define("MIN",-20);
define("MAX",20);
$a=rand(MIN,MAX);
$b=rand(MIN,MAX);

echo "Avant permutation: <br>";
echo "1er nombre = {$a} <br>";
echo "2éme nombre = {$b} <br>";

//Permutation des contenus des deux variables
$e=$a;
$a=$b;
$b=$e;
echo "Aprés permutation: <br>";
echo "1er nombre = {$a} <br>";
echo "2éme nombre = {$b} <br>";
   
?>