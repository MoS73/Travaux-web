<?php
//on crée une variable pour stocker le nbMystere et on lui assigne une valeur aléatoire obtenue via la fonction rand
$nbMystere = rand(0, 100);

//réponse initialisée à -1 : on est certain d'entrer dans la boucle
$reponse = -1;
//on boucle la question avec un while
//boucle while : on continue de tourner tant que la condition est vérifiée
while($reponse != $nbMystere)
{ //si $reponse est différent de $nbMystere
	$reponse = readline("entrez un nombre entre 0 et 100" . PHP_EOL);
	//condition : si elle est vérifiée on entre dans le bloc
	//si $reponse n'est pas une valeur numérique
	if(!is_numeric($reponse))
	{
		echo "entrez un nombre valide" . PHP_EOL;
	} 
	else if($reponse > $nbMystere)
	{
		echo "essayez plus petit !" . PHP_EOL;
	}
	else if($reponse < $nbMystere)
	{ //on entre dans un else si on est pas entré dans son bloc if
		echo "essayez plus grand !" . PHP_EOL;
	}
}
//si on sort de cette boucle on a forcément trouvé la bonne valeur
echo "Bravo ! vous avez trouvé !";