<?php
$resultat = null;
for($i=0;$i<20;$i++){
	do{
		//on continue de demander un nombre tant qu'on a pas obtenu de valeur numérique
		$nombre = readline("entrez un nombre" . PHP_EOL);
		//message d'avertissement pour ceux qui entrent quelque chose de non valide
		if(!is_numeric($nombre)){
			echo "entrez un NOMBRE !" . PHP_EOL;
		}
	}while(!is_numeric($nombre));
	//si le nombre entré est supérieur à l'actuel plus grand nombre, c'est le nouveau plus grand
	if($nombre > $resultat){
		$resultat = $nombre;
	}
	
}
//à la fin de la boucle : on affiche le résultat
echo "le plus grand des nombres donnés est " . $resultat; 