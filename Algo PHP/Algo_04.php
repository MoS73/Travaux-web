<?php
//on crée le tableau qui contiendra nos nombres
$tabNb = [];
//on crée une variable pour enregistrer chaque entrée (afin de vérifier si elle est valide avant de la ranger dans le tableau)
//on est pas obligé de l'initialiser, on mettra forcément quelque chose dedans avant de s'en servir
$nombre = "";
do{
    //on continue de demander un nombre tant qu'on a pas obtenu le zéro
    $nombre = readline("entrez un nombre" . PHP_EOL);
    
    if(is_numeric($nombre)){
        //on ajoute la valeur au tableau si c'est bien un nombre
        $tabNb[] = $nombre;
    }else{
        //message d'avertissement pour ceux qui entrent quelque chose de non valide
        echo "entrez un NOMBRE !" . PHP_EOL;
    }
}while($nombre != 0 || !is_numeric($nombre));

//puis on trie les éléments !
$temp = 0;
//on parcourt le tableau en comparant les éléments deux à deux
for($i=0 ; $i<(count($tabNb)-1) ; $i++){//à chaque tour de la grande boucle, on place le plus petit élément du tableau vérifié
    for($j=$i+1 ; $j<count($tabNb) ; $j++ ){
        if($tabNb[$i] > $tabNb[$j]){ //si l'élément d'indice i est supérieur à l'élément d'indice j, on les échange
            //tri par substitution
            $temp = $tabNb[$i];
            $tabNb[$i] = $tabNb[$j];
            $tabNb[$j] = $temp;
        }
    }
}

//et l'affichage du tableau trié
foreach ($tabNb as $value) {
    
    echo $value . PHP_EOL;
}