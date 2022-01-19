<?php

/*
Demander une variable à l'utilisateur entre 0 et 100.
l'algorithme doit afficher la somme des nombres inférieurs ou égale à ce  nombre.
Exemple si l'on rentre 5, le programme doit calculer : 1+2+3+4+5 = 15
NB : On souhaite afficher uniquement le résultat, pas la décomposition du calcul.
*/

$somme = 0;

$user1 = readline("Bonjour, donnez moi 1 nombre entier entre 0 et 100 ");
for($numb = 1;$numb <= $user1; $numb ++) {
   // echo $numb . PHP_EOL;  afin que la décomposition n'apparaisse pas 
    $somme = $somme + $numb;
    //$somme = 0 + 1
    //$somme = 1 + 2
    //$somme = 3 + 3
    //$somme = 6 + 4
    //$somme = 10 + 5
   
}

echo $somme;






?>
