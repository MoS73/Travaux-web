<?php
$reponse = rand(0, 100);
$reponse = readline("entrez un nombre entre 0 et 100" . PHP_EOL);
echo "La somme est " . ($reponse * ($reponse+1))/2;