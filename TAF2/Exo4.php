<?php
/*Exercice : soit l'équation ax 2+bx+c=0,générer la valeur de a , de b et de c
puis donner les solution de l'équation ci dessus.*/

//Données
define("MIN",-20);
define("MAX",20);
$a=rand(MIN,MAX);
$b=rand(MIN,MAX);
$c=rand(MIN,MAX);

//Résolution de l'équation et affichge
echo "La solution de l'équation {$a}x2+{$b}x+{$c}=0 est : <br>";
$delta=$b*$b-(4*$a*$c);
if($delta<0){
    echo "Cette équation n'a pas de solution.";
} elseif ($delta==0){
    $x=-$b/2*$a;
    echo "Cette équation a une racine double égale à : {$x}";
}else{
    $x1=-($b-sqrt($delta))/(2*$a);
    $x2=-($b+sqrt($delta))/(2*$a);
    echo "Cette équation a deux racines égale à : {$x1}, {$x2}";
}
?>