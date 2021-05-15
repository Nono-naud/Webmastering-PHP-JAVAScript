<?php
/*Exercice 2 :
Générer une phrase puis écrire un script qui enlève tous les espaces inutiles
de la phrase.
Règles de Gestion
● Les espaces inutiles sont:
○ les espaces en début et fin de chaîne
○ les espace avant un point
○ les espaces successives
○ les espaces avant une apostrophe */

$str = " La mére d' Aminata est allée au marché . ";
$replaced = preg_replace("/\s+/", "", $str);
echo $str."<br>";
echo $replaced;


?>