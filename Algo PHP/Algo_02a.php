<?php

//on initialise les variables
$resultat = 0;
do{
	//on continue de demander un nombre tant qu'on a pas obtenu de valeur numérique
	$nombre = readline("entrez un nombre\n");
}while(!is_numeric($nombre));
//on boucle et on additionne !
for($i=0 ; $i<=$nombre ; $i++){ // for : valeur de départ du compteur ; condition de continuité ; incrémentation du compteur
// $i++ == $i+=1 == $i=$i+1
	$resultat = $resultat + $i; //ou  $resultat += $i
}
//et on affiche le résultat
echo "la somme est " . $resultat;