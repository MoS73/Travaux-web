<?php

/* Algorithme 1 

Définir une variable comprise entre 0 et 100
Demander à l’utilisateur un nombre jusqu’à ce qu’il trouve le nombre mystère.
L’algorithme doit indiquer si le nombre donné est supérieur ou inférieur au nombre mystère.
Si
l’utilisateur trouve le bon nombre le msg « Bravo vous avez trouvé » doit s’afficher
*/

    $nbAlea = rand(0,100);
    $nbOK = false   ;
    echo("$nbAlea" .PHP_EOL);
    while ($nbOK != true) {
        $nbUser = readline("Entrer un nombre : " .PHP_EOL);
        echo(PHP_EOL);
        if (is_numeric($nbUser) && round($nbUser) == $nbUser)
            
            if ($nbUser > $nbAlea) {
                echo("Le nombre auquel je pense est plus petit !" .PHP_EOL);
            }
            elseif ($nbUser < $nbAlea){
                echo("Le nombre auquel je pense est plus grand !" .PHP_EOL);
            }
            else {
                echo("Bravo !" .PHP_EOL);
                $nbOK = true;
            }
        else
        echo "Ce n'est pas un nombre entier !" .PHP_EOL;
    }
?>