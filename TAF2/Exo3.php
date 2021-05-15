<?php
/*Exercice : soit l'équation ax+b=0,générer la valeur de a et de b puis donner
les solution de l'équation ci dessus.*/

//Données
define("MIN",-20);
define("MAX",20);
$a=rand(MIN,MAX);
$b=rand(MIN,MAX);

//Résolution de l'équation et affichge
if($a==0){
	if ($b==0){
		echo "L'ensemble des solutions de l'équation {$a}x+({$b})=0 est l'ensemble des nombres réels.";
	}else{
		echo "<p>L'ensemble des solutions de l'équation {$a}x+({$b})=0 est l'ensemble vide.";
	}
}else{
	$x=-$b/$a;
	echo "L'équation {$a}x+({$b})=0 possède une et une seule solution : {$x}";
}   
?>